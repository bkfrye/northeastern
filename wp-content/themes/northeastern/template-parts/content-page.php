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
