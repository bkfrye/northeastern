<?php
/**
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<section class="blog">
	<h3>BLOG</h3>
	<ul class="blog_content">
	<?php

	// Set up global variables. Great
	global $wpdb, $blog_id, $post;

	// Get a list of blogs in your multisite network
	//$blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
	//print_r($blog_ids);
	// Iterate through your list of blogs
	$globalcontainer = array();
	//foreach ($blog_ids  as $id){

		switch_to_blog( 1 );

		$globalquery = get_posts( 'numberposts=3&post_type=any' );

			foreach($globalquery as $post) : setup_postdata($post);
				echo '<li>';
				if (has_post_thumbnail( $post->ID ) ):
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					echo '<div class=\"blogimage\" style=\"background-image: url("'.$image[0].'");\"></div>';
				endif;

				echo '<div class=\"blog_card\"><a href='. the_permalink() .' title="'. the_title_attribute() . '">'.$post->post_title.'</a>';
				echo '<article>'.$post->post_excerpt.'</article>';
				echo $post->post_date.'</div>';
				echo '</li>';
			endforeach;




		//$globalcontainer = array_merge( $globalcontainer, $globalquery );

		restore_current_blog();
	//}
	//echo "<pre>";
	//print_r($globalcontainer);
	//echo "</pre>";
	//foreach ($globalcontainer as &$value) {
	//    echo $value[0];
	//	}

	?>
	</ul>
</section>
