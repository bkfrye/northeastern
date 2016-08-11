<?php
require_once('inc/custom-post-type.php');
require_once('inc/Mobile_Detect.php');
$detect = new Mobile_Detect;

function northeastern_setup() {
	register_nav_menus( array(
		'primary' => __( 'Primary Nav', 'northeastern' ),
		'footer-left' => __( 'Footer - Left-col', 'northeastern' ),
		'footer-center' => __( 'Footer - Center-col', 'northeastern' ),
		'footer-right' => __( 'Footer - Right-col', 'northeastern' ),
	) );
}
add_action( 'after_setup_theme', 'northeastern_setup' );

/******************************************/
/************* Site Branding **************/
/******************************************/

function login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            width: auto;
            height: 42.46px;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/logo.svg);
            background-size: 405.32px 44.46px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );

// Custom Favicon
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

/******************************************/
/** Remove Tabs from admin ****************/
/******************************************/
add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

// Restrict ACF Access
function my_acf_show_admin($show) {
	// provide a list of usernames who can edit custom field definitions here
	$admins = array(
		'admin'
	);

	// get the current user
	$current_user = wp_get_current_user();

	return (in_array($current_user->user_login, $admins));
}
add_filter('acf/settings/show_admin', 'my_acf_show_admin');

/******************************************/
/** Events CPT Modifications        *******/
/******************************************/
add_filter( 'enter_title_here', 'change_events_default_title' );
function change_events_default_title( $title ){
   $screen = get_current_screen();
   if ( 'events' == $screen->post_type ){
       $title = 'Enter the event name here';
   }
   return $title;
}

/******************************************/
/** Enqueue/Dequeue Styles and Scripts **/
/******************************************/
function northeastern_scripts(){

	$post = get_post();

	// add styles
	wp_enqueue_style( 'ne-typeface', 'https://fast.fonts.com/cssapi/cac43e8c-6965-44df-b8ca-9784607a3b53.css', '', false);
	wp_enqueue_style( 'ne-alumni-styles', get_stylesheet_directory_uri() . '/assets/css/styles.css', '', false);

	// add dep scripts
	// wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri().'/js/modernizr.js', array(), true);

	wp_enqueue_script( 'northeastern-script', get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'), true);
	wp_enqueue_script( 'freewall', get_stylesheet_directory_uri().'/assets/js/freewall.js', array('jquery'), true);

	if(is_front_page()){
		wp_enqueue_style( 'front-page-styles', get_bloginfo('stylesheet_directory') . '/assets/css/pages/front-page.css', false );
		wp_enqueue_style( 'owl-styles', get_bloginfo('stylesheet_directory') . '/assets/css/owl.carousel.css', false );
		wp_enqueue_script( 'masonry-layout', get_stylesheet_directory_uri() . '/assets/js/masonry.js', '', true);
		wp_enqueue_script( 'owl', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), true);
	}

	if(!is_front_page()){
		wp_enqueue_style( 'page-styles', get_bloginfo('stylesheet_directory') . '/assets/css/pages/page-main.css', false );
	}
}
add_action( 'wp_enqueue_scripts', 'northeastern_scripts' , 11);


function unhook_parent_styles() {

  wp_dequeue_style( 'twentysixteen-style' );
  wp_deregister_style( 'twentysixteen-style' );

  wp_dequeue_style( 'twentysixteen-fonts' );
  wp_deregister_style( 'twentysixteen-fonts' );

  wp_dequeue_style( 'genericons' );
  wp_deregister_style( 'genericons' );
}
add_action( 'wp_enqueue_scripts', 'unhook_parent_styles', 20 );

/******************************************/
/***** Defer Loading JS Scripts ***********/
/******************************************/
function move_js() {
   remove_action('wp_head', 'wp_print_scripts');
   remove_action('wp_head', 'wp_print_head_scripts', 9);
   remove_action('wp_head', 'wp_enqueue_scripts', 1);
}
// add_action( 'wp_enqueue_scripts', 'move_js' );

// loads gravity form scripts in footer
// add_filter( 'gform_init_scripts_footer', '__return_true' );


// loads gravity forms ajax scripts in footer
	// add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open' );
	// function wrap_gform_cdata_open( $content = '' ) {
	// 	$content = 'document.addEventListener( "DOMContentLoaded", function() { ';
	// 	return $content;
	// }
	// add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close' );
	// function wrap_gform_cdata_close( $content = '' ) {
	// 	$content = ' }, false );';
	// 	return $content;
	// }

// Prevents page from scrolling to top of page after submission
// add_filter( 'gform_confirmation_anchor', '__return_false' );


/******************************************/
/***** REGISTER/INIT SIDEBARS *************/
/******************************************/

function remove_base_widgets(){

	// Unregister twentysixteen sidebars
	unregister_sidebar( 'sidebar-1' );
	unregister_sidebar( 'sidebar-2' );
	unregister_sidebar( 'sidebar-3' );
}
add_action( 'widgets_init', 'remove_base_widgets', 11 );


/******************************************/
/***** CUSTOMIZE MCE EDITOR ***************/
/******************************************/
// function mce_style_select( $buttons ) {
//     array_push( $buttons, 'styleselect' );
//     return $buttons;
// }
// add_filter( 'mce_buttons', 'mce_style_select' );
//
// function constrain_mce_editor( $init ) {
//
//     $default_colours = '"0a82be", "Brand Blue",  "0f1a26", "Inky Black"';
//     $init['textcolor_map'] = '['.$default_colours.']';
//
//     $style_formats = array(
//         array(
//             'title' => 'ALL CAPS',
//             'inline'    => 'span',
//             'classes' => 'caps',
//         ),
//     );
//
//     $init['style_formats'] = json_encode( $style_formats );
//
//     return $init;
// }
//
// add_filter('tiny_mce_before_init', 'constrain_mce_editor');


/******************************************/
/************** SVG Support ***************/
/******************************************/

function custom_mtypes( $m ){
    $m['svg'] = 'image/svg+xml';
    $m['svgz'] = 'image/svg+xml';
    return $m;
}
add_filter( 'upload_mimes', 'custom_mtypes' );



?>
