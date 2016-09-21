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
			<div class="events_filtering">
				<ul>
					<!-- <li>FILTER BY</li> -->
					<li>
						<label>
							Category
						</label>
						<select name="cat_filter" data-filter-group="events">
							<option data-filter-value=""> ALL </option>
							<?php
								$args = array(
								    'type' => 'events',
								 );

								//grab all categories to add to filter
								$categories = get_categories( $args );
								foreach($categories as $cat){
									echo '<option data-filter-value=".'.str_replace(array(' ','.',','), '-', $cat->name).'">'.$cat->name.'</option>';
								}
							?>
						</select>
					</li>
					<li>
						<label>
							Type
						</label>
						<select name="tag_filter">
							<option data-filter-value=""> ALL </option>
							<?php
								$args = array(
								    'type' => 'events',
								 );

								//grab all tags to add to filter
								$tags = get_tags( $args );
								foreach($tags as $tag){
									echo '<option data-filter-value=".'.str_replace(array(' ','.',','), '-', $tag->name).'">'.$tag->name.'</option>';
								}
							?>
						</select>
					</li>
				</ul>
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

						//grab post category
						$post_cats = get_the_category();
						if ( $post_cats ) {
							foreach( $post_cats as $cat ) {
								$event_cat = $cat->name;
							}
						}

						//grab post tags and convert array to string
						$post_tags = wp_get_post_tags($post->ID, array('fields' => 'names'));
						$event_tag_class = implode(' ', $post_tags);

				?>

				<div class="event-item <?php echo str_replace(' ', '-', $event_cat). ' '. $event_tag_class?>">
					<div class="event_img" style="background-image: url(<?php echo get_field('image'); ?>)">
					</div>
					<div class="event_desc-wrap">
						<p class="event_info-title"><?php echo the_title(); ?></p>
						<p class="event_info-details">
							<?php
								echo date( 'M j', $start_date ) . ' | ' . get_field('start_time');
								$end_time = get_field('end_time');

								if ( $end_time ){
									echo ' - ' . $end_time;
								} else{
									echo '';
								}
								echo '<br/>' . $event_cat;
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
			<div id="no-results" class="event-item" style="display: none;height: 270px">
				<p style="text-align:center;">No results matching your filter. Please try again.</p>
			</div>
		</div>
	</main>
</div>

<?php get_footer(); ?>
