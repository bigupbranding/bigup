<?php
/**
 * @package maxlutz
 */

get_header(); ?>

	<section id="case-studies" class="clear dark-section">
		<div class="container padding-top-bottom">
			<header class="section-header squeeze-text">
				<h2 class="section-title">Case Studies</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis.</p>	
			</header>
		</div>
		<main>
			<?php 
			// query posts from case studies category
			$query_casestudies = new WP_Query( 'post_type=post&category_name=case-studies&posts_per_page=4' ); ?>
				<?php while ( $query_casestudies->have_posts() ) : $query_casestudies->the_post(); ?>
					<div class="case-study float-left">
						<a href="<?php echo get_permalink(); ?>" class="fill"></a>
						<div class="case-study-img" style="background-image:url(<?php echo get_medium_url(); ?>)"></div>
						<div class="darken-layer"></div>
						<div class="case-study-title">
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>	
		</main>
	</section>
	
	<section id="recent-blog-post" class="clear">
		<div class="clear flex">
			<?php 
				// query posts from case studies category
				$query_posts = new WP_Query( 'post_type=post&cat=-3&posts_per_page=1' ); // excludes id=3 for case studies ?>
			<?php while ( $query_posts->have_posts() ) : $query_posts->the_post(); ?>
				<div class="float-left">
					<h2 class="section-title">Recent Blog Post</h2>
					<h3><?php the_title() ?></h3>
					<?php echo get_the_date(); ?>
					<?php the_trimmed_content(50); ?>
				</div>
				<div class="float-right" style="background-image:url('<?php echo get_image_url(); ?>')"></div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>	
		</div>
	</section>


<?php get_footer(); ?>
