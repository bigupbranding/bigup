<?php
/**
 * @package bigup
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="blog-left">

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail('thumbnail'); ?> 
		<?php endif ?>
		
	</div>

	<div class="blog-right">
	
		<header class="entry-header">

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
			</div>

			<h1 class="article-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>

		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php the_trimmed_content(); ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'bigup' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			
		</footer><!-- .entry-footer -->

	</div>

</article><!-- #post-## -->