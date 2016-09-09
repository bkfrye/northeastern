<div id="accordion">
	<?php if( have_rows('nu_content') ): ?>

		<ul class="accordion-item">

		<?php
			// loop through parent repeater
			while( have_rows('nu_content') ): the_row();

			$header_title = get_sub_field('header');
		?>
			<li id="<?php echo str_replace(' ', '-', $header_title)?>">
				<input type="checkbox" checked>
				<div class="heading">
					<p><?php echo $header_title?></p>
				</div>
				<div class="heading_content">

					<?php
					// check for sub repeater
					if( have_rows('more_content') ): ?>

						<?php
						// loop through sub repeater
							while( have_rows('more_content') ): the_row();
						?>
						<div class="heading_content-wrap">
							<div class="content_svg">
								<?php $svg = get_sub_field('content_img'); ?>
								<?php echo file_get_contents( $svg ); ?>
							</div>
							<div class="content_copy">
								<?php the_sub_field('content_copy'); ?>
							</div>
						</div>
						<?php endwhile; ?>

					<?php endif;?>
					<div class="close_item">CLOSE</div>
				</div>
			</li>
		<?php endwhile; ?>
		</ul>
	<?php endif;?>
</div>
