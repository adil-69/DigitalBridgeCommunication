<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfex
 */

?>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfex
 */

?>

<div class="single-post wow fadeIn">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post-content">
			
			<?php
				the_title(
				  sprintf( '<h2><a href="%s" rel="bookmark">', esc_attr( esc_url( get_permalink() ) ) ),
				  '</a></h2>'
				);
			?>
			<div class="post_content">
				<?php the_excerpt();?>
			</div>
			<a class="border-btn" href="<?php the_permalink();?>"> <?php esc_html_e('Read More' , 'portfex');?></a>
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfex' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
		
	</article>
</div><!-- End Single Post -->						