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

		<section class="content">
			<article>
				<?php
					echo '<div class="intro_section">' . get_field('intro_section') . '</div>';
					echo '<div class="main_section">' . get_field('main_section') . '</div>';

					while ( have_posts() ) : the_post();
						if( have_rows('communities_list') ):
							while( have_rows('communities_list') ): the_row(); ?>
								<div class="region">
									<h3><?php the_sub_field('region_name'); ?></h3>
									<?php
									if( have_rows('region_list') ): ?>
										<ul>
										<?php
										while( have_rows('region_list') ): the_row();
											?>
											<li> <?php the_sub_field('location'); ?></li>
										<?php endwhile; ?>
										</ul>
									<?php endif;?>
								</div>
							<?php endwhile;
						endif;
					endwhile;
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
		<section id="community_list">

		</section>
	</main>
</div>

<?php get_footer(); ?>
