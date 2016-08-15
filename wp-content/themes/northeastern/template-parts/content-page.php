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

<section class="content">
	<article>
		<?php
			echo '<div class="intro_section">' . get_field('intro_section') . '</div>';
			echo '<div class="main_section">' . get_field('main_section') . '</div>';
		?>
	</article>
	<aside>
		<?php
			$sidebar_items =  get_field('sidebar_items');

			if( empty($sidebar_items) ) {
				get_template_part('template-parts/sidebar', 'events_main');
			}
			else{
				if ( in_array('facebook', $sidebar_items) ) {
					get_template_part('template-parts/sidebar', 'facebook');
				}
				if ( in_array('events', $sidebar_items) ) {
					get_template_part('template-parts/sidebar', 'events_main');
				}
				if ( in_array('events', $sidebar_items) ) {
					get_template_part('template-parts/sidebar', 'connect');
				}
			}
		?>
	</aside>

</section>

<section class="img_gallery">
	<div id="freewall">
	<?php
		// get_template_part( 'template-parts/freewall' );
	?>
	</div>
</section>


	<?php
		// get_template_part( 'template-parts/blog', 'footer' );
	?>



<section class="signups">
	<div class="stay_connected">
		<h3><span>Stay connected</span><br>and share your successes.</h3>
		<?php echo gravity_form( 1, false, false, false, '', true ); ?>

	</div>
	<div class="contribute">
		<div>
			<h3>Become a Contributor</h3>
			<p>A stronger, more connected alumni network benefits all of us. What brilliance can you share?</p>
		</div>
		<div>
			<a href="#" class="btn">Connect Now</a>
		</div>

	</div>
</section>

<?php get_template_part( 'template-parts/contact-person' );?>

<script type="text/javascript">
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
</script>
