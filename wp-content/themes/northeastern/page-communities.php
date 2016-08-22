<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section id="events">
			<ul>
			<?php
				$args = array(
					'post_type' => 'communities',
					'orderby' => 'title',
					'order' => 'ASC'
				);

				$communities = new WP_Query( $args );
				while ( $communities->have_posts() ) : $communities->the_post();


				echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';

				endwhile;
			?>
			</ul>
		</section>
	</main>
</div>

<?php get_footer(); ?>
