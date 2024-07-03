<?php


add_action( 'cmb2_init', 'portfex_metabox_options' );

function portfex_metabox_options(){
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_portfex_';

	// Page Options	
	$cmb2_post_page_opt = new_cmb2_box( array(
		'id'           => $prefix . 'page_option',
		'title'        => esc_html__( 'Options', 'portfex' ),
		'object_types' => array(  'page' , 'post', 'work'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );
	

	$cmb2_post_page_opt->add_field( array(
	    'name'             => esc_html__('Hide Banner ' , 'portfex'),
	    'id'               => $prefix .'hide_banner',
		'desc'    => esc_html__('Check/Uncheck here' , 'portfex'),
	    'type'    => 'checkbox',
	) );
	


	$cmb2_post_page_opt->add_field( array(
	    'id'               => $prefix .'banner_subtitle',
		'name'             => esc_html__('Banner Subtitle' , 'portfex'),
	    'desc'             => esc_html__( 'enter text here ','portfex' ),
		 'type'             => 'text',
	) );	
	
	$cmb2_post_page_opt->add_field( array(
	    'id'               => $prefix .'banner_subtitle',
		'name'             => esc_html__('Banner Subtitle' , 'portfex'),
	    'desc'             => esc_html__( 'enter text here ','portfex' ),
		 'type'             => 'text',
	) );	
	
	$cmb2_post_page_opt->add_field( array(
	    'id'               => $prefix .'banner_title',
		'name'             => esc_html__('Banner Title' , 'portfex'),
	    'desc'             => esc_html__( 'enter text here ','portfex' ),
		'type'             => 'textarea_code',
	) );		

	$cmb2_post_page_opt->add_field( array(
	    'name'             => esc_html__('Footer Extra Padding ' , 'portfex'),
	    'id'               => $prefix .'fot_extra_padding',
		'desc'    => esc_html__('Check/Uncheck here' , 'portfex'),
	    'type'    => 'checkbox',
	) );
	
	if (class_exists('RevSlider')) {
		global $wpdb;
		$rs_table_name = $wpdb->prefix . "revslider_sliders";
		$rs = $wpdb->get_results( "SELECT id, title, alias FROM $rs_table_name ORDER BY id ASC LIMIT 999" );
		$revsliders = array();
		if ($rs) {
			foreach ( $rs as $slider ) {
				$revsliders[$slider->alias] = $slider->alias;
			}
		} else {
			$revsliders["No sliders found"] = 'No Alias found';
		}
		$cmb2_post_page_opt->add_field( array(
		    'name'             =>  esc_html__('Rev Slider Alias','portfex' ), 
		    'id'               => $prefix.'rev_slider_alias',
		    'type'             => 'select',
		    'options'          => $revsliders,
		    'default'          => '',
		    'desc'         	   => esc_html__( 'Select any One, Which One You want to display','portfex' ),
			'show_option_none' => true,
		) );
		
	
	}
	//Post Options	
	$cmb2_post_options = new_cmb2_box( array(
		'id'           => $prefix . 'posts_option',
		'title'        => esc_html__( 'Post Options', 'portfex' ),
		'object_types' => array( 'post'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );	
	
	
	$cmb2_post_options->add_field( array(
	    'name'             => esc_html__('Audio / Video Post Embed Code ' , 'portfex'),
	    'id'               => $prefix .'vid_post_title',
	    'type'    => 'title',
	) );		
	
	$cmb2_post_options->add_field( array(
	    'name'             => esc_html__('Embed Code' , 'portfex'),
	    'id'               => $prefix .'embed_code',
		'desc'    => esc_html__('enter embed code here' , 'portfex'),
	    'type'    => 'textarea_code',
	) );

	
	//Start Clients Options
	
	$portfex_clients = new_cmb2_box( array(
		'id'           => $prefix . 'clients_options',
		'title'        => esc_html__( 'Clients Info', 'portfex' ),
		'object_types' => array( 'client'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );
	
	$portfex_clients->add_field( array(
	    'name'             => esc_html__('Website Address' , 'portfex'),
	    'id'               => $prefix .'client_url',
		'type'             => 'text',
		'default'             => '#',
	) );	
	

	//Start Testimonials Options
	$portfex_testimonial = new_cmb2_box( array(
		'id'           => $prefix . 'testimonials_options',
		'title'        => esc_html__( 'Testimonials Info', 'portfex' ),
		'object_types' => array( 'testimonials'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );
	
	$portfex_testimonial->add_field( array(
	    'name'             => esc_html__('Rating Text' , 'portfex'),
	    'id'               => $prefix .'test_rating_text',
		'desc'    => esc_html__('wirte text here' , 'portfex'),
	    'type'    => 'text',
		'default'    => 'Average  5.0 rating',		
	) );		
	
	$portfex_testimonial->add_field( array(
	    'name'             => esc_html__('Rating' , 'portfex'),
	    'id'               => $prefix .'test_rating_opt',
		'desc'    => esc_html__('select rating here' , 'portfex'),
	    'type'             => 'select',
		'options'          => array(
			'1' => esc_html__( '1', 'portfex' ),
			'2' => esc_html__( '2', 'portfex' ),
			'3' => esc_html__( '3', 'portfex' ),
			'4' => esc_html__( '4', 'portfex' ),
			'5' => esc_html__( '5', 'portfex' ),
		),	
	) );	
	
	$portfex_testimonial->add_field( array(
	    'name'             => esc_html__('Designation' , 'portfex'),
	    'id'               => $prefix .'test_designation',
		'desc'    => esc_html__('wirte text here' , 'portfex'),
	    'type'    => 'text',
		'default'    => 'CEO - ABC Inc',
				
	) );	
	
	//Work Options	
	$portfex_work_options = new_cmb2_box( array(
		'id'           => $prefix . 'work_option',
		'title'        => esc_html__( 'Work Options', 'portfex' ),
		'object_types' => array( 'work'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );	
	
	$portfex_work_options->add_field( array(
	    'name'             => esc_html__('Date Label' , 'portfex'),
	    'id'               => $prefix .'date_label',
		'desc'    => esc_html__('wirte text here' , 'portfex'),
	    'type'    => 'text',
		'default'    => 'Date '
				
	) );
	
	$portfex_work_options->add_field( array(
	    'name'             => esc_html__('Date' , 'portfex'),
	    'id'               => $prefix .'date_opt',
		'desc'    => esc_html__('wirte text here' , 'portfex'),
	    'type'    => 'text',
		'default'    => '29 January 2024'
				
	) );	
	
	$portfex_work_options->add_field( array(
	    'name'             => esc_html__('Client Label' , 'portfex'),
	    'id'               => $prefix .'client_label',
		'desc'    => esc_html__('wirte text here' , 'portfex'),
	    'type'    => 'text',
		'default'    => 'Client'
				
	) );
	
	$portfex_work_options->add_field( array(
	    'name'             => esc_html__('Client Name' , 'portfex'),
	    'id'               => $prefix .'date_name',
		'desc'    => esc_html__('wirte text here' , 'portfex'),
	    'type'    => 'text',
		'default'    => 'Osman Gani'
				
	) );	

	$portfex_work_options->add_field( array(
	    'name'             => esc_html__('Category Label' , 'portfex'),
	    'id'               => $prefix .'category_label',
		'desc'    => esc_html__('wirte text here' , 'portfex'),
	    'type'    => 'text',
		'default'    => 'Category'		
	) );

	
	// Team Option
	$cmb2_team = new_cmb2_box( array(
		'id'           => $prefix . 'team_options',
		'title'        => esc_html__( 'Team Info', 'portfex' ),
		'object_types' => array( 'team'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_team->add_field( array(
	    'name'             => esc_html__('Designation' , 'portfex'),
	    'id'               => $prefix .'team_designation',
	    'desc'             => esc_html__( 'eneter Designation here','portfex' ),
		'type'             => 'text',
		'default'    => 'Chairman of portfex',
	) );
	
	$team_group_field_id = $cmb2_team->add_field( array(
		'id'          => $prefix .'team_group_field_opt',
		'type'        => 'group',
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => esc_html__( 'Social  {#}', 'portfex' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add New Social', 'portfex' ),
			'remove_button' => esc_html__( 'Remove Social', 'portfex' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_team->add_group_field( $team_group_field_id, array(
		'name' => esc_html__('Social Icon' , 'portfex'),
		'id'   => $prefix .'team_social_icon',
		'type' => 'text',
		'default' => 'ti-facebook ',
		'description' => esc_html__('write icon here' , 'portfex'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_team->add_group_field( $team_group_field_id, array(
		'name'             => esc_html__('Social Link' , 'portfex'),
		'id'               => $prefix .'team_social_link',
		'type' => 'text',
		'default' => '#',
		'desc'             => esc_html__( 'enter url here','portfex' ),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	
	
	$cmb2_pricing = new_cmb2_box( array(
		'id'           => $prefix . 'pric_options',
		'title'        => esc_html__( 'Pricing Info', 'portfex' ),
		'object_types' => array( 'pricing'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );
	

	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Feature' , 'portfex'),
		'id'               => $prefix .'pri_feature',
		'desc'             => esc_html__( 'check/uncheck option here','portfex' ),
		'type'             => 'checkbox',
		'default'    => '0',
	) );
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Currency' , 'portfex'),
		'id'               => $prefix .'pri_currency',
		'desc'             => esc_html__( 'write text here','portfex' ),
		'type'             => 'text',
		'default'    => '$',
	) );		
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Amount' , 'portfex'),
		'id'               => $prefix .'pri_amount',
		'desc'             => esc_html__( 'write text here','portfex' ),
		'type'             => 'text',
		'default'    => '90',
	) );	
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Amount Cent' , 'portfex'),
		'id'               => $prefix .'pri_amount_cent',
		'desc'             => esc_html__( 'write text here','portfex' ),
		'type'             => 'text',
		'default'    => '20',
	) );	
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Period' , 'portfex'),
		'id'               => $prefix .'pri_period',
		'desc'             => esc_html__( 'write text here','portfex' ),
		'type'             => 'text',
		'default'    => ' month ',
	) );	
	
	$pricing_group_field_id = $cmb2_pricing->add_field( array(
		'id'          => $prefix .'pricing_group_field_opt',
		'type'        => 'group',
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => esc_html__( 'Feature {#}', 'portfex' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add New Feature', 'portfex' ),
			'remove_button' => esc_html__( 'Remove Feature', 'portfex' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_pricing->add_group_field( $pricing_group_field_id, array(
		'name' => esc_html__('Single Feature' , 'portfex'),
		'id'   => $prefix .'single_feature',
		'type' => 'text',
		'default' => '25 website',
		'description' => esc_html__('write text here' , 'portfex'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );	
	
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Button Text' , 'portfex'),
		'id'               => $prefix .'pricing_btn_text',
		'desc'             => esc_html__( 'write text here','portfex' ),
		'type'             => 'text',
		'default'    => 'Select plan',
	) );		
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Button Link' , 'portfex'),
		'id'               => $prefix .'pricing_btn_link',
		'desc'             => esc_html__( 'write text here','portfex' ),
		'type'             => 'text',
		'default'    => '#',
	) );	
		
}