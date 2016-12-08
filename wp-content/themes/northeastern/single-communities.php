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
					<?php the_title('<h1>',' Community</h1>');?>
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
								echo '<li><p class="leader-name">'. $row['name'] .'</p><p class="leader-title">'. $row['title']. '</p><a href="mailto:'. $row['email']. '" class="leader-email">'. $row['email']. '</a></p></li>';
							}
							echo '</ul>';
						}
						endwhile;
						echo '</section>';

					echo '<section class="contact_form">';
						echo gravity_form( 2, true, false, false, '', true );
					echo '</section>';
				?>
			</article>
			<aside>
				<?php
					$sidebar_items =  get_field('sidebar_items');

					if( empty($sidebar_items) ) {
						echo '';
					}
					else{
						if ( in_array('events', $sidebar_items) ) {
							get_template_part('template-parts/sidebar', 'events');
						}
						if ( in_array('facebook', $sidebar_items) ) {
							get_template_part('template-parts/sidebar', 'facebook');
						}
					}

					wp_reset_postdata();

					$sb_rows = get_field('custom_sidebar_items');

					if ($sb_rows){
						foreach ($sb_rows as $sb_row){

							$sidebar_headline = $sb_row['sidebar_headline'];
							$sidebar_content = $sb_row['sidebar_content'];
							$sidebar_button_copy = $sb_row['sidebar_button_copy'];
							$sidebar_button_link = $sb_row['sidebar_button_link'];
							$text_color = $sb_row['text_color'];
							$bg_color = $sb_row['background_color'];
							$btn_color = $sb_row['button_color'];
				?>
							<style>
							.custom_sb_btn a{
							    display: inline-block;
							    color: <?php echo $btn_color?>;
							    border: 2px solid <?php echo $btn_color?>;
							    border-radius: 22px;
							    font-size: 12pt;
							    text-transform: uppercase;
							    height: 44px;
							    min-width: 190px;
							    padding: 10px 30px;
							    text-decoration: none;
							    text-align: center;
							}
							.custom_sb_btn a:hover, .custom_sb_btn a:visited{
								color: <?php echo $btn_color?>;
							}
							.custom_sb p{
								color: <?php echo $text_color?>;
							}
							</style>

							<div class="custom_sb">
							    <article class="" style="width: 100%;padding: 2em;background-color:<?php echo $bg_color?>">
							        <h3 style="font-size: 26px;color:<?php echo $text_color?>"><?php echo $sidebar_headline ?></h3>
							        <div>
							            <?php echo $sidebar_content ?>
							        </div>
							        <div class="custom_sb_btn" style="text-align: center;">
							            <?php echo '<a href="' . $sidebar_button_link . '">' . $sidebar_button_copy . '</a>';?>
							        </div>

							    </article>
							</div>
				<?php
						}
					}
				?>
			</aside>
		</section>

		<section class="contact_person">
			<article>
					<?php
						$post_object = get_field('point_of_contact');

						if( $post_object ):

							// override $post
							$post = $post_object;
							setup_postdata( $post );
					?>
					<div class="profile_img" style="background-image:url(<?php echo get_field('profile_image_p')?>)"></div>
					<div class="profile_info">
						<p class="profile-title">POINT OF CONTACT</p>
					<?php
							echo the_title('<p class="profile-name">','</p>');

							$title = get_field('title_p');
							$number = get_field('contact_number_p');
							$email = get_field('email_p');

							echo '<p>'.$title.'<br>'.$number.'</p>';
							echo '<p><a href="mailto:'.$email.'" class="profile-email">'.$email.'</a></p>';

						    wp_reset_postdata();
						endif;
					?>
				</div>
			</article>
		</section>


	</main>

</div>

<?php get_footer(); ?>
