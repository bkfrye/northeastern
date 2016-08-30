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
		<div class="event_tags">
			<div class="event_tags_group" data-filter-group="events">
			<?php
				$args2 = array(
					'post_type' => 'events',
					'orderby' => 'meta_value',
					'order' => ASC,
					'posts_per_page' => '-1'
				);

				$events2 = new WP_Query( $args2 );
				while ( $events2->have_posts() ) : $events2->the_post();

					$tags = get_the_tags();

					if ( $tags ) {
						foreach( $tags as $tag ) {
							$tag_list = $tag->name;
						}
					}

					echo '<div class="filter-btn" data-filter=".'.$tag_list.'">'.$tag_list.'</div>';

				endwhile;
			?>
			</div>
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

					$post_tags = get_the_tags();

					if ( $post_tags ) {
						foreach( $post_tags as $tag ) {
							$event_tag = $tag->name;
						}
					}
			?>

			<article class="event-item <?php echo $event_tag ?>">
				<p class="event_info-date">
					<?php
					if ( $finish_date == '' ){
						echo date( 'M j', $start_date );
					} else {
						if ( date( 'Y', $start_date ) == date( 'Y', $finish_date ) ){
							if ( date( 'M', $start_date ) == date( 'M', $finish_date ) ){
								echo date( 'j', $start_date ) . ' - ' .  date( 'M j', $finish_date );
							} else {
								echo date( 'M j', $start_date ) . ' - ' .  date( 'M j', $finish_date );
							}
						} else {
							echo date( 'M j', $start_date ) . ' - ' .  date( 'M j', $finish_date );
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
