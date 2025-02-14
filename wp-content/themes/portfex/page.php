<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfex
 */

get_header();
portfex_page_banner();

?>

<!-- blog-section - start -->
<section class="blog-details section-padding">	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-8 col-lg-8 col-12">
			
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );
				
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
