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

// check to see if this works
// apply_filters( 'toolset_filter_toolset_admin_bar_menu_disable', true );

/******************************************/
/** CPT Modifications        *******/
/******************************************/
add_filter( 'enter_title_here', 'change_events_default_title' );
function change_events_default_title( $title ){
   $screen = get_current_screen();
   if ( 'events' == $screen->post_type ){
       $title = 'Enter the event name here';
   }
   if ( 'contacts' == $screen->post_type ){
       $title = 'Enter name here';
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

	wp_enqueue_script( 'nav', get_stylesheet_directory_uri().'/assets/js/nav.js', array('jquery'), true);
	wp_enqueue_script( 'northeastern-script', get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'), true);

	if(is_front_page()){
		wp_enqueue_style( 'front-page-styles', get_bloginfo('stylesheet_directory') . '/assets/css/pages/front-page.css', false );
		wp_enqueue_style( 'owl-styles', get_bloginfo('stylesheet_directory') . '/assets/css/owl.carousel.css', false );
		wp_enqueue_script( 'isotope', get_stylesheet_directory_uri() . '/assets/js/isotope.js', '', true);
		wp_enqueue_script( 'owl', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), true);
	}

	if(!is_front_page()){
		wp_enqueue_style( 'page-styles', get_bloginfo('stylesheet_directory') . '/assets/css/pages/page-main.css', false );
		wp_enqueue_script( 'freewall', get_stylesheet_directory_uri().'/assets/js/freewall.js', array('jquery'), true);
	}

	if(is_page('events')){
		wp_enqueue_style( 'events-styles', get_bloginfo('stylesheet_directory') . '/assets/css/pages/page-events.css', false );
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





/******************************************/
/************** Navigation ****************/
/******************************************/
function return_menu_html_via_ajax() {
	$wpHeader = get_header();

	echo $wpHeader;
	exit();
	die();
}
add_action( 'wp_ajax_nopriv_menu_request', 'return_menu_html_via_ajax' );

/**
 *
 */
class NU_Menu_Maker_Walker extends Walker {

	var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class='nu-shared-navigation__sub-menu-item' aria-hidden='true'>\n";
	}

	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul>\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		/* Add active class */
		if(in_array('current-menu-item', $classes)) {
			$classes[] = 'active';
			unset($classes['current-menu-item']);
		}

		/* Check for children */
		$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
		if (!empty($children)) {
			$classes[] = 'nu-shared-navigation__has-sub';
		}

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = join( ' ', array( $class_names, 'nu-shared-navigation__menu-item', 'nu-shared-navigation__menu__menu-item' ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $aria . '>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'><span>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</span>';
		if (!empty($children)) {
			$item_output .= '<div class="svg-container visible-xs-inline-block visible-sm-inline-block">
				<svg class="svg svg__svg-icon--white" width="100%" height="100%" viewBox="0 0 16 32">
					<path d="M14.125 11.438l1.875 1.875-8 8-8-8 1.875-1.875 6.125 6.125z"></path>
				</svg>
			</div>';
		}
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>\n";
	}

}


?>
