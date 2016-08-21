<?php
/**
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<section class="blog">
	<div class="blog_wrap">
		<h3>BLOG</h3>
		<ul class="blog_content">
		<?php

		// Set up global variables
		global $wpdb, $blog_id, $post;

		$globalcontainer = array();
			switch_to_blog( 2 );

			$globalquery = get_posts( 'numberposts=4&post_type=post' );


			foreach($globalquery as $post) : setup_postdata($post);
				echo '<li><a href="'. get_post_permalink() .'"><div class="blog_card">';
				if (has_post_thumbnail( $post->ID ) ):
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );

					echo '<div class="blog_img" style="background-image: url('. $thumb[0]. ');"></div>';
				endif;

				$category = get_the_category($post->ID);
				echo '<article><div class="category">'. $category[0]->name. '</div>';

				echo '<h3>' .$post->post_title. '</h3>';


				echo '<p>'. get_the_excerpt($post->post_excerpt). '</p>';

				echo '<div class="read_more"><span></span><span></span><span></span></div>';
				echo '</article></div></a></li>';
			endforeach;

			restore_current_blog();
		?>
		</ul>
	</div>
</section>
