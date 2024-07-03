<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfex
 */
?>

<div class="single_blog blog-details">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(has_post_thumbnail()): ?>
	<div class="blog_image">
		<?php the_post_thumbnail('portfex_image_1200_800');?>
	</div>
	<?php endif; ?>

		<div class="entry-content">	
			<?php 
			the_content();
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfex' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>	
	</article><!-- #post-<?php the_ID(); ?> -->	
</div>	