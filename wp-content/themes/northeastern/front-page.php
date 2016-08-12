<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();

get_header(); ?>
<style>
#angled-events:after{background-image:url(<?php echo the_field('callout_bg_1');?>);}
#angled-lifelong_learning:after{background-image:url(<?php echo the_field('callout_bg_2');?>);}
#angled-communities:after{background-image:url(<?php echo the_field('callout_bg_3');?>);}
/*#angled-events:after{background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/events.jpg);}
#angled-lifelong_learning:after{background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifelong-learning.jpg);}
#angled-communities:after{background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/communities.jpg);}*/
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="homepage_hero">
            <div class="textured_backdrop">
                <h1><?php echo the_field('main_title');?></h1>
				<!-- <h1>Connecting &amp; Engaging Alumni Around the World</h1> -->
            </div>

            <?php
                $home_video_poster = get_field('home_video_poster');
                $home_video_poster_url = $home_video_poster['url'];
                $home_video_webm = get_field('home_video_webm');
                $home_video_mp4 = get_field('home_video_mp4');

                echo '<div id="video_container">';
                // if( $deviceType == 'computer' ) {// || $deviceType == 'tablet' ) {
                    //if( ( !$detect->isMobile() && $detect->isTablet() ) || $deviceType == 'computer' ) {
                        echo '<video autoplay loop muted id="fs_video">';
                            echo '<source src="'.get_stylesheet_directory_uri().'/assets/video/test_vid.mp4" type="video/mp4">';
                            // echo '<source src="'.$home_video_webm.'" type="video/webm">';
                            // echo '<source src="'.$home_video_mp4.'" type="video/mp4">';
                        echo '</video>';
                    // } else {
                    //     echo '<img id="video_image" src="'.$home_video_poster_url.'" alt="" />';
                    // }
                echo '</div>';

            ?>
		</div>

        <section class="callouts">
			<article>
				<div id="angled-events" class="angled_item">
                	<div class="lower_third">
						<div class="lower_third-wrap">
							<h3>Events</h3>
							<p><?php echo the_field('callout_desc_1');?></p>
						</div>
					</div>
        		</div>

                <div class="angled_content hide">
					<h4><?php echo the_field('callout_detailed_title_1');?></h4>
					<?php echo the_field('callout_detailed_1');?>

                    <a href="#" class="btn">Learn More</a>
                    <div class="close">X</div>
                </div>

				<div id="angled-lifelong_learning" class="angled_item">
					<div class="lower_third">
						<div class="lower_third-wrap">
							<h3>Lifelong Learning</h3>
							<p><?php echo the_field('callout_desc_2');?></p>
						</div>
					</div>
        		</div>

                <div class="angled_content hide">
					<h4><?php echo the_field('callout_detailed_title_2');?></h4>
					<?php echo the_field('callout_detailed_2');?>

                    <a href="#" class="btn">Learn More</a>
                    <div class="close">X</div>
                </div>

				<div id="angled-communities" class="angled_item">
					<div class="lower_third">
						<div class="lower_third-wrap">
							<h3>Communities</h3>
							<p><?php echo the_field('callout_desc_3');?></p>
						</div>
					</div>
        		</div>

                <div class="angled_content hide">
					<h4><?php echo the_field('callout_detailed_title_3');?></h4>
					<?php echo the_field('callout_detailed_3');?>

                    <a href="#" class="btn">Learn More</a>
                    <div class="close">X</div>
                </div>

			</article>
        </section>

        <section class="social_feed">

            <nav id="juicer_nav">
                <ul>
                    <li id="juicer_home" class="active" data-name="Home"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/img/svg/home.svg');?></li>
                    <li id="juicer_facebook" data-name="Facebook"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/img/svg/facebook.svg');?></li>
                    <li id="juicer_twitter" data-name="Twitter"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/img/svg/twitter.svg');?></li>
                    <li id="juicer_instagram" data-name="Instagram"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/img/svg/instagram.svg');?></li>
                </ul>
            </nav>
			<article>

				<?php get_template_part( 'template-parts/juicer' );?>

			</article>
			<div class="view_more-wrap">
				<a href="#" id="view_more-juicer" class="btn_red">View More</a>
			</div>
        </section>

        <section class="learn_more_callout">
			<article>
	            <h2 class="headline_rotate">
					We're here to help you:
					<span class="rotator_wrap">
						<span class="rotator_item rotate-visible">Stay in touch</span>
						<span class="rotator_item">Start a career</span>
						<span class="rotator_item">Build a network</span>
						<span class="rotator_item">Find Scholarships</span>
						<span class="rotator_item">Plan a trip</span>
						<span class="rotator_item">Get discounts</span>
						<span class="rotator_item">Find employees</span>
					</span>
				</h2>
	            <a href="#" class="btn">Learn More</a>
			</article>
        </section>

        <section class="upcoming_events">
			<article>
				<div class="event_title-block">
					<h2>Upcoming <br>Events</h2>
					<a href="#">View All</a>
				</div>

                <div class="owl_wrap">
                    <div class="owl-nav">
                        <div class="owl_prev"><</div>
                        <div class="owl_next">></div>
                    </div>
    				<div class="owl-carousel">
                        <?php
							$args = array(
					            'post_type' => 'events',
					            'status' => 'published',
								'posts_per_page' => 9,
					            'orderby' => 'meta_value',
					            'order' => ASC,
					            'meta_key' => 'date_start',
				            );

							$events = new WP_Query( $args );

							while ( $events->have_posts() ) : $events->the_post();
							$short_title = the_title('','',false);
							$trimmed_title = wp_trim_words( $short_title, 8, '...');
						?>
							<div class="event_card">
	                            <div class="date">
	                                <p><?php echo get_field('date_start')?></p>
	                            </div>
	                            <div class="event_desc">
	                                <p><?php echo $trimmed_title ?></p>
	                            </div>
	                        </div>
						<?php endwhile; ?>
    				</div>
                </div>
			</article>
        </section>

        <section class="blog">
			<?php
			// while ( have_posts() ) : the_post();
			// 	get_template_part( 'template-parts/blog', 'home' );
			// endwhile;
			?>
        </section>

	</main>

</div>


<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.juicer_list').isotope({
	  itemSelector: '.card',
	  masonry:{
		  columnWidth: '.card'
	  }
	});

    var owl = jQuery('.owl-carousel');
	owl.owlCarousel({
		loop: true,
		responsive: {
			0:{items: 1,loop: false},
			959:{items: 3}
		}
	});

    jQuery('.owl_next').click(function() {
        owl.trigger('next.owl.carousel');
        console.log('clicked');
    })
    jQuery('.owl_prev').click(function() {
        owl.trigger('prev.owl.carousel', [300]);
    })

});
</script>
<?php get_footer(); ?>
