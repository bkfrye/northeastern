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
		<section class="banner_interior" style="background-image:url(<?php echo get_field('hero_image');?>)">
			<div class="banner_content">
				<div class="page_title">
					<?php the_title('<h1>','</h1>');?>
				</div>
			</div>
		</section>

		<div class="events_wrapper">
			<aside class="events_filtering">
				<p>
					FILTER BY
				</p>
				<p>
					Category
				</p>
				<select name="cat_filter">

				</select>
				<p>
					Type
				</p>
				<select name="tag_filter">

				</select>
			</aside>

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

						$post_cats = get_the_category();

						if ( $post_cats ) {
							foreach( $post_cats as $cat ) {
								$event_cat = $cat->name;
							}
						}
				?>

				<div class="event-item <?php echo str_replace(' ', '-', $event_cat) ?>">
					<div class="event_info-wrap">
                        <div class="event_info-date">
    						<p>
    						<?php
    							echo date( 'M', $start_date );
								echo '<br>';
								echo date( 'j', $start_date );
    						?>
    						</p>
    					</div>
					</div>
					<div class="event_desc-wrap">
						<p class="event_info-title"><?php echo the_title(); ?></p>
						<p class="event_info-details">
							<?php
								echo $event_cat . '  |  ';
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
					</div>
					<a href="<?php echo get_field('register') ?>" class="btn_red">Register Now</a>
				</div>

				<?php endwhile; ?>
			</section>
		</div>
	</main>
</div>

<?php get_footer(); ?>
