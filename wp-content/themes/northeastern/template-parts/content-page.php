<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section class="banner_interior" style="background-image:url(<?php echo get_field('hero_image');?>)">
	<div class="banner_content">
		<div class="page_title">
			<?php the_title('<h1>','</h1>');?>
		</div>
	</div>
</section>
<div class="child_menu">
	<p>More Links +</p>
	<div class="child_menu-wrap">
		<?php wpb_list_child_pages(); ?>
	</div>
</div>
<section class="content">
	<article>
		<?php
			echo '<div class="intro_section">' . get_field('intro_section') . '</div>';
			echo '<div class="main_section">' . get_field('main_section') . '</div>';

			$accordion = get_field('nu_content');

			if ($accordion){
				get_template_part('template-parts/accordion');
			}
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
				if ( in_array('facebook', $sidebar_items) ) {?>
					<div class="facebook_connect">
					    <div class="facebook_connect-wrap">
					        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					        	 viewBox="73 0 267 266.9" enable-background="new 73 0 267 266.9" xml:space="preserve">
					        <path id="Blue_1_" fill="#3B5998" d="M321.1,262.3c7.9,0,14.2-6.4,14.2-14.2V18.8c0-7.9-6.4-14.2-14.2-14.2H91.8
					        	C84,4.6,77.6,11,77.6,18.8v229.3c0,7.9,6.4,14.2,14.2,14.2H321.1z"/>
					        <path id="f" fill="#FFFFFF" d="M255.4,262.3v-99.8h33.5l5-38.9h-38.5V98.8c0-11.3,3.1-18.9,19.3-18.9l20.6,0V45
					        	c-3.6-0.5-15.8-1.5-30-1.5c-29.7,0-50,18.1-50,51.4v28.7h-33.6v38.9h33.6v99.8H255.4z"/>
					        </svg>
					        <p>Connect with community members from your area by joining the NU Alumni Community Facebook Page!</p>
					    </div>
					    <div class="btn_wrap">
					        <?php
					        if(get_field('facebook_community_link')){
					            echo '<a href="' . get_field('facebook_community_link') . '" class="btn_red" target="_blank">Follow Us</a>';
					        }else{
					            echo '<a href="https://www.facebook.com/NortheasternAlumni/" class="btn_red" target="_blank">Follow Us</a>';
					        }
					        ?>
					    </div>
					</div>
		<?php
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

<?php get_template_part('template-parts/super-footer');?>

<!-- <script type="text/javascript">
	var wall = new Freewall("#freewall");
	wall.reset({
		selector: '.cell',
		animate: true,
		cellW: 10,
		cellH: 300,
		onResize: function() {
			wall.fitWidth();
		}
	});
	wall.fitWidth();
	// for scroll bar appear;
	jQuery(window).trigger("resize");
</script> -->
