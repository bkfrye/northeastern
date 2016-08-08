<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section class="banner_interior" style="background-image:url(http://northeastern.dev/wp-content/uploads/2016/08/unspecified-1.jpg)">
	<div class="banner_content">
		<div class="page_title">
			<h1>Page Title</h1>
		</div>
	</div>
</section>

<section class="content">
	<article>
		<?php the_content(); ?>
	</article>
	<aside>
		<p>
		</p>

	</aside>

</section>

<section class="img_gallery">
	<?php
		get_template_part( 'template-parts', 'freewall' );
	?>
</section>

<section class="blog">
	<?php
		// get_template_part( 'template-parts/blog', 'footer' );
	?>


	<div class="view_more">
		<a href="#" class="btn-red">View More</a>
	</div>
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
