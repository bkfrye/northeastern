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
#angled-events:after{background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/events.jpg);}
#angled-lifelong_learning:after{background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lifelong-learning.jpg);}
#angled-communities:after{background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/communities.jpg);}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="homepage_hero">
            <div class="textured_backdrop">
                <!-- <h1><?php the_field('home_title');?></h1> -->
				<h1>Once a Husky, Always a Husky</h1>
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
						<h3>Events</h3>
					</div>
        		</div>

                <div class="angled_content hide">
                    <h4>Event Name</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <a href="#" class="btn">Learn More</a>
                    <div class="close">X</div>
                </div>

				<div id="angled-lifelong_learning" class="angled_item">
            		<div class="lower_third">
						<h3>Lifelong Learning</h3>
					</div>
        		</div>

                <div class="angled_content hide">
                    <h4>Event Name</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <a href="#" class="btn">Learn More</a>
                    <div class="close">X</div>
                </div>

				<div id="angled-communities" class="angled_item">
            		<div class="lower_third">
						<h3>Communities</h3>
					</div>
        		</div>

                <div class="angled_content hide">
                    <h4>Event Name</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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
        </section>

        <section class="learn_more_callout">
			<article>
	            <h2 class="headline_rotate">
					We're here to help you:
					<span class="rotator_wrap">
						<span class="rotator_item rotate-visible">Stay in touch</span>
						<span class="rotator_item">be an adult</span>
						<span class="rotator_item">bong a beer</span>
					</span>
				</h2>
	            <a href="#" class="btn">Learn More</a>
			</article>
        </section>

        <section class="upcoming_events">
			<article>
				<h2>Upcoming Events</h2>

				<div></div>
				<div></div>
				<div></div>
			</article>
        </section>

        <section class="blog">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts', 'blog-preview' );
			endwhile;
			?>
        </section>

	</main>

</div>


<script type="text/javascript">
jQuery('.juicer_list').isotope({
  itemSelector: '.card',
  masonry:{
	  columnWidth: '.card'
  }
});
</script>
<?php get_footer(); ?>
