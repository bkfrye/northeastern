<section class="img_gallery">
	<div id="freewall">
	<?php
		// get_template_part( 'template-parts/freewall' );
	?>
	</div>
</section>


	<?php
		// get_template_part( 'template-parts/blog', 'footer' );
	?>



<section class="signups">
	<div class="stay_connected">
		<h3><span>Stay connected</span><br>and share your successes.</h3>
		<?php echo gravity_form( 1, false, false, false, '', true ); ?>

	</div>
	<div class="contribute">
		<div>
			<h3>Become a Contributor</h3>
			<p>A stronger, more connected alumni network benefits all of us. What brilliance can you share?</p>
		</div>
		<div>
			<a href="#" class="btn">Connect Now</a>
		</div>

	</div>
</section>

<section class="contact_person">
	<article>
		<div class="profile_img" style="background-image:url(<?php echo get_field('profile_image_p')?>)">
		</div>
		<div class="profile_info">
			<p class="profile-title">POINT OF CONTACT</p>
			<?php
				$name = get_field('name_p');
				$title = get_field('title_p');
				$number = get_field('contact_number_p');
				$email = get_field('email_p');

				echo '<p class="profile-name">' . get_field('name_p') . '</p>';
				echo '<p>'.$title.'<br>'.$number.'</p>';
				echo '<p class="profile-email">'.$email.'</p>';
			?>
		</div>
	</article>
</section>
