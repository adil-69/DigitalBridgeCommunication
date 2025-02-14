<?php

function portfex_header(){
	
	global $portfex;

	$portfex_header_dis_opt					 = '';

	if ( isset( $portfex['portfex_header_dis_opt'] ) ) {
		$portfex_header_dis_opt = $portfex['portfex_header_dis_opt'];
	}	
	

	portfex_preloader();
	
	if($portfex_header_dis_opt == '2'){
		
	}else{
		portfex_header_one();	
	}
	
	
}

function portfex_preloader(){
	
	global $portfex;

	$portfex_preloader_opt					 = '';
	$portfex_homepage_opt					 = '';

	if ( isset( $portfex['portfex_preloader_opt'] ) ) {
		$portfex_preloader_opt = $portfex['portfex_preloader_opt'];
	}
	
	if ( isset( $portfex['portfex_homepage_opt'] ) ) {
		$portfex_homepage_opt = $portfex['portfex_homepage_opt'];
	}
	
	if($portfex_preloader_opt == '1' && !$portfex_homepage_opt == '1') { ?>

		<!-- START PRELOADER --> 
		<div class="preloader">
			<span class="loader"></span>
		</div>	
		<!-- END PRELOADER -->	 
	
	<?php }elseif($portfex_preloader_opt == '1' && $portfex_homepage_opt == '1'){ 	

	 if(is_front_page()) { ?>
	
		<!-- START PRELOADER --> 
		<div class="preloader">
			<span class="loader"></span>
		</div>	
		<!-- END PRELOADER -->	
	
	<?php } }

}

function portfex_header_one(){
	global $portfex;
	
	$portfex_header_btns_option					 = '';
	$portfex_header_btn1_text					 = '';
	$portfex_header_btn1_link					 = '';
	$portfex_header_btn2_text					 = '';
	$portfex_header_btn2_link					 = '';

	if ( isset( $portfex['portfex_header_btns_option'] ) ) {
		$portfex_header_btns_option = $portfex['portfex_header_btns_option'];
	}

	if ( isset( $portfex['portfex_header_btn1_text'] ) ) {
		$portfex_header_btn1_text = $portfex['portfex_header_btn1_text'];
	}	
	
	if ( isset( $portfex['portfex_header_btn1_link'] ) ) {
		$portfex_header_btn1_link = $portfex['portfex_header_btn1_link'];
	}	
	
	if ( isset( $portfex['portfex_header_btn2_text'] ) ) {
		$portfex_header_btn2_text = $portfex['portfex_header_btn2_text'];
	}	
	
	if ( isset( $portfex['portfex_header_btn2_link'] ) ) {
		$portfex_header_btn2_link = $portfex['portfex_header_btn2_link'];
	}
	
	$portfex_default_logo_img = get_template_directory_uri() . '/assets/img/logo.svg';
	$portfex_custom_logo_id = get_theme_mod( 'custom_logo' );
	$portfex_custom_logo = wp_get_attachment_image_src( $portfex_custom_logo_id , 'full' );
	
	?>

		<!-- START NAVBAR -->  
		<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-20 align-self-center">
						<div class="site-logo">          				
							<?php if(get_custom_logo()){ ?>				  
							<a href="<?php echo esc_url(home_url('/'));?>" class="navbar-brand"><img src="<?php echo esc_url($portfex_custom_logo[0]);?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
								<?php	}else { ?>
							 <a href="<?php echo esc_url(home_url('/'));?>" class="navbar-brand"><img src="<?php echo esc_url($portfex_default_logo_img);?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
							<?php } ?>
						</div>
					</div><!--- END Col -->
					
					<div class="<?php if($portfex_header_btns_option == true){ echo esc_attr('col-60 justify-content-center'); }else{ echo esc_attr('col-80 justify-content-end'); } ?> d-flex">
						<nav id="main-menu">
							<?php portfex_main_menu();?>	
						</nav>
					</div><!--- END Col -->
					
					<?php if($portfex_header_btns_option == true) : ?>
					<div class="col-20 d-none d-xl-block text-end align-self-center">
						<?php if($portfex_header_btn1_text){ ?>
						<a href="<?php echo esc_url($portfex_header_btn1_link);?>" class="header-btn"><?php echo esc_html($portfex_header_btn1_text);?></a>
						<?php } if($portfex_header_btn2_text){ ?>
						<a href="<?php echo esc_url($portfex_header_btn2_link);?>" class="border-btn"><?php echo esc_html($portfex_header_btn2_text);?></a>
						<?php } ?>
					</div><!--- END Col -->
					<?php endif; ?>
					<?php portfex_mobile_menu();?>
					
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div> 	  
		<!-- END NAVBAR -->
		

<?php 	
}

function portfex_footer(){
	global $portfex;

	$portfex_cta_opt					 = '';
	$portfex_cta_img					 = '';
	$portfex_cta_title					 = '';
	$portfex_cta_btn_text					 = '';
	$portfex_cta_btn_link					 = '';
	$portfex_footer_top_opt					 = '';
	$portfex_copyright_text					 = '';

	if ( isset( $portfex['portfex_cta_opt']) ) {
		$portfex_cta_opt = $portfex['portfex_cta_opt'];
	}	
	if ( isset( $portfex['portfex_cta_img']['url'] ) ) {
		$portfex_cta_img = $portfex['portfex_cta_img']['url'];
	}	
	if ( isset( $portfex['portfex_cta_title'] ) ) {
		$portfex_cta_title = $portfex['portfex_cta_title'];
	}		
	if ( isset( $portfex['portfex_cta_btn_text'] ) ) {
		$portfex_cta_btn_text = $portfex['portfex_cta_btn_text'];
	}	
	if ( isset( $portfex['portfex_cta_btn_link'] ) ) {
		$portfex_cta_btn_link = $portfex['portfex_cta_btn_link'];
	}	
	if ( isset( $portfex['portfex_footer_top_opt'] ) ) {
		$portfex_footer_top_opt = $portfex['portfex_footer_top_opt'];
	}
	
	if ( isset( $portfex['portfex_copyright_text'] ) ) {
		$portfex_copyright_text = $portfex['portfex_copyright_text'];
	}		
	
	$portfex_fepd = get_post_meta(get_the_ID(), '_portfex_fot_extra_padding', true);
 
 if($portfex_cta_opt == true):
 
?>

<!-- Start Call To Action -->

<div class="container call-to-action text-center mb160" style="background-image: url(<?php echo esc_url($portfex_cta_img);?>);">
	<h2><?php echo portfex_wp_kses($portfex_cta_title);?></h2>
	<?php if($portfex_cta_btn_text): ?>
	<a href="<?php echo esc_url($portfex_cta_btn_link);?>" class="border-btn-2"><?php echo esc_html($portfex_cta_btn_text);?></a>
	<?php endif; ?>
</div>	
<!-- End Call To Action -->

<?php endif; ?>		

<!-- START FOOTER -->
<footer class="footer <?php if(!$portfex_footer_top_opt == true){ echo esc_attr('pt30'); }?> <?php if($portfex_fepd == true){ echo esc_attr('pt220'); }elseif($portfex_cta_opt == true){ echo esc_attr('pt220');} ?>">
	<div class="container">
	<?php if($portfex_footer_top_opt == true): ?>
		<div class="footer-top">
			<div class="row">	
				<?php dynamic_sidebar( 'sidebar-2' ); ?>										
			</div>
		</div>	
		<?php endif; ?>
		
		<div class="footer-bottom wow fadeIn <?php if(!$portfex_footer_top_opt == true){ echo esc_attr('nofbottom'); }?>">
			<div class="row">
				<div class="col-xl-6 col-md-6 col-12 align-self-center text-start">
					<p class="copyright_text">
					<?php if($portfex_copyright_text){ ?>
						<?php echo portfex_wp_kses($portfex_copyright_text);?>
					<?php }else{ ?>
					
						<?php printf(__('Copyright © 2024 Portfx  All rights reserved.' , 'portfex'));?>
					
					<?php } ?>
								
					</p>						
				</div><!--- END COL -->	

				<div class="col-xl-6 col-md-6 col-12 text-end">
					<div class="foot_menu">
						<?php portfex_footer_menu();?>	
					</div>							
				</div><!--- END COL -->					
			</div>			
		</div>			
	</div><!--- END CONTAINER -->
</footer>
<!-- END FOOTER -->		

<?php	



}


function banner_shape(){
	?>
	
	<div class="bashape_1">
		<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/shapes/banner-shape1.svg" alt="shape">
	</div>				
	
	<div class="bashape_2">
		<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/shapes/star-1.svg" alt="shape">
	</div>	
	
	<div class="bashape_3">
		<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/shapes/star-2.svg" alt="shape">
	</div>	
<?php	
}

function portfex_blog_banner(){ 
	global $portfex;
	
	$portfex_blog_subtitle						 = '';
	$portfex_blog_title						 = '';

	if ( isset( $portfex['portfex_blog_subtitle']) ) {
		$portfex_blog_subtitle = $portfex['portfex_blog_subtitle'];
	}	
		
	if ( isset( $portfex['portfex_blog_title']) ) {
		$portfex_blog_title = $portfex['portfex_blog_title'];
	}
?>

<!-- START Main Banner -->
<section class="main-banner">		
	<div class="container">			
		<div class="row">
			<div class="col-xl-8 align-self-center wow fadeIn">
				<div class="main_banner_content">					
					<span>
					<?php
						if($portfex_blog_subtitle){
							echo portfex_wp_kses($portfex_blog_subtitle);
						}else{
							
							echo esc_html__('Latest Posts' , 'portfex');	
						}
					?>
						
					</span>						
					<h4>
					<?php
						if($portfex_blog_title){
							echo portfex_wp_kses($portfex_blog_title);
						}else{
							
							echo portfex_wp_kses('Our Latest News  <br> And Blog');	
						}
					?>
					</h4>
					<div class="ba_shape">	
						<svg fill="none" viewBox="0 0 16 141"><path fill="#fff" d="M10.387 11.014l4.886-9.945L3.727.939l4.66 10.053 2 .022zm-3.17 129.69a1 1 0 001.414.016l6.436-6.292a1 1 0 10-1.399-1.43l-5.72 5.592-5.592-5.72a1 1 0 00-1.43 1.398l6.291 6.436zM8.4 9.992L6.932 139.993l2 .023 1.466-130.002-2-.022z"/></svg>
					</div>
				</div>
			</div><!-- End Col -->
		</div>
	</div>

	<?php banner_shape();?>			
	
</section>
<!-- END Main Banner -->


<?php }

function portfex_single_banner(){ 

	$portfex_banner_subtitle = get_post_meta(get_the_ID(), '_portfex_banner_subtitle', true);
	$portfex_banner_title = get_post_meta(get_the_ID(), '_portfex_banner_title', true);
 
	$portfex_categories_list = get_the_category_list( ' , <span> </span> ' );
	
?>

<!-- START Main Banner -->
<section class="main-banner">		
	<div class="container">			
		<div class="row">
			<div class="col-xl-8 align-self-center wow fadeIn">
				<div class="main_banner_content">					
					<span>
					<?php
						if($portfex_banner_subtitle){
							echo portfex_wp_kses($portfex_banner_subtitle);
						}else{
							
							echo esc_html__('Blog Details' , 'portfex');	
						}
					?>
					</span>						
					<h4>
					<?php
						if($portfex_banner_title){
							echo portfex_wp_kses($portfex_banner_title);
						}else{
							
							the_title();	
						}
					?>					

					</h4>
					<div class="ba_shape">	
						<svg fill="none" viewBox="0 0 16 141"><path fill="#fff" d="M10.387 11.014l4.886-9.945L3.727.939l4.66 10.053 2 .022zm-3.17 129.69a1 1 0 001.414.016l6.436-6.292a1 1 0 10-1.399-1.43l-5.72 5.592-5.592-5.72a1 1 0 00-1.43 1.398l6.291 6.436zM8.4 9.992L6.932 139.993l2 .023 1.466-130.002-2-.022z"/></svg>
					</div>
				</div>
			</div><!-- End Col -->
		</div>
		
		<div class="pb-meta wow fadeIn">
			<span class="pm-date">
				<?php echo get_the_time('d M Y');?>
			</span>	<span class="pbspace">-</span>
			<span>
				<?php echo portfex_wp_kses($portfex_categories_list);?>
			</span>
		</div>
	</div>

	
<?php banner_shape();?>					
	
</section>
<!-- END Main Banner -->



<?php }

function portfex_single_work_banner(){ 

	$portfex_banner_subtitle = get_post_meta(get_the_ID(), '_portfex_banner_subtitle', true);
	$portfex_banner_title = get_post_meta(get_the_ID(), '_portfex_banner_title', true);
	$portfex_date_label = get_post_meta(get_the_ID(), '_portfex_date_label', true);
	$portfex_date_opt = get_post_meta(get_the_ID(), '_portfex_date_opt', true);
	$portfex_client_label = get_post_meta(get_the_ID(), '_portfex_client_label', true);
	$portfex_date_name = get_post_meta(get_the_ID(), '_portfex_date_name', true);
	$portfex_category_label = get_post_meta(get_the_ID(), '_portfex_category_label', true);
 
?>

<!-- START Main Banner -->
<section class="main-banner">		
	<div class="container">			
		<div class="row">
			<div class="col-xl-7 align-self-center wow fadeIn">
				<div class="main_banner_content">					
					<span>
						<?php
						if($portfex_banner_subtitle){
							echo portfex_wp_kses($portfex_banner_subtitle);
						}else{
							
							echo esc_html__('Portfolio Details' , 'portfex');	
						}
					?>
					
					</span>						
					<h4>
					<?php
						if($portfex_banner_title){
							echo portfex_wp_kses($portfex_banner_title);
						}else{
							the_title();	
						}
					?>
					</h4>
					<div class="bameta pmeta">
						<span>
							<h4><?php echo esc_html($portfex_date_label);?></h4>
							<p><?php echo esc_html($portfex_date_opt);?></p>
						</span>				

						<span>
							<h4><?php echo esc_html($portfex_client_label);?></h4>
							<p><?php echo esc_html($portfex_date_name);?></p>
						</span>			

						<span>
							<h4><?php echo esc_html($portfex_category_label);?></h4>
							<p><?php $cat_name = get_the_terms(get_the_id(), 'work_cat');
								if ( ! empty( $cat_name ) && ! is_wp_error($cat_name) ){
									 foreach ( $cat_name as $term ) { 
									 
									 echo esc_html($term->name);
									 }
									
								} ?>
							</p>
						</span>
					</div>
					<div class="ba_shape">	
						<svg fill="none" viewBox="0 0 16 141"><path fill="#fff" d="M10.387 11.014l4.886-9.945L3.727.939l4.66 10.053 2 .022zm-3.17 129.69a1 1 0 001.414.016l6.436-6.292a1 1 0 10-1.399-1.43l-5.72 5.592-5.592-5.72a1 1 0 00-1.43 1.398l6.291 6.436zM8.4 9.992L6.932 139.993l2 .023 1.466-130.002-2-.022z"/></svg>
					</div>
				</div>
			</div><!-- End Col -->
		</div>
	</div>
	
	<?php banner_shape();?>					
	
</section>
<!-- END Main Banner -->



<?php }

function portfex_page_banner(){
	
	$portfex_banner_subtitle = get_post_meta(get_the_ID(), '_portfex_banner_subtitle', true);
	$portfex_banner_title = get_post_meta(get_the_ID(), '_portfex_banner_title', true);
 
?>

<!-- START Main Banner -->
<section class="main-banner">		
	<div class="container">			
		<div class="row">
			<div class="col-xl-8 align-self-center wow fadeIn">
				<div class="main_banner_content">					
					<span>
					<?php
						if($portfex_banner_subtitle){
							echo portfex_wp_kses($portfex_banner_subtitle);
						}else{
							
							echo esc_html__('Page Details' , 'portfex');	
						}
					?>
					</span>						
					<h4>
					<?php
						if($portfex_banner_title){
							echo portfex_wp_kses($portfex_banner_title);
						}else{
							
							the_title();	
						}
					?>					

					</h4>
					<div class="ba_shape">	
						<svg fill="none" viewBox="0 0 16 141"><path fill="#fff" d="M10.387 11.014l4.886-9.945L3.727.939l4.66 10.053 2 .022zm-3.17 129.69a1 1 0 001.414.016l6.436-6.292a1 1 0 10-1.399-1.43l-5.72 5.592-5.592-5.72a1 1 0 00-1.43 1.398l6.291 6.436zM8.4 9.992L6.932 139.993l2 .023 1.466-130.002-2-.022z"/></svg>
					</div>
				</div>
			</div><!-- End Col -->
		</div>		
	</div>
	
	<?php banner_shape();?>						
	
</section>
<!-- END Main Banner -->



<?php }

function portfex_archive_banner(){ 
	global $portfex;
	$portfex_archive_subtitle						 = '';

	if ( isset( $portfex['portfex_archive_subtitle']) ) {
		$portfex_archive_subtitle = $portfex['portfex_archive_subtitle'];
	}
?>

<!-- START Main Banner -->
<section class="main-banner">		
	<div class="container">			
		<div class="row">
			<div class="col-xl-8 align-self-center wow fadeIn">
				<div class="main_banner_content">					
					<span>
					<?php
						if($portfex_archive_subtitle){
							echo portfex_wp_kses($portfex_archive_subtitle);
						}else{
							
							echo esc_html__('Archive' , 'portfex');	
						}
					?>					
					
					</span>						
					<h4><?php the_archive_title(); ?></h4>
					<div class="ba_shape">	
						<svg fill="none" viewBox="0 0 16 141"><path fill="#fff" d="M10.387 11.014l4.886-9.945L3.727.939l4.66 10.053 2 .022zm-3.17 129.69a1 1 0 001.414.016l6.436-6.292a1 1 0 10-1.399-1.43l-5.72 5.592-5.592-5.72a1 1 0 00-1.43 1.398l6.291 6.436zM8.4 9.992L6.932 139.993l2 .023 1.466-130.002-2-.022z"/></svg>
					</div>
				</div>
			</div><!-- End Col -->
		</div>
	</div>

	<?php banner_shape();?>					
	
</section>
<!-- END Main Banner -->



<?php }

function portfex_search_banner(){ 
	global $portfex;
	$portfex_search_title						 = '';

	if ( isset( $portfex['portfex_search_title']) ) {
		$portfex_search_title = $portfex['portfex_search_title'];
	}
	
?>

<!-- START Main Banner -->
<section class="main-banner">		
	<div class="container">			
		<div class="row">
			<div class="col-xl-8 align-self-center wow fadeIn">
				<div class="main_banner_content">					
					<span>
					<?php
						if($portfex_search_title){
							echo portfex_wp_kses($portfex_search_title);
						}else{
							echo esc_html__('Search Result' , 'portfex');
						}
					?>
					</span>						
					<h4>
					<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'portfex' ), ' ' . get_search_query() . ' ' );
						?>
					</h4>
					<div class="ba_shape">	
						<svg fill="none" viewBox="0 0 16 141"><path fill="#fff" d="M10.387 11.014l4.886-9.945L3.727.939l4.66 10.053 2 .022zm-3.17 129.69a1 1 0 001.414.016l6.436-6.292a1 1 0 10-1.399-1.43l-5.72 5.592-5.592-5.72a1 1 0 00-1.43 1.398l6.291 6.436zM8.4 9.992L6.932 139.993l2 .023 1.466-130.002-2-.022z"/></svg>
					</div>
				</div>
			</div><!-- End Col -->
		</div>
	</div>

	<?php banner_shape();?>					
	
</section>
<!-- END Main Banner -->

<?php }


function portfex_404_banner(){ 
	global $portfex;
	
	$portfex_404_banner_subtitle						 = '';
	$portfex_404_banner_title						 = '';


	if ( isset( $portfex['portfex_404_banner_subtitle']) ) {
		$portfex_404_banner_subtitle = $portfex['portfex_404_banner_subtitle'];
	}
	if ( isset( $portfex['portfex_404_banner_title']) ) {
		$portfex_404_banner_title = $portfex['portfex_404_banner_title'];
	}	

	
?>

<!-- START Main Banner -->
<section class="main-banner">		
	<div class="container">			
		<div class="row">
			<div class="col-xl-7 align-self-center wow fadeIn">
				<div class="main_banner_content">					
					<span><?php 
						if($portfex_404_banner_subtitle){
							echo portfex_wp_kses($portfex_404_banner_subtitle);
						}else{
							echo esc_html__('404' , 'portfex');
						}
					?></span>						
					<h4><?php 
							if($portfex_404_banner_title){
								echo portfex_wp_kses($portfex_404_banner_title); 
							}else{
								echo esc_html__('Page Not Found' , 'portfex');
							}
						?>
					</h4>
					<div class="ba_shape">	
						<svg fill="none" viewBox="0 0 16 141"><path fill="#fff" d="M10.387 11.014l4.886-9.945L3.727.939l4.66 10.053 2 .022zm-3.17 129.69a1 1 0 001.414.016l6.436-6.292a1 1 0 10-1.399-1.43l-5.72 5.592-5.592-5.72a1 1 0 00-1.43 1.398l6.291 6.436zM8.4 9.992L6.932 139.993l2 .023 1.466-130.002-2-.022z"/></svg>
					</div>
				</div>
			</div><!-- End Col -->
		</div>
	</div>

	<?php banner_shape();?>							
	
</section>
<!-- END Main Banner -->
		
<?php }


function portfex_404_body_title(){
	global $portfex;
	$portfex_404_page_title						 = '';

	if ( isset( $portfex['portfex_404_page_title']) ) {
		$portfex_404_page_title = $portfex['portfex_404_page_title'];
	}
	
	if($portfex_404_page_title){
		echo esc_html($portfex_404_page_title);
	}else{
		echo esc_html__('Oops! Page not found' , 'portfex');
	}	
}

function portfex_404_body_content(){
	global $portfex;
	
	$portfex_404_page_descrption						 = '';

	if ( isset( $portfex['portfex_404_page_descrption']) ) {
		$portfex_404_page_descrption = $portfex['portfex_404_page_descrption'];
	}
	
	if($portfex_404_page_descrption){
		printf($portfex_404_page_descrption);
	}else{
		printf( __('It looks like nothing was found at this location. Maybe try one <br> of the lindfs a search? ' , 'portfex'));
	}	
}


function portfex_404_content(){
	
	global $portfex;
	
	$portfex_404_page_btn_text						 = '';


	if ( isset( $portfex['portfex_404_page_btn_text']) ) {
		$portfex_404_page_btn_text = $portfex['portfex_404_page_btn_text'];
	}	
	
?>
<!-- START Portfolio -->
<section class="notfound_page section-padding text-center">			
	<div class="container">	
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="notfound_content">
					<div class="nfheading">
						<svg fill="none" viewBox="0 0 345 112"><mask id="a" width="347" height="114" x="-1" y="-1" fill="#000" maskUnits="userSpaceOnUse"><path fill="#fff" d="M-1-1h347v114H-1z"/><path d="M49.425 72.729V19.272L21.4 72.729h28.026zM66.552 112H53.058c-2.422 0-3.633-1.211-3.633-3.633V91.759H6.521c-1.96 0-3.518-.577-4.67-1.73C.696 88.876.12 87.319.12 85.358v-6.747c0-3.46.576-6.286 1.73-8.477l34.426-64.01c1.154-2.076 2.191-3.46 3.114-4.152C40.43 1.165 41.93.761 43.89.761h19.55c1.96 0 3.517.577 4.67 1.73 1.269 1.153 1.903 2.71 1.903 4.671v65.567h12.456c2.307 0 3.46 1.153 3.46 3.46V87.78c0 2.653-1.153 3.979-3.46 3.979H70.012v16.608c0 1.384-.288 2.364-.865 2.941-.461.461-1.326.692-2.595.692zm62.802-19.03h10.207c3.691 0 6.286-.75 7.785-2.249 1.499-1.615 2.249-4.267 2.249-7.958V29.998c0-3.69-.75-6.286-2.249-7.785-1.499-1.615-4.094-2.422-7.785-2.422h-10.207c-3.691 0-6.286.807-7.785 2.422-1.499 1.5-2.249 4.094-2.249 7.785v52.765c0 3.69.75 6.343 2.249 7.958 1.499 1.5 4.094 2.249 7.785 2.249zM143.021 112h-17.3c-9.111 0-16.147-2.422-21.106-7.266-4.96-4.844-7.44-11.822-7.44-20.933V28.96c0-9.111 2.48-16.089 7.44-20.933C109.574 3.183 116.61.761 125.721.761h17.3c8.996 0 15.974 2.48 20.933 7.439 4.959 4.844 7.439 11.764 7.439 20.76v54.841c0 8.996-2.48 15.974-7.439 20.933-4.959 4.844-11.937 7.266-20.933 7.266zm92.751-39.271V19.272l-28.026 53.457h28.026zM252.899 112h-13.494c-2.422 0-3.633-1.211-3.633-3.633V91.759h-42.904c-1.961 0-3.518-.577-4.671-1.73-1.154-1.153-1.73-2.71-1.73-4.671v-6.747c0-3.46.576-6.286 1.73-8.477l34.427-64.01c1.153-2.076 2.191-3.46 3.114-4.152 1.038-.807 2.537-1.211 4.498-1.211h19.549c1.96 0 3.517.577 4.671 1.73 1.268 1.153 1.903 2.71 1.903 4.671v65.567h12.456c2.306 0 3.46 1.153 3.46 3.46V87.78c0 2.653-1.154 3.979-3.46 3.979h-12.456v16.608c0 1.384-.289 2.364-.865 2.941-.462.461-1.327.692-2.595.692zm68.117-80.791V4.394c0-2.422 1.211-3.633 3.633-3.633h16.435c2.422 0 3.633 1.211 3.633 3.633v26.815c0 4.613-.288 9.803-.865 15.57-.461 5.651-.807 9.861-1.038 12.629-.23 2.768-.461 5.017-.692 6.747-.23 1.73-.346 2.653-.346 2.768-.461 2.422-1.787 3.633-3.979 3.633h-9.861c-2.191 0-3.517-1.211-3.979-3.633 0-.115-.115-1.038-.346-2.768-.23-1.73-.519-3.979-.865-6.747-.23-2.768-.461-5.767-.692-8.996-.692-9.457-1.038-15.858-1.038-19.203zm23.182 55.879v21.279c0 2.422-1.153 3.633-3.46 3.633h-15.224c-2.306 0-3.46-1.269-3.46-3.806V87.261c0-2.307 1.154-3.46 3.46-3.46h15.224c2.307 0 3.46 1.096 3.46 3.287z"/></mask><path fill="#fff" d="M49.425 72.729V19.272L21.4 72.729h28.026zM66.552 112H53.058c-2.422 0-3.633-1.211-3.633-3.633V91.759H6.521c-1.96 0-3.518-.577-4.67-1.73C.696 88.876.12 87.319.12 85.358v-6.747c0-3.46.576-6.286 1.73-8.477l34.426-64.01c1.154-2.076 2.191-3.46 3.114-4.152C40.43 1.165 41.93.761 43.89.761h19.55c1.96 0 3.517.577 4.67 1.73 1.269 1.153 1.903 2.71 1.903 4.671v65.567h12.456c2.307 0 3.46 1.153 3.46 3.46V87.78c0 2.653-1.153 3.979-3.46 3.979H70.012v16.608c0 1.384-.288 2.364-.865 2.941-.461.461-1.326.692-2.595.692zm62.802-19.03h10.207c3.691 0 6.286-.75 7.785-2.249 1.499-1.615 2.249-4.267 2.249-7.958V29.998c0-3.69-.75-6.286-2.249-7.785-1.499-1.615-4.094-2.422-7.785-2.422h-10.207c-3.691 0-6.286.807-7.785 2.422-1.499 1.5-2.249 4.094-2.249 7.785v52.765c0 3.69.75 6.343 2.249 7.958 1.499 1.5 4.094 2.249 7.785 2.249zM143.021 112h-17.3c-9.111 0-16.147-2.422-21.106-7.266-4.96-4.844-7.44-11.822-7.44-20.933V28.96c0-9.111 2.48-16.089 7.44-20.933C109.574 3.183 116.61.761 125.721.761h17.3c8.996 0 15.974 2.48 20.933 7.439 4.959 4.844 7.439 11.764 7.439 20.76v54.841c0 8.996-2.48 15.974-7.439 20.933-4.959 4.844-11.937 7.266-20.933 7.266zm92.751-39.271V19.272l-28.026 53.457h28.026zM252.899 112h-13.494c-2.422 0-3.633-1.211-3.633-3.633V91.759h-42.904c-1.961 0-3.518-.577-4.671-1.73-1.154-1.153-1.73-2.71-1.73-4.671v-6.747c0-3.46.576-6.286 1.73-8.477l34.427-64.01c1.153-2.076 2.191-3.46 3.114-4.152 1.038-.807 2.537-1.211 4.498-1.211h19.549c1.96 0 3.517.577 4.671 1.73 1.268 1.153 1.903 2.71 1.903 4.671v65.567h12.456c2.306 0 3.46 1.153 3.46 3.46V87.78c0 2.653-1.154 3.979-3.46 3.979h-12.456v16.608c0 1.384-.289 2.364-.865 2.941-.462.461-1.327.692-2.595.692zm68.117-80.791V4.394c0-2.422 1.211-3.633 3.633-3.633h16.435c2.422 0 3.633 1.211 3.633 3.633v26.815c0 4.613-.288 9.803-.865 15.57-.461 5.651-.807 9.861-1.038 12.629-.23 2.768-.461 5.017-.692 6.747-.23 1.73-.346 2.653-.346 2.768-.461 2.422-1.787 3.633-3.979 3.633h-9.861c-2.191 0-3.517-1.211-3.979-3.633 0-.115-.115-1.038-.346-2.768-.23-1.73-.519-3.979-.865-6.747-.23-2.768-.461-5.767-.692-8.996-.692-9.457-1.038-15.858-1.038-19.203zm23.182 55.879v21.279c0 2.422-1.153 3.633-3.46 3.633h-15.224c-2.306 0-3.46-1.269-3.46-3.806V87.261c0-2.307 1.154-3.46 3.46-3.46h15.224c2.307 0 3.46 1.096 3.46 3.287z"/><path fill="#C9F31D" d="M49.425 72.729v1h1v-1h-1zm0-53.457h1l-1.886-.464.886.464zM21.4 72.729l-.886-.464-.767 1.464h1.653v-1zm28.026 19.03h1v-1h-1v1zM1.85 90.029l-.707.707.707-.707zm0-19.895l-.88-.474-.005.008.885.466zm34.427-64.01l-.874-.486-.007.012.881.474zm3.114-4.152l.6.8.007-.005.007-.006-.614-.789zm28.718.519l-.707.707.017.017.017.016.673-.74zm1.903 70.238h-1v1h1v-1zm0 19.03v-1h-1v1h1zm-.865 19.549l-.707-.707.707.707zM50.425 72.729V19.272h-2v53.457h2zM48.54 18.808L20.513 72.265l1.772.928L50.31 19.736l-1.772-.928zM21.4 73.729h28.026v-2H21.4v2zM66.552 111H53.058v2h13.494v-2zm-13.494 0c-1.057 0-1.666-.264-2.017-.615-.352-.352-.616-.961-.616-2.018h-2c0 1.365.342 2.573 1.201 3.432.86.859 2.067 1.201 3.432 1.201v-2zm-2.633-2.633V91.759h-2v16.608h2zm-1-17.608H6.521v2h42.904v-2zm-42.904 0c-1.753 0-3.035-.508-3.964-1.437l-1.414 1.414c1.378 1.378 3.21 2.023 5.378 2.023v-2zm-3.964-1.437c-.929-.929-1.437-2.211-1.437-3.964h-2c0 2.169.645 4 2.023 5.378l1.414-1.414zM1.12 85.358v-6.747h-2v6.747h2zm0-6.747c0-3.359.561-6.01 1.615-8.011l-1.77-.932C-.288 72.048-.88 75.05-.88 78.611h2zm1.61-8.003l34.428-64.01-1.762-.948L.97 69.66l1.762.948zM37.152 6.61c1.142-2.056 2.096-3.28 2.84-3.838l-1.2-1.6c-1.101.826-2.224 2.37-3.388 4.466l1.748.972zm2.854-3.849c.795-.618 2.041-1 3.884-1v-2c-2.078 0-3.83.425-5.112 1.422l1.228 1.578zm3.884-1h19.55v-2h-19.55v2zm19.55 0c1.752 0 3.034.508 3.963 1.437l1.414-1.414C67.438.406 65.606-.24 63.438-.24v2zm3.997 1.47c1.03.936 1.576 2.207 1.576 3.931h2c0-2.198-.722-4.04-2.23-5.41L67.436 3.23zm1.576 3.931v65.567h2V7.162h-2zm1 66.567h12.456v-2H70.012v2zm12.456 0c1 0 1.565.25 1.888.572.323.323.572.889.572 1.888h2c0-1.307-.327-2.472-1.158-3.302-.83-.83-1.994-1.158-3.302-1.158v2zm2.46 2.46V87.78h2V76.189h-2zm0 11.591c0 1.204-.265 1.92-.62 2.328-.331.382-.88.651-1.84.651v2c1.347 0 2.528-.394 3.35-1.339.798-.918 1.11-2.191 1.11-3.64h-2zm-2.46 2.979H70.012v2h12.456v-2zm-13.456 1v16.608h2V91.759h-2zm0 16.608c0 1.292-.278 1.939-.572 2.234l1.414 1.414c.86-.859 1.158-2.172 1.158-3.648h-2zm-.572 2.234c-.16.161-.664.399-1.888.399v2c1.314 0 2.54-.223 3.302-.985l-1.414-1.414zm78.906-19.88l.707.707.013-.013.013-.014-.733-.68zm0-68.508l-.733.68.013.014.013.013.707-.707zm-25.777 0l.707.707.013-.013.013-.014-.733-.68zm0 68.508l-.733.68.013.014.013.013.707-.707zm-16.954 14.013l-.699.715.699-.715zm0-96.707l-.699-.715.699.715zm59.339.173l-.707.707.008.008.699-.715zm0 96.534l.699.715.008-.008-.707-.707zm-34.6-10.764h10.207v-2h-10.207v2zm10.207 0c3.774 0 6.707-.757 8.492-2.542l-1.414-1.414c-1.214 1.214-3.471 1.956-7.078 1.956v2zm8.518-2.569c1.755-1.89 2.516-4.854 2.516-8.638h-2c0 3.597-.738 5.938-1.982 7.278l1.466 1.36zm2.516-8.638V29.998h-2v52.765h2zm0-52.765c0-3.774-.757-6.707-2.542-8.492l-1.414 1.414c1.213 1.214 1.956 3.47 1.956 7.078h2zm-2.516-8.466c-1.784-1.92-4.729-2.741-8.518-2.741v2c3.592 0 5.837.793 7.052 2.102l1.466-1.36zm-8.518-2.741h-10.207v2h10.207v-2zm-10.207 0c-3.79 0-6.735.821-8.518 2.741l1.466 1.361c1.215-1.309 3.46-2.102 7.052-2.102v-2zm-8.492 2.715c-1.785 1.785-2.542 4.718-2.542 8.492h2c0-3.608.742-5.864 1.956-7.078l-1.414-1.414zm-2.542 8.492v52.765h2V29.998h-2zm0 52.765c0 3.784.761 6.748 2.516 8.638l1.466-1.36c-1.244-1.34-1.982-3.68-1.982-7.278h-2zm2.542 8.665c1.785 1.785 4.718 2.542 8.492 2.542v-2c-3.608 0-5.864-.742-7.078-1.956l-1.414 1.414zM143.021 111h-17.3v2h17.3v-2zm-17.3 0c-8.935 0-15.688-2.372-20.407-6.981l-1.398 1.43c5.199 5.079 12.517 7.551 21.805 7.551v-2zm-20.407-6.981c-4.712-4.602-7.138-11.288-7.138-20.218h-2c0 9.292 2.533 16.562 7.74 21.648l1.398-1.43zm-7.138-20.218V28.96h-2v54.841h2zm0-54.841c0-8.93 2.426-15.616 7.138-20.218l-1.398-1.43c-5.207 5.086-7.74 12.356-7.74 21.648h2zm7.138-20.218c4.719-4.61 11.472-6.981 20.407-6.981v-2c-9.288 0-16.606 2.472-21.805 7.55l1.398 1.431zm20.407-6.981h17.3v-2h-17.3v2zm17.3 0c8.809 0 15.503 2.423 20.226 7.146l1.414-1.414c-5.196-5.196-12.457-7.732-21.64-7.732v2zm20.234 7.154c4.714 4.605 7.138 11.234 7.138 20.045h2c0-9.181-2.536-16.392-7.74-21.475l-1.398 1.43zm7.138 20.045v54.841h2V28.96h-2zm0 54.841c0 8.81-2.424 15.503-7.146 20.226l1.414 1.414c5.196-5.196 7.732-12.457 7.732-21.64h-2zm-7.138 20.218c-4.722 4.612-11.419 6.981-20.234 6.981v2c9.176 0 16.435-2.475 21.632-7.551l-1.398-1.43zm72.517-31.29v1h1v-1h-1zm0-53.457h1l-1.886-.464.886.464zm-28.026 53.457l-.886-.464-.768 1.464h1.654v-1zm28.026 19.03h1v-1h-1v1zm-47.575-1.73l-.707.707.707-.707zm0-19.895l-.881-.474-.004.008.885.466zm34.427-64.01l-.874-.486-.007.012.881.474zm3.114-4.152l.6.8.007-.005.007-.006-.614-.789zm28.718.519l-.707.707.017.017.017.016.673-.74zm1.903 70.238h-1v1h1v-1zm0 19.03v-1h-1v1h1zm-.865 19.549l-.707-.707.707.707zm-18.722-38.579V19.272h-2v53.457h2zm-1.886-53.921L206.86 72.265l1.771.928 28.026-53.457-1.771-.928zm-27.14 54.921h28.026v-2h-28.026v2zM252.899 111h-13.494v2h13.494v-2zm-13.494 0c-1.057 0-1.666-.264-2.018-.615-.352-.352-.615-.961-.615-2.018h-2c0 1.365.342 2.573 1.201 3.432S238.04 113 239.405 113v-2zm-2.633-2.633V91.759h-2v16.608h2zm-1-17.608h-42.904v2h42.904v-2zm-42.904 0c-1.753 0-3.035-.508-3.964-1.437l-1.414 1.414c1.378 1.378 3.209 2.023 5.378 2.023v-2zm-3.964-1.437c-.929-.929-1.437-2.211-1.437-3.964h-2c0 2.169.645 4 2.023 5.378l1.414-1.414zm-1.437-3.964v-6.747h-2v6.747h2zm0-6.747c0-3.359.561-6.01 1.615-8.011l-1.77-.932c-1.253 2.38-1.845 5.382-1.845 8.943h2zm1.611-8.003l34.427-64.01-1.762-.948-34.427 64.01 1.762.948zm34.42-63.998c1.142-2.056 2.096-3.28 2.84-3.838l-1.2-1.6c-1.102.826-2.224 2.37-3.388 4.466l1.748.972zm2.854-3.849c.795-.618 2.041-1 3.884-1v-2c-2.079 0-3.831.425-5.112 1.422l1.228 1.578zm3.884-1h19.549v-2h-19.549v2zm19.549 0c1.753 0 3.035.508 3.964 1.437l1.414-1.414c-1.378-1.378-3.21-2.023-5.378-2.023v2zm3.998 1.47c1.029.936 1.576 2.207 1.576 3.931h2c0-2.198-.722-4.04-2.231-5.41l-1.345 1.479zm1.576 3.931v65.567h2V7.162h-2zm1 66.567h12.456v-2h-12.456v2zm12.456 0c.999 0 1.565.25 1.888.572.323.323.572.889.572 1.888h2c0-1.307-.328-2.472-1.158-3.302-.83-.83-1.995-1.158-3.302-1.158v2zm2.46 2.46V87.78h2V76.189h-2zm0 11.591c0 1.204-.265 1.92-.62 2.328-.331.382-.88.651-1.84.651v2c1.346 0 2.528-.394 3.349-1.339.799-.918 1.111-2.191 1.111-3.64h-2zm-2.46 2.979h-12.456v2h12.456v-2zm-13.456 1v16.608h2V91.759h-2zm0 16.608c0 1.292-.278 1.939-.572 2.234l1.414 1.414c.859-.859 1.158-2.172 1.158-3.648h-2zm-.572 2.234c-.161.161-.664.399-1.888.399v2c1.313 0 2.54-.223 3.302-.985l-1.414-1.414zm89.065-63.822l-.995-.1-.001.01v.009l.996.081zm-1.038 12.629l.997.083-.997-.083zm-.692 6.747l-.991-.132.991.132zm-.346 2.768l.983.187.017-.093v-.094h-1zm-17.819 0h-1v.094l.018.093.982-.187zm-.346-2.768l.991-.132-.991.132zm-.865-6.747l-.996.083.001.02.003.021.992-.124zm-.692-8.996l.998-.071v-.002l-.998.073zm-.038-19.203V4.394h-2v26.815h2zm0-26.815c0-1.057.264-1.666.616-2.018.351-.351.96-.615 2.017-.615v-2c-1.365 0-2.572.342-3.432 1.201-.859.86-1.201 2.067-1.201 3.432h2zm2.633-2.633h16.435v-2h-16.435v2zm16.435 0c1.057 0 1.666.264 2.018.615.352.352.615.961.615 2.018h2c0-1.365-.342-2.573-1.201-3.432s-2.067-1.201-3.432-1.201v2zm2.633 2.633v26.815h2V4.394h-2zm0 26.815c0 4.573-.286 9.729-.86 15.47l1.99.2c.579-5.792.87-11.016.87-15.67h-2zm-.861 15.489c-.462 5.65-.808 9.86-1.038 12.627l1.993.166c.231-2.769.577-6.98 1.038-12.63l-1.993-.163zm-1.038 12.627c-.23 2.76-.459 4.99-.687 6.698l1.982.264c.234-1.753.466-4.02.698-6.796l-1.993-.166zm-.687 6.698a360.36 360.36 0 00-.261 1.998c-.029.232-.051.417-.066.554-.012.104-.028.25-.028.348h2c0 .04-.001.028.016-.127.013-.124.034-.298.063-.528.057-.457.143-1.117.258-1.98l-1.982-.265zm-.337 2.713c-.205 1.076-.579 1.759-1.033 2.173-.44.402-1.06.647-1.964.647v2c1.288 0 2.427-.36 3.313-1.17.872-.796 1.392-1.93 1.649-3.276l-1.965-.374zm-2.997 2.82h-9.861v2h9.861v-2zm-9.861 0c-.904 0-1.523-.245-1.964-.647-.453-.414-.827-1.097-1.032-2.173l-1.965.374c.256 1.346.776 2.48 1.649 3.276.886.81 2.025 1.17 3.312 1.17v-2zm-2.979-2.633c0-.098-.016-.244-.028-.348a39.673 39.673 0 00-.066-.555c-.058-.465-.145-1.131-.261-1.997l-1.982.264a261.922 261.922 0 01.322 2.509c.017.154.015.167.015.127h2zm-.355-2.9c-.23-1.726-.518-3.972-.864-6.739l-1.984.248c.346 2.77.635 5.021.866 6.755l1.982-.264zm-.859-6.698a741.128 741.128 0 01-.691-8.984l-1.995.142c.231 3.233.462 6.236.693 9.008l1.993-.166zm-.691-8.986c-.693-9.462-1.036-15.827-1.036-19.13h-2c0 3.387.349 9.823 1.041 19.276l1.995-.146zm20.146 36.749v21.279h2V87.088h-2zm0 21.279c0 1.069-.255 1.685-.589 2.035-.325.342-.884.598-1.871.598v2c1.32 0 2.491-.349 3.319-1.219.82-.86 1.141-2.061 1.141-3.414h-2zm-2.46 2.633h-15.224v2h15.224v-2zm-15.224 0c-.973 0-1.527-.263-1.855-.624-.344-.379-.605-1.045-.605-2.182h-2c0 1.4.316 2.637 1.125 3.527.826.908 2.002 1.279 3.335 1.279v-2zm-2.46-2.806V87.261h-2v20.933h2zm0-20.933c0-1 .249-1.565.572-1.888.323-.323.889-.572 1.888-.572v-2c-1.307 0-2.472.328-3.302 1.158-.83.83-1.158 1.995-1.158 3.302h2zm2.46-2.46h15.224v-2h-15.224v2zm15.224 0c1.012 0 1.585.241 1.906.547.313.296.554.812.554 1.74h2c0-1.263-.335-2.391-1.176-3.19-.832-.79-1.989-1.097-3.284-1.097v2z" mask="url(#a)"/></svg>
					</div>
					<h3><?php portfex_404_body_title();?></h3>
					<p>
						<?php portfex_404_body_content();?>
					</p>
					<div class="text-center">
						<a href="<?php echo esc_url(home_url('/'));?>" class="yellow_btn yb2">
							<?php 
							if($portfex_404_page_btn_text){ 
								echo portfex_wp_kses($portfex_404_page_btn_text);
							 }else{ 
									echo esc_html__('Back to Home' , 'portfex');
							} ?> 
						</a>
					</div>
					
				</div>							
			</div><!-- END Col -->											
		</div>
	</div>			
</section>
<!-- END Portfolio -->

<?php

}

