<?php
/**
 * @package bigup
 */

get_header(); ?>

	<div class="container clear">
		
		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">
		
					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content/content', 'blog' ) ?>

				<?php endwhile; ?>

				<?php bigup_paging_nav(); ?>

			</main>

		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .container -->

<?php get_footer(); ?>
