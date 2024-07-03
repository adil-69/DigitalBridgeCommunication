<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfex
 */
$portfex_tag_list = get_the_tag_list( esc_html__( ' ' , 'portfex' ) );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
	<div class="post-inner">
		<?php if(has_post_thumbnail()): ?>
		<div class="post-image">
			<?php the_post_thumbnail('portfex_blog_img');?>
		</div>
		<?php endif; ?>					
		
		<div class="entry-content">
			<?php the_content();?>
		</div>
		
	</div><!-- End post-inner -->
</article><!-- #post-<?php the_ID(); ?> -->		

