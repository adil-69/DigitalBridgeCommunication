<?php

// Work Details Page
 
get_header();
portfex_single_work_banner();

?>
			
<!-- START Portfolio -->
<section class="portfolio-details section-padding">			
	<div class="container">	
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="portf-content">
					<?php the_content();?>
				</div>	

				<div class="pnavigation">
				<?php 
					the_post_navigation(
						array(
							'prev_text' => '<svg fill="none" viewBox="0 0 91 16"><path fill="#1C3F39" d="M.289 7.43a1 1 0 00.008 1.413l6.398 6.33a1 1 0 001.407-1.422L2.414 8.125 8.04 2.437a1 1 0 00-1.422-1.406L.29 7.429zm90.704-.786L.995 7.133l.01 2 90-.49-.012-2z"/></svg>																	
														Prev Project' ,
							'next_text' => 'Next Project <svg fill="none" viewBox="0 0 91 16"><path fill="#1C3F39" d="M90.707 8.707a1 1 0 000-1.414L84.343.929a1 1 0 10-1.414 1.414L88.585 8l-5.656 5.657a1 1 0 001.414 1.414l6.364-6.364zM0 9h90V7H0v2z"/></svg>								
					',
						)
					);
				?>

				</div>						
			</div><!-- END Col -->											
		</div>
	</div>			
</section>
<!-- END Portfolio -->

<?php get_footer();?>