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
		<?php the_content(); ?>
	</article>
	<aside>
		<?php get_template_part('template-parts/sidebar', 'facebook'); ?>
		<?php get_template_part('template-parts/sidebar', 'events'); ?>


	</aside>

</section>

<section class="img_gallery">
	<div id="freewall">
	<?php
		// get_template_part( 'template-parts/freewall' );
	?>
	</div>
</section>

<section class="blog">
	<?php
		// get_template_part( 'template-parts/blog', 'footer' );
	?>

	<!-- <div class="view_more">
		<a href="#" class="btn_red">View More</a>
	</div> -->
</section>

<section class="signups">
	<div class="stay_connected">
		<h3><span class="bold">Stay connected</span> and share your successes.</h3>
		<input type="text" name="name" value="">

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

<section class="contact_person">
	<article>

	</article>

</section>

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
