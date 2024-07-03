<?php 
function portfex_movers_custom_css(){
	global $portfex;
	
	if(!is_admin()) :
	
	
		$portfex_custom_css_opt						 = '';
		$portfex_primary_theme_color_opt						 = '';
		$portfex_primary_theme_textcolor_opt						 = '';
		$portfex_secondary_theme_color_opt						 = '';
		$portfex_secondary_theme_textcolor_opt						 = '';
		$portfex_border_btn_border_color						 = '';
		$portfex_border_btn_color						 = '';	
		$portfex_border_btn_hbgcolor						 = '';	
		$portfex_border_btn_htextcolor						 = '';	
		$portfex_button_bgcolor						 = '';	
		$portfex_button_bg_text_color						 = '';	
		$portfex_button_hbgcolor						 = '';	
		$portfex_button_hbg_text_color						 = '';
		$portfex_menu_text_color						 = '';	
		$portfex_menu_text_hover_color						 = '';	
		$portfex_submenu_border_color						 = '';		
		$portfex_submenu_bg_color						 = '';
		$portfex_submenu_text_color						 = '';	
		$portfex_submenu_hover_bg_color						 = '';		
		$portfex_submenu_hover_text_color						 = '';		
		$portfex_spinner_bgcolor						 = '';		
		$portfex_spinner_color						 = '';		
		$portfex_footer_backgorund_color						 = '';		
		$portfex_footer_title_color						 = '';		
		$portfex_footer_text_color						 = '';		
		$portfex_footer_link_color						 = '';		
		$portfex_footer_link_hover_color						 = '';		
		$portfex_footer_social_color						 = '';		
		$portfex_footer_hsocial_bgcolor						 = '';		
		$portfex_footer_hsocial_color						 = '';		
		$portfex_scroll_up_bg_color						 = '';		
		$portfex_scroll_up_icon_color						 = '';		
		$portfex_scroll_up_bg_hcolor						 = '';		
		$portfex_scroll_up_text_hcolor						 = '';				
	
		
		if ( isset( $portfex['portfex_custom_css_opt'] ) ) {
			$portfex_custom_css_opt = $portfex['portfex_custom_css_opt'];
		}	
		
		if ( isset( $portfex['portfex_primary_theme_color_opt'] ) ) {
			$portfex_primary_theme_color_opt = $portfex['portfex_primary_theme_color_opt'];
		}		
		
		if ( isset( $portfex['portfex_primary_theme_textcolor_opt'] ) ) {
			$portfex_primary_theme_textcolor_opt = $portfex['portfex_primary_theme_textcolor_opt'];
		}	
		
		if ( isset( $portfex['portfex_secondary_theme_color_opt'] ) ) {
			$portfex_secondary_theme_color_opt = $portfex['portfex_secondary_theme_color_opt'];
		}			
		
		if ( isset( $portfex['portfex_secondary_theme_textcolor_opt'] ) ) {
			$portfex_secondary_theme_textcolor_opt = $portfex['portfex_secondary_theme_textcolor_opt'];
		}		
		if ( isset( $portfex['portfex_border_btn_border_color'] ) ) {
			$portfex_border_btn_border_color = $portfex['portfex_border_btn_border_color'];
		}		
		if ( isset( $portfex['portfex_border_btn_color'] ) ) {
			$portfex_border_btn_color = $portfex['portfex_border_btn_color'];
		}			
	
		if ( isset( $portfex['portfex_border_btn_hbgcolor'] ) ) {
			$portfex_border_btn_hbgcolor = $portfex['portfex_border_btn_hbgcolor'];
		}		
		
		if ( isset( $portfex['portfex_border_btn_htextcolor'] ) ) {
			$portfex_border_btn_htextcolor = $portfex['portfex_border_btn_htextcolor'];
		}	
		
		if ( isset( $portfex['portfex_button_bgcolor'] ) ) {
			$portfex_button_bgcolor = $portfex['portfex_button_bgcolor'];
		}	
							
		if ( isset( $portfex['portfex_button_bg_text_color'] ) ) {
			$portfex_button_bg_text_color = $portfex['portfex_button_bg_text_color'];
		}				
			
		if ( isset( $portfex['portfex_button_hbgcolor'] ) ) {
			$portfex_button_hbgcolor = $portfex['portfex_button_hbgcolor'];
		}	
		
		if ( isset( $portfex['portfex_button_hbg_text_color'] ) ) {
			$portfex_button_hbg_text_color = $portfex['portfex_button_hbg_text_color'];
		}	
		
		if ( isset( $portfex['portfex_menu_text_color'] ) ) {
			$portfex_menu_text_color = $portfex['portfex_menu_text_color'];
		}		
		
		if ( isset( $portfex['portfex_menu_text_hover_color'] ) ) {
			$portfex_menu_text_hover_color = $portfex['portfex_menu_text_hover_color'];
		}			
		
		if ( isset( $portfex['portfex_submenu_border_color'] ) ) {
			$portfex_submenu_border_color = $portfex['portfex_submenu_border_color'];
		}		

		if ( isset( $portfex['portfex_submenu_bg_color'] ) ) {
			$portfex_submenu_bg_color = $portfex['portfex_submenu_bg_color'];
		}		
		
		if ( isset( $portfex['portfex_submenu_text_color'] ) ) {
			$portfex_submenu_text_color = $portfex['portfex_submenu_text_color'];
		}		
		
		if ( isset( $portfex['portfex_submenu_hover_bg_color'] ) ) {
			$portfex_submenu_hover_bg_color = $portfex['portfex_submenu_hover_bg_color'];
		}			

		
		if ( isset( $portfex['portfex_submenu_hover_text_color'] ) ) {
			$portfex_submenu_hover_text_color = $portfex['portfex_submenu_hover_text_color'];
		}			
		
		if ( isset( $portfex['portfex_spinner_bgcolor'] ) ) {
			$portfex_spinner_bgcolor = $portfex['portfex_spinner_bgcolor'];
		}			
		
		if ( isset( $portfex['portfex_spinner_color'] ) ) {
			$portfex_spinner_color = $portfex['portfex_spinner_color'];
		}	
		
		if ( isset( $portfex['portfex_footer_backgorund_color'] ) ) {
			$portfex_footer_backgorund_color = $portfex['portfex_footer_backgorund_color'];
		}	
		
		if ( isset( $portfex['portfex_footer_title_color'] ) ) {
			$portfex_footer_title_color = $portfex['portfex_footer_title_color'];
		}	
		
		if ( isset( $portfex['portfex_footer_text_color'] ) ) {
			$portfex_footer_text_color = $portfex['portfex_footer_text_color'];
		}	
		
		if ( isset( $portfex['portfex_footer_link_color'] ) ) {
			$portfex_footer_link_color = $portfex['portfex_footer_link_color'];
		}		
		
		if ( isset( $portfex['portfex_footer_link_hover_color'] ) ) {
			$portfex_footer_link_hover_color = $portfex['portfex_footer_link_hover_color'];
		}	
		
		if ( isset( $portfex['portfex_footer_social_color'] ) ) {
			$portfex_footer_social_color = $portfex['portfex_footer_social_color'];
		}		
		
		if ( isset( $portfex['portfex_footer_hsocial_bgcolor'] ) ) {
			$portfex_footer_hsocial_bgcolor = $portfex['portfex_footer_hsocial_bgcolor'];
		}		
		
		if ( isset( $portfex['portfex_footer_hsocial_color'] ) ) {
			$portfex_footer_hsocial_color = $portfex['portfex_footer_hsocial_color'];
		}	
		
		if ( isset( $portfex['portfex_scroll_up_bg_color'] ) ) {
			$portfex_scroll_up_bg_color = $portfex['portfex_scroll_up_bg_color'];
		}	
		
		if ( isset( $portfex['portfex_scroll_up_icon_color'] ) ) {
			$portfex_scroll_up_icon_color = $portfex['portfex_scroll_up_icon_color'];
		}	
		
		if ( isset( $portfex['portfex_scroll_up_bg_hcolor'] ) ) {
			$portfex_scroll_up_bg_hcolor = $portfex['portfex_scroll_up_bg_hcolor'];
		}		
				
		if ( isset( $portfex['portfex_scroll_up_text_hcolor'] ) ) {
			$portfex_scroll_up_text_hcolor = $portfex['portfex_scroll_up_text_hcolor'];
		}		
		

	
	if($portfex_custom_css_opt == true){

	wp_enqueue_style( 'portfex-custom-css', get_template_directory_uri() . '/css/custom-style.css' );
	
	//add custom css
	$portfex_custom_css = "
	
		body .border-btn, 
		body .border-btn-2{
			color: {$portfex_border_btn_color};
			border-color: {$portfex_border_btn_border_color};
		}
		body .border-btn:before{
			background-color: {$portfex_border_btn_hbgcolor};
		}
		body .border-btn:hover,
		body .border-btn:focus{
			color: {$portfex_border_btn_htextcolor};
			border: 1px solid {$portfex_border_btn_hbgcolor};
		}
		body .yellow_btn{
			background: {$portfex_button_bgcolor};
			border-color: {$portfex_button_bgcolor};
			color: {$portfex_button_bg_text_color};
		}
		body .yellow_btn:before{
			background-color: {$portfex_button_hbgcolor};
		}
		body .yellow_btn:hover,
		body .yellow_btn:focus{
			color: {$portfex_button_hbg_text_color};
		}
		
		body .preloader{
			background: {$portfex_spinner_bgcolor};
		}
		body .loader::after,
		body .loader::before {
			border: 2px solid {$portfex_spinner_color};
		}		

		body #main-menu ul li a{
			color: {$portfex_menu_text_color};
		}
		body #navigation #main-menu .menu-item-has-children::after{
			color: {$portfex_menu_text_color};
		}
		body #main-menu ul li a:hover, 
		body #main-menu ul li a:focus{
			color: {$portfex_menu_text_hover_color};
		}
			
		body #navigation #main-menu ul li ul, 
		body #navigation #main-menu ul li ul li ul {
			background: {$portfex_submenu_bg_color};
			border-top: 2px solid {$portfex_submenu_border_color};	
		}	
		body #navigation #main-menu ul li ul li a,
		body #navigation #main-menu ul ul .menu-item-has-children:after{
			color: {$portfex_submenu_text_color};
		}
		body #navigation #main-menu ul li ul li a:hover{
			background: {$portfex_submenu_hover_bg_color};
			color: {$portfex_submenu_hover_text_color};
		}
		body #navigation #main-menu ul ul li a:hover > .menu-item-has-children:after{
			color: {$portfex_submenu_hover_text_color};
		}
		body .topcontrol {
			background-color: {$portfex_scroll_up_bg_color};
			color: {$portfex_scroll_up_icon_color};
		}	
		
		body .topcontrol:hover,
		body .topcontrol:focus  {
			background-color: {$portfex_scroll_up_bg_hcolor};
			color: {$portfex_scroll_up_text_hcolor};
		}

		body .footer{
			background-color: {$portfex_footer_backgorund_color};
			color: {$portfex_footer_text_color};
		}

		body .footer a{
			color: {$portfex_footer_text_color};
		}
		
		body .fotter-title{
			color: {$portfex_footer_title_color};
		}
		body .footer a:hover,
		body .footer a:focus,
		body .fcontact-info a:hover, 
		body .fcontact-info a:focus,
		body .foot_menu li a:hover,
		body .foot_menu li a:focus{
			color: {$portfex_footer_link_hover_color};
		}

		body .copyright_text{
			color: {$portfex_footer_text_color};
		}
		body .socail-link li a{
			color: {$portfex_footer_social_color};
			border-color: {$portfex_footer_social_color};
		}
		body .socail-link li a:hover,
		body .socail-link li a:focus{
			color: {$portfex_footer_hsocial_color};
			border-color: {$portfex_footer_hsocial_bgcolor};
			background-color: {$portfex_footer_hsocial_bgcolor};
		}
		
		body .post-content h2 a:hover, 
		body .post-content h2 a:focus,
		body .widget a:hover{
			color: {$portfex_primary_theme_color_opt};
		}
		
		body .service{
			background: linear-gradient({$portfex_secondary_theme_color_opt} 0 0) no-repeat;
			background-size: 0%;
		}
		body .single-counter,
		body .wp-block-search__input:focus,
		body .search-control:focus{
			border-color: {$portfex_primary_theme_color_opt};
		}
		body .contact-info .cicon,
		body #submit,
		body .exnumber,
		body .service a,
		body .skillbar .filled,
		body .bpost-meta,
		body .post-pagination a,
		body .post-pagination span{
			background-color: {$portfex_secondary_theme_color_opt};
			color: {$portfex_secondary_theme_textcolor_opt};
		}
		body .ab_btn,
		body .ab_btn:hover,
		body .ab_btn:focus{
			background-color: {$portfex_primary_theme_color_opt};
			border: 1px dashed {$portfex_secondary_theme_color_opt};
			color: {$portfex_primary_theme_textcolor_opt};
		}
		body .ab_btn path{
			fill: {$portfex_primary_theme_textcolor_opt};
		}
		body .single-expert:hover .exnumber,
		body .single-blog:hover .blog_btn,
		body .section-title span::before,
		body .vid-btn,
		body .service:hover a,
		body .post-pagination .next.page-numbers,
		body .post-pagination .page-numbers.current,
		body .comment-reply-link{
			background-color: {$portfex_primary_theme_color_opt};
			color: {$portfex_primary_theme_textcolor_opt};
		}
		body .pricing:hover,
		body .circle_btn,
		body .service:hover{
			border-color: {$portfex_secondary_theme_color_opt};
		}
		body .circle_btn:hover,
		body .circle_btn:focus,
		body .vid-btn:hover,
		body .vid-btn:focus{
			background-color: {$portfex_secondary_theme_color_opt};
			border-color: {$portfex_secondary_theme_color_opt};
		}
		body .service:hover a,
		body .bpost-meta,
		body .bpost-meta span a{
			color: {$portfex_secondary_theme_textcolor_opt};
		}
		body .project-slider .owl-nav button:hover path,
		body .testimonial-slider .owl-nav button svg:hover path{
			fill: {$portfex_primary_theme_color_opt};
		}

		body .form-submit #submit, 
		body .entry-content button, 
		body .entry-content input[type='button'], 
		body .entry-content input[type='reset'], 
		body .entry-content input[type='submit'],
		body .form-submit #submit:hover, 
		body .form-submit #submit:focus, 
		body .entry-content button:hover, 
		body .entry-content input[type='button']:hover, 
		body .entry-content input[type='reset']:hover, 
		body .entry-content input[type='submit']:hover,
		body .wp-block-search__button, 
		body .wp-block-search__button:hover, 
		body .wp-block-search__button:focus,
		body .tagcloud a:hover,
		body .tagcloud a:focus,
		body .search-form button
		{
			background: {$portfex_primary_theme_color_opt};
			border-color: {$portfex_primary_theme_color_opt};
			color: {$portfex_primary_theme_textcolor_opt};
		}
		body .search-form button svg path{
			fill: {$portfex_primary_theme_textcolor_opt};
		}

	";
	
	//Add the above custom CSS via wp_add_inline_style
	wp_add_inline_style( 'portfex-custom-css', $portfex_custom_css ); //Pass the variable into the main style sheet ID
	}
	
  endif;
}

add_action( 'wp_enqueue_scripts', 'portfex_movers_custom_css'  ) ;