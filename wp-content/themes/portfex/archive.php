<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfex
 */

get_header();
portfex_archive_banner();

?>

<!-- START Blog Grid -->
<section class="blog-grid section-padding">			
	<div class="container">	
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-12 col-12 ">
			<?php
			
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile; ?>

				<div class="post-pagination text-center fix">							

					<?php the_posts_pagination( array(
						'mid_size'  => 2,
						'prev_text' => __( '<svg fill="none" viewBox="0 0 14 6"><path fill="#222" fill-rule="evenodd" d="M.003 3.113V2.88C1.07 1.935 2.143.993 3.223.052c.288-.117.465-.04.531.233a1.406 1.406 0 00-.04.128l-2.62 2.293 12.316.023c.092.03.163.081.213.151v.233c-.05.07-.12.121-.213.152l-12.29.023c.847.763 1.702 1.52 2.568 2.27.124.24.04.387-.253.441a.619.619 0 01-.186-.035 532.338 532.338 0 01-3.246-2.85z" clip-rule="evenodd" opacity=".967"/></svg>', 'portfex' ),
						'next_text' => __( '<svg fill="none" viewBox="0 0 14 6"><path fill="#222" fill-rule="evenodd" d="M13.62 2.886v.233a524.78 524.78 0 01-3.22 2.828c-.288.117-.465.04-.531-.233.015-.042.029-.085.04-.128l2.62-2.293L.213 3.27A.408.408 0 010 3.12v-.233c.05-.07.12-.12.213-.151l12.29-.023c-.847-.764-1.702-1.52-2.568-2.27-.124-.24-.04-.387.253-.442a.619.619 0 01.186.035c1.088.948 2.17 1.898 3.245 2.851z" clip-rule="evenodd" opacity=".967"/></svg>
								', 'portfex' ),
					) ); ?>
								
			</div><!-- End post-pagination -->	
			<?php
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			
			?>				
			</div><!-- END Col -->	
			
			<div class="col-xl-4 col-lg-4 col-md-12 col-12 wow fadeIn">
				<div class="sidebar">
					<?php get_sidebar();?>							
				</div>					
			</div><!-- END Col -->					
		</div>
	</div>			
</section>
<!-- END Blog Grid -->

<?php
get_footer();
