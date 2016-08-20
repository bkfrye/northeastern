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
#angled_one:after{background-image:url(<?php echo the_field('callout_bg_1');?>);}
#angled_two:after{background-image:url(<?php echo the_field('callout_bg_2');?>);}
#angled_three:after{background-image:url(<?php echo the_field('callout_bg_3');?>);}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="homepage_hero">
            <div class="textured_backdrop">
                <h1><?php echo the_field('main_title');?></h1>
            </div>

            <?php
                $home_video_poster = get_field('home_video_poster');
                $home_video_poster_url = $home_video_poster['url'];
                $home_video_webm = get_field('home_video_webm');
                $home_video_mp4 = get_field('home_video_mp4');

                // echo '<div id="video_container">';
                // if( $deviceType == 'computer' ) {// || $deviceType == 'tablet' ) {
                    //if( ( !$detect->isMobile() && $detect->isTablet() ) || $deviceType == 'computer' ) {
                        // echo '<video autoplay loop muted id="fs_video">';
                            // echo '<source src="'.get_stylesheet_directory_uri().'/assets/video/test_vid.mp4" type="video/mp4">';
                            // echo '<source src="'.$home_video_webm.'" type="video/webm">';
                            // echo '<source src="'.$home_video_mp4.'" type="video/mp4">';
                        // echo '</video>';
                    // } else {
                    //     echo '<img id="video_image" src="'.$home_video_poster_url.'" alt="" />';
                    // }
                // echo '</div>';

            ?>
		</div>

        <section class="callouts">
			<article>


				<div id="angled_one" class="block">
					<div class="color_overlay"></div>
					<div class="lower_third">
						<div class="lower_third-wrap">
							<h3>Events</h3>
							<p><?php echo the_field('callout_desc_1');?></p>
						</div>
					</div>
				    <div id="content_one" class="content-block">
						<div class="close">X</div>
						<div class="content-block_copy">
							<h4><?php echo the_field('callout_detailed_title_1');?></h4>
							<?php echo the_field('callout_detailed_1');?>
						</div>
						<a href="#" class="btn">Learn More</a>
					</div>
				</div>
				<div id="mobile_one" class="content-block_desktop"></div>




				<div id="angled_two" class="block">
					<div class="color_overlay"></div>
					<div class="lower_third">
						<div class="lower_third-wrap">
							<h3>Lifelong Learning</h3>
							<p><?php echo the_field('callout_desc_2');?></p>
						</div>
					</div>
					<div id="content_two" class="content-block">
						<div class="close">X</div>
						<div class="content-block_copy">
							<h4><?php echo the_field('callout_detailed_title_1');?></h4>
							<?php echo the_field('callout_detailed_1');?>
						</div>
						<a href="#" class="btn">Learn More</a>
					</div>
				</div>
				<div id="mobile_two" class="content-block_desktop"></div>





				<div id="angled_three" class="block">
					<div class="color_overlay"></div>
					<div class="lower_third">
						<div class="lower_third-wrap">
							<h3>Communities</h3>
							<p><?php echo the_field('callout_desc_3');?></p>
						</div>
					</div>
					<div id="content_three" class="content-block">
						<div class="close">X</div>
						<div class="content-block_copy">
							<h4><?php echo the_field('callout_detailed_title_1');?></h4>
							<?php echo the_field('callout_detailed_1');?>
						</div>
						<a href="#" class="btn">Learn More</a>
					</div>
				</div>
				<div id="mobile_three" class="content-block_desktop"></div>





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
					<h2>Upcoming Events</h2>
					<div class="event_btn-wrap">
						<a href="/alumni/events">View All</a>
					</div>
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
								<div class="event_card-overlay">
									<p>SHARE</p>
									<div class="share_links">

										<?php
											$shareURL = urlencode(get_field('register'));
											$shareTitle = str_replace( ' ', '%20', get_the_title());
										?>
										<div class="facebook">
											<a href="<?php echo '//www.facebook.com/sharer/sharer.php?u='.$shareURL;?>" target="_blank">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 viewBox="0 0 486.4 486.4" style="enable-background:new 0 0 486.4 486.4;" xml:space="preserve">
													<style type="text/css">
														.st0{fill:#FFFFFF;}
													</style>
													<g>
														<path id="Facebook__x28_alt_x29_" class="st0" d="M485.2,81.9c0-42.4-38.3-80.7-80.7-80.7H81.9C39.5,1.2,1.2,39.5,1.2,81.9v322.7
															c0,42.4,38.3,80.7,80.7,80.7h161.3V302.4H184v-80.7h59.2v-31.4c0-54.2,40.7-103,90.8-103h65.2v80.7h-65.2
															c-7.1,0-15.5,8.7-15.5,21.6v32.1h80.7v80.7h-80.7v182.8h86c42.4,0,80.7-38.3,80.7-80.7V81.9z"/>
													</g>
												</svg>
											</a>
										</div>
										<div class="twitter">
											<a href="<?php echo '//twitter.com/intent/tweet?text='.$shareTitle.'&amp;url='.$shareURL ?>" target="_blank">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 viewBox="0 0 486.4 486.4" style="enable-background:new 0 0 486.4 486.4;" xml:space="preserve">
													<style type="text/css">
														.st0{fill:#FFFFFF;}
													</style>
													<g>
														<g>
															<g>
																<path class="st0" d="M395.2,0h-304C40.8,0,0,40.8,0,91.2v304c0,50.4,40.8,91.2,91.2,91.2h304c50.4,0,91.2-40.8,91.2-91.2v-304
																	C486.4,40.8,445.6,0,395.2,0z M364.2,188.6l0.2,7.8c0,79.2-60.2,170.4-170.4,170.4c-33.8,0-65.3-9.9-91.8-26.9
																	c4.7,0.5,9.5,0.9,14.3,0.9c28.1,0,53.9-9.6,74.4-25.6c-26.2-0.5-48.3-17.8-55.9-41.6c3.7,0.7,7.4,1,11.3,1
																	c5.5,0,10.8-0.7,15.8-2.1c-27.4-5.5-48-29.7-48-58.7v-0.8c8.1,4.5,17.3,7.2,27.1,7.5c-16.1-10.7-26.6-29.1-26.6-49.8
																	c0-11,2.9-21.2,8.1-30.1c29.5,36.2,73.7,60.1,123.4,62.6c-1-4.4-1.6-9-1.6-13.6c0-33,26.8-59.9,59.9-59.9
																	c17.2,0,32.8,7.3,43.7,18.9c13.6-2.7,26.4-7.7,38-14.5c-4.5,14-14,25.7-26.3,33.1c12.1-1.4,23.7-4.7,34.4-9.4
																	C386.1,169.7,375.9,180.2,364.2,188.6z"/>
															</g>
														</g>
													</g>
												</svg>
											</a>
										</div>
										<div class="linkedin">
											<a href="<?php echo '//www.linkedin.com/shareArticle?mini=true&url='.$shareURL; ?>" target="_blank">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 viewBox="0 0 430.1 430.1" style="enable-background:new 0 0 430.1 430.1;" xml:space="preserve">
													<style type="text/css">
														.st1{fill:#FFFFFF;}
													</style>
													<path id="LinkedIn__x28_alt_x29_" class="st0" d="M230.7,194.3h0.4v-0.6C231,193.9,230.8,194.1,230.7,194.3z M230.7,194.3h0.4v-0.6
														C231,193.9,230.8,194.1,230.7,194.3z"/>
													<path class="st1" d="M230.7,194.3h0.4v-0.6C231,193.9,230.8,194.1,230.7,194.3z M230.7,194.3h0.4v-0.6
														C231,193.9,230.8,194.1,230.7,194.3z M342.6,4.5H86.4c-45.6,0-83,37.3-83,83v256.1c0,45.6,37.3,83,83,83h256.1c45.6,0,83-37.3,83-83
														V87.4C425.5,41.8,388.2,4.5,342.6,4.5z M131.6,358H67.5V166.5h64.1V358z M99.5,140.4h-0.4c-21.5,0-35.4-14.7-35.4-33.1
														c0-18.7,14.3-33,36.3-33c21.9,0,35.4,14.3,35.8,33C135.8,125.7,121.9,140.4,99.5,140.4z M298.5,358V255.5c0-25.7-9.3-43.3-32.4-43.3
														c-17.8,0-28.2,11.8-32.8,23.3c-1.7,4-2.2,9.8-2.2,15.5v107H167c0,0,0.9-173.5,0-191.5h64.1v27.1c8.5-13,23.7-31.7,57.7-31.7
														c42.2,0,73.8,27.3,73.8,86.2l0.1,109.9H298.5z M231.1,194.3v-0.6c-0.1,0.2-0.3,0.4-0.4,0.6H231.1z"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="learn_more">
										<a href="<?php echo get_field('register')?>" class="btn" target="_blank">LEARN MORE</a>
									</div>
								</div>
	                        </div>
						<?php endwhile; ?>
    				</div>
                </div>
			</article>
        </section>

		<?php
		//pull blog content from site 2
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/blog');
		endwhile;
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
