<?php 
	
	/*
		This is the template for the footer
		
		@package Smooth Scroll theme
	*/
?>
<footer class="footer-distributed SBgC <?php esc_html_e( get_theme_mod( 'footer_font' ) ); ?>">

<div id="footer" class="footer-left">

	<h3><?php echo get_theme_mod( 'cp_name_text', 'Title two' ) ?></h3>

	<p class="footer-links">
		
		<?php if( get_theme_mod( 'cd_section_one_display', 'show' ) == 'show' ) : ?>
		<a data-scroll href="#about">About me</a>
		<?php endif ?> 
		<?php if( get_theme_mod( 'section_two_display', 'show' ) == 'show' ) : ?>
		<a data-scroll href="#skills">my skills</a>
		<?php endif ?> 
		<?php if( get_theme_mod( 'cd_section_three_display', 'show' ) == 'show' ) : ?>
		<a data-scroll href="#works">My works</a>
		<?php endif ?> 
		<?php if( get_theme_mod( 'cd_Sc_s_four', 'show' ) == 'show' ) : ?>
		<a data-scroll href="#design">My Designs</a>
		<?php endif ?> 
		<a data-scroll href="#contact">Contact</a>
		
	
	</p>

	<p class="footer-company-name"><span><?php echo get_theme_mod( 'cp_copywight') ?> </span> © <?php echo get_theme_mod( 'cp_copywight_year') ?></p>
</div>

<div id="footer-contact" class="footer-center">
	<?php if( get_theme_mod( 'cd_s_address', 'show' ) == 'show' ) : ?>
	<div id=street>
		<i class="fa fa-map-marker"></i>
		<div class="address">
			<div id="streets">
				<p><?php echo get_theme_mod( 'cp_s_street') ?></p>
			</div>
			<div id="cite">
				<p><?php echo get_theme_mod( 'cp_cite_state') ?></p>
			</div>

		</div>
	</div>
	<?php endif ?>
	<?php if( get_theme_mod( 'cd_d_phone', 'show' ) == 'show' ) : ?>
	<div id="phone">
		<i class="fa fa-phone"></i>
		<p class="phone"><?php echo get_theme_mod( 'phone_number') ?></p>
	</div>
	<?php endif ?>
	<?php if( get_theme_mod( 'cd_d_email', 'show' ) == 'show' ) : ?>
	<div id="email">
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:<?php echo get_theme_mod( 'cp_e_mail' ) ?>"><?php echo get_theme_mod( 'cp_e_mail' ) ?></a></p>
	</div>
	<?php endif ?> 
</div>

<div id="fab" class="footer-right">

	<div class="footer-company-about">
		<h3><?php echo get_theme_mod( 'footer_heading', 'Title two' ) ?></h3>
		<p><?php echo get_theme_mod( 'f_about_d', 'Title two' ) ?></P>
	</div>

	<div class="footer-icons">
	<?php if( get_theme_mod( 'fb_display', 'show' ) == 'show' ) : ?>
		<a href="<?php echo get_theme_mod( 'Main_HL_text', 'https://www.facebook.com' ) ?>"><i class="fa fa-facebook"></i></a>
		<?php endif ?> 
		<?php if( get_theme_mod( 'tw_display', 'show' ) == 'show' ) : ?>
		<a href="<?php echo get_theme_mod( 'tw_main_link', 'https://www.twitter.com' ) ?>"><i class="fa fa-twitter"></i></a>
		<?php endif ?> 
		<?php if( get_theme_mod( 'ln_display', 'show' ) == 'show' ) : ?>
		<a href="<?php echo get_theme_mod( 'ln_main_link', 'https://www.linkedin.com' ) ?>"><i class="fa fa-linkedin"></i></a>
		<?php endif ?> 
		<?php if( get_theme_mod( 'yt_display', 'show' ) == 'show' ) : ?>
		<a  href="<?php echo get_theme_mod( 'yt_main_link', 'https://www.youtube.com' ) ?>"><i class="fa fa-youtube"></i></a>
		<?php endif ?> 
		<?php if( get_theme_mod( 'ig_display_display', 'show' ) == 'show' ) : ?>
        <a href="<?php echo get_theme_mod( 'ig_main_link', 'https://www.instagram.com' ) ?>"><i class="fa fa-instagram"></i></a>
        <?php endif ?> 
		<?php if( get_theme_mod( 'pin_display', 'show' ) == 'show' ) : ?>
        <a href="<?php echo get_theme_mod( 'pin_main_link', 'https://www.pinterest.com' ) ?>"><i class="fa fa-fa fa-pinterest"></i></a></li>
        <?php endif ?> 
	</div>

</div>

</footer>
<?php wp_footer(); ?>
</body>
</html>