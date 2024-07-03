<?php
/**
Template Name: Page Builder Template
*/

get_header();

$portfex_rev_alias =  get_post_meta(get_the_ID(),'_portfex_rev_slider_alias',true); 

if($portfex_rev_alias){
 if (class_exists('RevSlider')) putRevSlider($portfex_rev_alias);
}

$portfex_hide_banner = get_post_meta(get_the_ID(), '_portfex_hide_banner', true);

if($portfex_hide_banner == true){
	
}else{
	portfex_page_banner();
}

?>

<div class="page-builder-template">
	<?php
	while ( have_posts() ) :
		the_post();

		the_content();

	endwhile; // End of the loop. ?>
						
</div>

<?php

get_footer();