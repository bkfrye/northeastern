<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="banner_interior" style="background-image:url(<?php echo get_field('hero_image');?>)">
			<div class="banner_content">
				<div class="page_title">
					<?php the_title('<h1>',' Community</h1>');?>
				</div>
			</div>
		</section>

		<section class="content">
			<article>
				<?php
					echo '<div class="intro_section">' . get_field('intro_section') . '</div>';
					echo '<div class="main_section">' . get_field('main_section') . '</div>';

					while ( have_posts() ) : the_post();
						echo '<section class="community_leaders">';
						echo '<h1>Community Leaders</h1>';
						$rows = get_field('community_leaders');
						if($rows)
						{
							echo '<ul>';
							foreach($rows as $row)
							{
								echo '<li><p class="leader-name">'. $row['name'] .'</p><p class="leader-title">'. $row['title']. '</p><a href="mailto:'. $row['email']. '" class="leader-email">'. $row['email']. '</a></p></li>';
							}
							echo '</ul>';
						}
						endwhile;
						echo '</section>';

					echo '<section class="contact_form">';
						echo gravity_form( 2, true, false, false, '', true );
					echo '</section>';
				?>
			</article>
			<aside>
				<?php
					$sidebar_items =  get_field('sidebar_items');

					if( empty($sidebar_items) ) {
						get_template_part('template-parts/sidebar', 'connect');
					}
					else{
						if ( in_array('facebook', $sidebar_items) ) {
							get_template_part('template-parts/sidebar', 'facebook');
						}
						if ( in_array('events', $sidebar_items) ) {
							get_template_part('template-parts/sidebar', 'events_community');
						}
						if ( in_array('connect', $sidebar_items) ) {
							get_template_part('template-parts/sidebar', 'connect');
						}
					}
					wp_reset_postdata();
				?>
			</aside>
		</section>

		<section class="contact_person">
			<article>
					<?php
						$post_object = get_field('point_of_contact');

						if( $post_object ):

							// override $post
							$post = $post_object;
							setup_postdata( $post );
					?>
					<div class="profile_img" style="background-image:url(<?php echo get_field('profile_image_p')?>)"></div>
					<div class="profile_info">
						<p class="profile-title">POINT OF CONTACT</p>
					<?php
							echo the_title('<p class="profile-name">','</p>');

							$title = get_field('title_p');
							$number = get_field('contact_number_p');
							$email = get_field('email_p');

							echo '<p>'.$title.'<br>'.$number.'</p>';
							echo '<p><a href="mailto:'.$email.'" class="profile-email">'.$email.'</a></p>';

						    wp_reset_postdata();
						endif;
					?>
				</div>
			</article>
		</section>


	</main>

</div>

<?php get_footer(); ?>
