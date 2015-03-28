<?php 
/**
 * Intro
 * @package maxlutz
 */

	$intro_title = get_theme_mod('intro-title');
	$intro_message = get_theme_mod('intro-message');

?>

	<section id="site-intro">

		<div class="container">
			
			<div class="intro-content">
				
				<?php if ( $intro_title ): ?><h1 class="intro-title"><?php echo $intro_title; ?></h1><?php endif ?>
				<?php if ( $intro_message ): ?><h2 class="intro-message"><?php echo $intro_message; ?></h2><?php endif ?>

				<button class="action"><a href="#content">Get Started</a></button>

			</div>

		</div>

	</section>