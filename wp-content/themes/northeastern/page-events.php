<?php
/*
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section id="events">
			<?php
				$args = array(
					'post_type' => 'events',
					'status' => 'published',
					'orderby' => 'meta_value_num',
					'order' => ASC,
					'meta_key' => 'date_start',
				);

				$events = new WP_Query( $args );
				while ( $events->have_posts() ) : $events->the_post();
			?>

			<article class="event-item">
				<p class="event_info-date"><?php echo get_field('date_start')?></p>
				<p class="event_info-title"><?php echo the_title(); ?></p>
				<div class="event_info-desc">
					<p><?php echo get_field('desc') ?></p>
				</div>

				<a href="<?php echo get_field('register') ?>" class="btn_red">Register Now</a>
			</article>

			<?php endwhile; ?>
		</section>
	</main>
</div>

<?php get_footer(); ?>
