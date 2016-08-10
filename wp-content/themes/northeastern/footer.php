<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div>

		<section id="site_footer">
            <div class="footer_nav-wrapper">
                <nav id="footer_left">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-left',
                         ) );
                    ?>
                </nav>
                <nav id="footer_center">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-center',
                         ) );
                    ?>
                </nav>
                <nav id="footer_right">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-right',
                         ) );
                    ?>

                    <ul id="privacy_info">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Privacy Statement</a></li>
                    </ul>
                </nav>
            </div>

		</section>

		<section id="footer_global">
			<div class="wrapper">
                <a class="logo" href="http://www.northeastern.edu"></a>
    			<ul class="info">
    				<li><a href="http://myneu.neu.edu/cp/home/displaylogin">MyNEU</a></li>
    				<li><a href="http://www.northeastern.edu/findfacultystaff">Find Faculty &amp; Staff</a></li>
    				<li><a href="http://www.northeastern.edu/neuhome/adminlinks/findaz.html">Find A-Z</a></li>
    				<li><a href="http://www.northeastern.edu/emergency/index.html">Emergency Information</a></li>
    				<li><a href="http://www.northeastern.edu/search/index.html">Search</a></li>
    				<li><a href="http://assistive.usablenet.com/tt/http://www.northeastern.edu/index.html">Text Only</a></li>
    				<li><a href="http://www.northeastern.edu/privacy">Privacy</a></li>
    			</ul>
    			<ul class="social-media">
    				<li><a href="http://www.facebook.com/northeastern"><img alt="facebook" src="http://www.northeastern.edu/images/facebook.gif"></a></li>
    				<li><a href="http://www.twitter.com/northeastern"><img alt="twitter" src="http://www.northeastern.edu/images/twitter.gif"></a></li>
    				<li><a href="http://www.youtube.com/northeastern"><img alt="YouTube" src="http://www.northeastern.edu/images/youtube.gif"></a></li>
    			</ul>
    			<p class="contact">360 Huntington Ave., Boston, Massachusetts 02115 · 617.373.2000 · TTY 617.373.3768<br>
    			 © <span class="the-year">2014</span>&nbsp;Northeastern University</p>
			</div>
		</section>
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
