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
		<section class="contact_person">

		<?php
		while ( have_posts() ) : the_post();
				echo '<ul class="university_contacts">';
			if( have_rows('members') ): ?>

				<?php
					// loop through parent repeater
					while( have_rows('members') ): the_row();
				?>
					<li>
						<h3><?php the_sub_field('dept_title');?></h3>
							<?php
							// check for sub repeater
							if( have_rows('dept_members') ): ?>

								<?php
								// loop through sub repeater
									while( have_rows('dept_members') ): the_row();
								?>
									<div class="profile">
										<?php
											$post_object = get_sub_field('contact_list');

											if( $post_object ):

												// override $post
												$post = $post_object;
												setup_postdata( $post );
										?>
										<div class="profile_img" style="background-image:url(<?php echo get_field('profile_image_p')?>)"></div>
										<div class="profile_info">
										<?php
												echo the_title('<p class="profile-name">','</p>');

												$title = get_field('title_p');
												$number = get_field('contact_number_p');
												$email = get_field('email_p');

												echo '<p>'.$title.'<br>'.$number.'</p>';
												echo '<p class="profile-email">'.$email.'</p>';

											    wp_reset_postdata();
											endif;
										?>
										</div>
									</div>
								<?php endwhile;
							endif;?>
					</li>
				<?php endwhile;
				echo '</ul>';
			endif;
		endwhile;?>
		</section>
	</main>
</div>

<?php get_footer(); ?>
