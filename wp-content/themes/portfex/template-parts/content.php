<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfex
 */
$portfex_categories_list = get_the_category_list( esc_html__( ' / ', 'portfex' ) );

?>

<div class="single-post wow fadeIn">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if(has_post_thumbnail()): ?>
		<div class="post-image">
			<?php the_post_thumbnail('portfex_image_800_400');?>	
		</div>	
		<?php endif; ?>
		
		<div class="post-content <?php if(!has_post_thumbnail()){ echo esc_attr('pl0');} ?>">
			<div class="bpost-meta">
				<span>
					<?php echo portfex_wp_kses($portfex_categories_list);?> 
				</span>	-

				<span class="pm-date">
					<?php echo get_the_time('M d, Y');?>
				</span>
			</div>	
			
			<?php
				the_title(
				  sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_attr( esc_url( get_permalink() ) ) ),
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