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
		<div id="event_title">
			<?php the_title('<h1>','</h1>');?>
		</div>

		<section id="events">

			<?php
				$args = array(
					'post_type' => 'events',
					'orderby' => 'meta_value_num',
					'order' => ASC,
					'meta_key' => 'date_start',
					'posts_per_page' => '-1'
				);

				$events = new WP_Query( $args );
				while ( $events->have_posts() ) : $events->the_post();

				$start = get_field('date_start');
				$end = get_field('date_end');

				$start_date = strtotime($start);
				$finish_date = strtotime($end);
			?>

			<article class="event-item">
				<p class="event_info-date">
					<?php
					if ( $finish_date == '' ){
						echo date( 'j M', $start_date );
					} else {
						if ( date( 'Y', $start_date ) == date( 'Y', $finish_date ) ){
							if ( date( 'M', $start_date ) == date( 'M', $finish_date ) ){
								echo date( 'j', $start_date ) . ' - ' .  date( 'j M', $finish_date );
							} else {
								echo date( 'j M', $start_date ) . ' - ' .  date( 'j M', $finish_date );
							}
						} else {
							echo date( 'j M', $start_date ) . ' - ' .  date( 'j M', $finish_date );
						}
					}
					?></p>
				<p class="event_info-title"><?php echo the_title(); ?><br>
					<?php
						echo get_field('start_time');
						$end_time = get_field('end_time');

						if ( $end_time ){
							echo ' - ' . $end_time;
						} else{
							echo '';
						}

					?>
				</p>
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
