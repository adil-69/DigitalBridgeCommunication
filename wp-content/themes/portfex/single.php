<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfex
 */

get_header();
portfex_single_banner();

?>

<!-- blog-section - start -->
<section class="blog-details section-padding">	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-8 col-lg-8 col-12">
			
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'single' );

				the_post_navigation(
					array(
						'prev_text' => '<svg fill="none" viewBox="0 0 91 16"><path fill="#1C3F39" d="M.289 7.43a1 1 0 00.008 1.413l6.398 6.33a1 1 0 001.407-1.422L2.414 8.125 8.04 2.437a1 1 0 00-1.422-1.406L.29 7.429zm90.704-.786L.995 7.133l.01 2 90-.49-.012-2z"/></svg>																	
									Preview Posts' ,
						'next_text' => 'Next Post 						
									<svg fill="none" viewBox="0 0 91 16"><path fill="#1C3F39" d="M90.707 8.707a1 1 0 000-1.414L84.343.929a1 1 0 10-1.414 1.414L88.585 8l-5.656 5.657a1 1 0 001.414 1.414l6.364-6.364zM0 9h90V7H0v2z"/></svg>								
								' ,
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>			
				
		
			</div>

			<div class="col-xl-4 col-lg-4 col-12">
				<aside id="sidebar-section" class="sidebar-section clearfix">
					<?php get_sidebar();?>
				</aside>
			</div>

		</div>
	</div>
</section>
<!-- blog-section -->
		

<?php

get_footer();
