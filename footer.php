<?php
/**
 * @package bigup
 */

	$company_name = get_theme_mod('company-name');
	$company_address = get_theme_mod('company-address');
	$company_location = get_theme_mod('company-location');
	$company_phone = get_theme_mod('company-phone');
	$company_email = get_theme_mod('company-email');

	$social_fb = get_theme_mod('social-facebook');
	$social_tw = get_theme_mod('social-twitter');
	$social_gp = get_theme_mod('social-google-plus');
	$social_pn = get_theme_mod('social-pinterest');
	$social_li = get_theme_mod('social-linkedin');

?>
	
	</div><!-- #content -->

	<footer id="footer" role="contentinfo">

		<div id="site-summary" class="clear">
			<div class="container">
				
				<div class="footer-col-1">
					<h1 class="site-title"><?php echo $company_name ?></h1>
					<!-- <h2 class="site-description"><?php bloginfo('description') ?></h2> -->
					<ul class="footer-social-media">
						<?php if ( $social_fb ): ?>
							<li><a href="<?php echo $social_fb ?>" class="bigup-facebook" target="_blank"></a></li>
						<?php endif ?>
						<?php if ( $social_tw ): ?>
							<li><a href="<?php echo $social_tw ?>" class="bigup-twitter" target="_blank"></a></li>
						<?php endif ?>
						<?php if ( $social_gp ): ?>
							<li><a href="<?php echo $social_gp ?>" class="bigup-google-plus" target="_blank"></a></li>
						<?php endif ?>
						<?php if ( $social_pn ): ?>
							<li><a href="<?php echo $social_pn ?>" class="bigup-pinterest" target="_blank"></a></li>
						<?php endif ?>
						<?php if ( $social_li ): ?>
							<li><a href="<?php echo $social_li ?>" class="bigup-linkedin" target="_blank"></a></li>
						<?php endif ?>
					</ul>
				</div>

				<div class="footer-col-2">
					<h2 class="footer-title">Get In Touch</h2>
					<ul class="company-info">
						<li><i class="bigup-location-1"></i><?php echo $company_address ?></li>
						<li><i class="bigup-globe-world"></i><?php echo $company_location ?></li>
						<li><i class="bigup-phone"></i><?php echo $company_phone ?></li>
						<li><i class="bigup-letter-mail"></i><?php echo antispambot($company_email) ?></li>
					</ul>
				</div>

				<div class="footer-col-3">
					<h2 class="footer-title">Learn More</h2>
					<?php wp_nav_menu('depth=1'); ?>
				</div>

			</div>
		</div>

		<div id="credits">
			<div class="container">
				&copy; <?php echo date('Y'); ?> <?php bloginfo('title') ?> by <a href="http://bigupbranding.com" rel="designer">BigUp Branding</a>
			</div>
		</div>

	</footer><!-- #footer -->

</div><!-- #website -->

<?php wp_footer(); ?>


<div class="fade-cover"></div>
<div class="loading-message">
	<img src="<?php bloginfo('template_url'); ?>/img/oval.svg" />
</div>
<div id="mobile-menu-container">
	<div class="mobile-title"><?php bloginfo('title') ?></div>
	<?php wp_nav_menu(); ?>
	<div class="contact-info">
		<ul class="mobile-social-media">
			<?php if ( $social_fb ): ?>
				<li><a href="<?php echo $social_fb ?>" class="bigup-facebook" target="_blank"></a></li>
			<?php endif ?>
			<?php if ( $social_tw ): ?>
				<li><a href="<?php echo $social_tw ?>" class="bigup-twitter" target="_blank"></a></li>
			<?php endif ?>
			<?php if ( $social_gp ): ?>
				<li><a href="<?php echo $social_gp ?>" class="bigup-google-plus" target="_blank"></a></li>
			<?php endif ?>
			<?php if ( $social_pn ): ?>
				<li><a href="<?php echo $social_pn ?>" class="bigup-pinterest" target="_blank"></a></li>
			<?php endif ?>
			<?php if ( $social_li ): ?>
				<li><a href="<?php echo $social_li ?>" class="bigup-linkedin" target="_blank"></a></li>
			<?php endif ?>
		</ul>
	</div>
</div>
</body>
</html>
