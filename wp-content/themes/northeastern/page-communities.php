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
			<!-- <ul> -->
			<?php



				$my_cat_menu = array(
					 'title_li' => __( '' ),
					 'order_by' => 'name',
					 'child_of' => 2
				);

				echo '<ul class="my-categories-menu">';
					wp_list_categories( $my_cat_menu );
				echo '</ul>';


				$cat = get_categories();
				echo '<pre>';
				var_dump( $cat );
				echo '</pre>';

				// $args = array(
				// 	'post_type' => 'communities',
				// 	'orderby' => 'category',
				// 	'order' => 'ASC'
				// );
				//
				// $communities = new WP_Query( $args );
				// while ( $communities->have_posts() ) : $communities->the_post();
				// $category = get_the_category_list($post->ID);
				//
				// echo '<li>';
				// 	echo '<h3>'. $category[0]->name.'</h3>';
				//
				//
				// echo '</li>';
				//
				// endwhile;
			?>
			<!-- </ul> -->
		</section>
	</main>
</div>

<?php get_footer(); ?>
