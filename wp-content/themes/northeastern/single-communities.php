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
						echo '<section class="community_leaders">';
						echo '<h1>Community Leaders</h1>';
						$rows = get_field('community_leaders');
						if($rows)
						{
							echo '<ul>';
							foreach($rows as $row)
							{
								echo '<li><p class="leader-name">'. $row['name'] .'</p><p class="leader-title">'. $row['title']. '</p><p class="leader-email">'. $row['email']. '</p></li>';
							}
							echo '</ul>';
						}
						endwhile;
						echo '</section>';

					echo '<section class="contact_form">';
						echo gravity_form( 2, false, false, false, '', true );
					echo '</section>';
				?>
			</article>
			<aside>
				<?php
					$sidebar_items =  get_field('sidebar_items');

					if( empty($sidebar_items) ) {
						get_template_part('template-parts/sidebar', 'events_single');
					}
					else{
						if ( in_array('facebook', $sidebar_items) ) {
							get_template_part('template-parts/sidebar', 'facebook');
						}
						if ( in_array('events', $sidebar_items) ) {
							get_template_part('template-parts/sidebar', 'events_single');
						}
						if ( in_array('events', $sidebar_items) ) {
							get_template_part('template-parts/sidebar', 'connect');
						}
					}
				?>
			</aside>

		</section>

	</main>

</div>

<?php get_footer(); ?>
