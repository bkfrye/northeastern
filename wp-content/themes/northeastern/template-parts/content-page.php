<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section class="banner_interior" style="background-image:url(<?php echo get_field('hero_image');?>)">
	<div class="banner_content">
		<div class="page_title">
			<?php the_title('<h1>','</h1>');?>
		</div>
	</div>
</section>
<div class="child_menu">
	<p>More Links</p>
	<div class="child_menu-wrap">
		<?php wpb_list_child_pages(); ?>
	</div>
</div>
<section class="content">
	<article>
		<?php
			echo '<div class="intro_section">' . get_field('intro_section') . '</div>';
			echo '<div class="main_section">' . get_field('main_section') . '</div>';

			$accordion = get_field('nu_content');

			if ($accordion){
				get_template_part('template-parts/accordion');
			}
		?>
	</article>
	<aside>
		<?php
			$sidebar_items =  get_field('sidebar_items');

			if( empty($sidebar_items) ) {
				get_template_part('template-parts/sidebar', 'events');
			}
			else{
				if ( in_array('facebook', $sidebar_items) ) {
					get_template_part('template-parts/sidebar', 'facebook');
				}
				if ( in_array('events', $sidebar_items) ) {
					get_template_part('template-parts/sidebar', 'events');
				}
				if ( in_array('connect', $sidebar_items) ) {
					get_template_part('template-parts/sidebar', 'connect');
				}
			}

			wp_reset_postdata();
		?>
	</aside>

</section>

<?php get_template_part('template-parts/super-footer');?>

<!-- <script type="text/javascript">
	var wall = new Freewall("#freewall");
	wall.reset({
		selector: '.cell',
		animate: true,
		cellW: 10,
		cellH: 300,
		onResize: function() {
			wall.fitWidth();
		}
	});
	wall.fitWidth();
	// for scroll bar appear;
	jQuery(window).trigger("resize");
</script> -->
