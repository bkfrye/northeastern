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
                    <div id="social_wrap">
    					<div class="social_logo">
                            <a href="" target="_blank">
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
    					<div class="social_logo">
                            <a href="" target="_blank">
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
    					<div class="social_logo">
                            <a href="" target="_blank">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;fill:#ffffff"
                                	 xml:space="preserve">
                                <g>
                                	<path d="M421.981,16.562C410.941,5.519,397.711,0,382.298,0H56.248C40.83,0,27.604,5.521,16.561,16.562
                                		C5.52,27.6,0.001,40.828,0.001,56.243V382.29c0,15.413,5.518,28.644,16.56,39.683c11.043,11.04,24.272,16.563,39.687,16.563
                                		h326.046c15.41,0,28.644-5.523,39.684-16.563c11.043-11.039,16.557-24.27,16.557-39.683V56.243
                                		C438.534,40.825,433.021,27.604,421.981,16.562z M157.462,158.025c17.224-16.652,37.924-24.982,62.097-24.982
                                		c24.36,0,45.153,8.33,62.381,24.982c17.228,16.655,25.837,36.785,25.837,60.386c0,23.598-8.609,43.729-25.837,60.379
                                		c-17.228,16.659-38.014,24.988-62.381,24.988c-24.172,0-44.87-8.336-62.097-24.988c-17.228-16.652-25.841-36.781-25.841-60.379
                                		C131.621,194.81,140.234,174.681,157.462,158.025z M388.865,370.589c0,4.945-1.718,9.083-5.141,12.416
                                		c-3.433,3.33-7.519,4.996-12.282,4.996h-305.2c-4.948,0-9.091-1.666-12.419-4.996c-3.333-3.326-4.998-7.471-4.998-12.416V185.575
                                		H89.08c-3.805,11.993-5.708,24.462-5.708,37.402c0,36.553,13.322,67.715,39.969,93.511c26.65,25.786,58.721,38.685,96.217,38.685
                                		c24.744,0,47.583-5.903,68.527-17.703c20.937-11.807,37.486-27.839,49.676-48.112c12.183-20.272,18.274-42.4,18.274-66.38
                                		c0-12.94-1.91-25.406-5.715-37.402h38.547v185.014H388.865z M388.865,115.626c0,5.52-1.903,10.184-5.716,13.99
                                		c-3.805,3.809-8.466,5.711-13.989,5.711h-49.676c-5.517,0-10.185-1.903-13.99-5.711c-3.806-3.806-5.708-8.47-5.708-13.99V68.522
                                		c0-5.33,1.902-9.945,5.708-13.848c3.806-3.901,8.474-5.854,13.99-5.854h49.676c5.523,0,10.185,1.952,13.989,5.854
                                		c3.812,3.903,5.716,8.518,5.716,13.848V115.626z"/>
                                </g>
                                </svg>
                            </a>
    					</div>
    					<div class="social_logo">
                            <a href="" target="_blank">
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
    					<div class="social_logo">
                            <a href="" target="_blank">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                	 viewBox="0 0 438.5 438.5" style="enable-background:new 0 0 438.5 438.5;" xml:space="preserve">
                                <style type="text/css">
                                	.st0{fill:#FFFFFF;}
                                </style>
                                <g>
                                	<g>
                                		<path class="st0" d="M414.4,24.1C398.3,8,379,0,356.3,0H82.2c-22.6,0-42,8-58.1,24.1C8,40.2,0,59.6,0,82.2v274.1
                                			c0,22.6,8,42,24.1,58.1c16.1,16.1,35.5,24.1,58.1,24.1h274.1c22.6,0,42-8,58.1-24.1c16.1-16.1,24.1-35.5,24.1-58.1V82.2
                                			C438.5,59.6,430.5,40.2,414.4,24.1z M259,63.4h19.1V141c0,4.6,0.1,7,0.3,7.4c0.2,3,1.7,4.6,4.6,4.6c3.8,0,7.8-2.9,12-8.8V63.4
                                			h19.1V169h-19.1h0v-11.4c-7.8,8.6-15.1,12.9-22,12.9c-6.1,0-10.2-2.6-12.3-7.7c-1.1-3.4-1.7-8.7-1.7-15.7V63.4L259,63.4z
                                			 M186.7,97.6c0-11,2-19.3,6-24.8C197.9,65.6,205.3,62,215,62c9.3,0,16.8,3.6,22.3,10.8c4,5.5,6,13.8,6,24.8v37.1
                                			c0,11.4-2,19.7-6,24.8c-5.5,7.2-12.9,10.9-22.3,10.9c-9.7,0-17.1-3.6-22.3-10.9c-4-5.5-6-13.8-6-24.8V97.6z M135.3,27.1l15.1,55.7
                                			L165,27.1h21.4l-25.7,84.5h0V169h-21.1v-57.4c-2.1-10.5-6.5-25.5-13.1-45.1c-4.4-13.1-6.6-19.7-6.6-19.7l-6.9-19.7L135.3,27.1
                                			L135.3,27.1z M370.6,371.7c-1.9,8.2-5.9,15.1-12.1,20.8c-6.2,5.7-13.4,9-21.5,10c-26.1,2.9-65.3,4.3-117.6,4.3
                                			c-52.3,0-91.6-1.4-117.6-4.3c-8.2-1-15.4-4.3-21.6-10c-6.2-5.7-10.2-12.7-12.1-20.8c-3.8-16-5.7-40.7-5.7-74.2
                                			c0-32.9,1.9-57.7,5.7-74.2c1.9-8.4,5.9-15.4,12.1-21c6.2-5.6,13.5-8.9,21.8-9.9c25.9-2.9,65-4.3,117.3-4.3
                                			c52.5,0,91.7,1.4,117.6,4.3c8.2,1,15.4,4.2,21.7,9.9c6.3,5.6,10.4,12.6,12.3,21c3.6,15.8,5.4,40.5,5.4,74.2
                                			C376.3,331,374.4,355.7,370.6,371.7z"/>
                                		<polygon class="st0" points="85.7,244.7 107.9,244.7 107.9,365.4 129,365.4 129,244.7 151.9,244.7 151.9,224.7 85.7,224.7 		"/>
                                		<path class="st0" d="M190.1,340.6c-4.2,5.9-8.2,8.8-12,8.8c-2.7,0-4.1-1.4-4.3-4.3c-0.2-0.4-0.3-2.9-0.3-7.4v-77.1h-18.8v82.8
                                			c0,7.2,0.6,12.4,1.7,15.4c1.7,5.3,5.7,8,12,8c7,0,14.3-4.3,21.7-12.8v11.4h19.1V260.7h-19.1L190.1,340.6L190.1,340.6z"/>
                                		<path class="st0" d="M264.1,259.2c-6.9,0-13.3,3.8-19.4,11.4v-46h-19.1v140.8h19.1v-10.3c6.3,7.8,12.8,11.7,19.4,11.7
                                			c7.8,0,12.8-4,15.1-12c1.3-4,2-10.9,2-20.8v-41.7c0-10.1-0.7-17.1-2-21.1C276.9,263.2,271.9,259.2,264.1,259.2z M262.4,335.5
                                			c0,9.3-2.8,14-8.3,14c-3.2,0-6.4-1.5-9.4-4.6v-64c3-3,6.2-4.6,9.4-4.6c5.5,0,8.3,4.8,8.3,14.3V335.5z"/>
                                		<path class="st0" d="M333.5,335.3c0,2,0,3.6-0.1,4.7c-0.1,1.1-0.1,1.8-0.1,2c-1.1,4.9-4,7.4-8.6,7.4c-6.5,0-9.7-4.9-9.7-14.6
                                			v-18.6h38v-21.7c0-11-2-19.2-6-24.6c-5.1-7.2-12.6-10.9-22.3-10.9s-17.3,3.6-22.8,10.9c-3.8,5.1-5.7,13.3-5.7,24.6v36.8
                                			c0,11.2,2,19.4,6,24.6c5.5,7.2,13.2,10.9,23.1,10.9c10.1,0,17.7-3.8,22.8-11.4c2.3-3.4,3.7-7.2,4.3-11.4c0.4-2.7,0.6-6.8,0.6-12.3
                                			v-2.6v0h-19.4L333.5,335.3L333.5,335.3L333.5,335.3z M314.9,290.9c0-9.7,3.1-14.6,9.4-14.6c6.3,0,9.4,4.9,9.4,14.6v9.7h-18.8
                                			V290.9z"/>
                                		<path class="st0" d="M215,153c6.1,0,9.1-4.9,9.1-14.6V93.9c0-9.9-3-14.8-9.1-14.8c-6.1,0-9.1,5-9.1,14.8v44.5
                                			C205.9,148.2,208.9,153,215,153z"/>
                                	</g>
                                </g>
                                </svg>
                            </a>
    					</div>
                    </div>
                </nav>
                <nav id="footer_right">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-right',
                         ) );
                    ?>

                    <ul id="privacy_info">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">Privacy Policy</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-statement/">Privacy Statement</a></li>
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
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
