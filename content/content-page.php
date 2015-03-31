<?php
/**
 * @package bigup
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bigup' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<!-- Query Subpages -->
		<?php
			// Get child pages if they exist 
			$my_wp_query = new WP_Query();
			$all_wp_pages = $my_wp_query->query(array( 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC' ));

			// Get the page as an Object
			$current_page_ID =  get_the_ID();

			// Filter through all pages and find Portfolio's children
			$current_page_children = get_page_children( $current_page_ID, $all_wp_pages );

			?>

			<?php if ( $current_page_children ): ?>

				<aside id="subpages">

					<h1 class="subpages-title">Learn more:</h1>

					<ul>
						
						<?php foreach ($current_page_children as $child_page ): ?>

						<?php 
						// child page title
						$page_title = $child_page->post_title; 
						// child page URL
						$page_url = $child_page->guid; 
						?>

						<li class="subpages-button">
							<a href="<?php echo $page_url; ?>"><?php echo $page_title; ?></a>
						</li>
						
						<?php endforeach ?>

					</ul>
				
				</aside>

			<?php endif ?>

	</footer><!-- .entry-footer -->
	
</article><!-- #post-## -->
