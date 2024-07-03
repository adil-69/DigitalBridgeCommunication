<?php 
/**
 * The template for displaying all single Tour
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfex
 */
 
get_header();
portfex_archive_banner();

?>	

<!-- START Portfolio -->
<section class="portfolio-grid section-padding">			
	<div class="container">	
		
		<div class="row">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'portfolio' );

				endwhile;
				
				echo '<div class="col-12 text-center">';
				
				the_posts_pagination( array(
					'mid_size' => 2,
					'prev_text' => '<i class="fa-solid fa-angles-left"></i>',
					'next_text' => '<i class="fa-solid fa-angles-right"></i>',
				) );
				
				echo '</div>';
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>	
			
							

		</div>
	</div>			
</section>
<!-- END Portfolio -->
	

<?php get_footer();?>	