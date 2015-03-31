<?php
/**
 * @package bigup
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-image"><?php the_post_thumbnail('large'); ?></div>
		<?php endif ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<span>
				<?php
				$categories = get_the_category();
				$separator = ' ';
				$output = '';
				if($categories){
					foreach($categories as $category) {
						$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '"><i class="bigup-news"></i> '.$category->cat_name.'</a>'.$separator;
					}
				echo trim($output, $separator);
				}?>
			</span>
			<span><i class="bigup-calendar"></i> <?php the_time( 'F j, Y' ); ?></span>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<div class="keep-reading">Did you enjoy reading this article? Share it on social media! Want more? Keep reading more from our blog...</div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bigup' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
