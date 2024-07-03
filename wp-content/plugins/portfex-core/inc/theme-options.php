<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "portfex";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'portfex/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */


    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,

         'disable_tracking' => true,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Portfex Options', 'portfex' ),
        'page_title'           => esc_html__( 'Portfex Options', 'portfex' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 3,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    );

 

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( esc_html__( '', 'portfex' ), $v );
    } else {
        $args['intro_text'] = esc_html__( '', 'portfex' );
    }

    // Add content after the form.
    $args['footer_text'] = esc_html__( '', 'portfex' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    // -> START General Setting

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'General Settings', 'portfex' ),
        'id'               => 'portfex-general-setting',
        'customizer_width' => '400px',
        'fields'           => array(

			array(
                'id'       => 'portfex_header_opt',
                'type'     => 'info',
                'style'     => 'success',
                'title'    => esc_html__('Header Section', 'portfex'),
            ), 
			
            array(
                'id'       => 'portfex_header_dis_opt',
                'type'     => 'select',
                'title'    => esc_html__('Dispaly Header ', 'portfex'),
                'subtitle' => esc_html__('Select option here', 'portfex'),
				'options'  => array(
					'1' => 'Show',
					'2' => 'Hide',
				),
				'default'  => '1',
            ),            

            array(
                'id'       => 'portfex_header_btns_option',
                'type'     => 'switch',
                'title'    => esc_html__('Header Buttons Options', 'portfex'),
                'subtitle' => esc_html__('If yes then click the checkbox.', 'portfex'),
                'default'  => '1'// 1 = on | 0 = off
            ), 

			array(
                'id'       => 'portfex_header_btn1_text',
                'type'             => 'text',
                'title'            => esc_html__('Header Button One Text', 'portfex'), 
				'default'  => 'Sign In',
                'subtitle'         => esc_html__('write text here', 'portfex'),
				'required' => array( 'portfex_header_btns_option', '=', '1' ),
            ),
			
			array(
                'id'       => 'portfex_header_btn1_link',
                'type'             => 'text',
                'title'            => esc_html__('Header Button One Link', 'portfex'), 
				'default'  => '#',
                'subtitle'         => esc_html__('enter link here', 'portfex'),
				'required' => array( 'portfex_header_btns_option', '=', '1' ),
            ),
			
			array(
                'id'       => 'portfex_header_btn2_text',
                'type'             => 'text',
                'title'            => esc_html__('Header Button Two Text', 'portfex'), 
				'default'  => 'Sign Up',
                'subtitle'         => esc_html__('write text here', 'portfex'),
				'required' => array( 'portfex_header_btns_option', '=', '1' ),
            ),
			
			array(
                'id'       => 'portfex_header_btn2_link',
                'type'             => 'text',
                'title'            => esc_html__('Header Button Two Link', 'portfex'), 
				'default'  => '#',
                'subtitle'         => esc_html__('enter link here', 'portfex'),
				'required' => array( 'portfex_header_btns_option', '=', '1' ),
            ),
			
            array(
                'id'       => 'portfex_preloader_opt',
                'type'     => 'switch',
                'title'    => esc_html__('Display Preloader', 'portfex'),
                'subtitle' => esc_html__('If yes then click the checkbox.', 'portfex'),
                'default'  => '1'// 1 = on | 0 = off
            ), 	
			
			array(
                'id'       => 'portfex_homepage_opt',
                'type'             => 'checkbox',
                'title'            => esc_html__('Only Enable Home Page', 'portfex'), 
				'default'  => '0',
                'subtitle'         => esc_html__('if check this option preloader only will be enable for home page', 'portfex'),
				'required' => array( 'portfex_preloader_opt', '=', '1' ),
            ),				
			
			array(
                'id'       => 'portfex_scroll_switch',
                'type'     => 'switch',
                'title'    => esc_html__('Scroll Up Option', 'portfex'),
                'subtitle' => esc_html__('Show / hide banner Image', 'portfex'),
                'default'  => '1'// 1 = on | 0 = off
            ),	
        )
    ) );
	
	// -> START Banner Setting
	
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Banner Settings', 'portfex' ),
        'id'               => 'portfex-banner-setting',
        'customizer_width' => '400px',
        'fields'           => array(
		
			array(
				'id'       => 'portfex_blog_banner_text_info',
				'type'     => 'info',
				'title'    => esc_html__('Blog Banner Text Options', 'portfex'), 
				'style'     => 'success',
			),	
			
			array(
				'id'       => 'portfex_blog_subtitle',
				'type'     => 'text',
				'title'    => esc_html__('Blog Page Subtitle', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'transparent'     => false,
				'default'  => 'Latest Posts'
			),		
			
			array(
				'id'       => 'portfex_blog_title',
				'type'     => 'text',
				'title'    => esc_html__('Blog Page Title', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'transparent'     => false,
				'default'  => 'Our Latest News <br> And Blog'
			),				

			array(
				'id'       => 'portfex_archive_page_banner_info',
				'type'     => 'info',
				'title'    => esc_html__('Archive Banner Text Options', 'portfex'), 
				'style'     => 'success',
			),				

			array(
				'id'       => 'portfex_archive_subtitle',
				'type'     => 'text',
				'title'    => esc_html__('Archive Page Subtitle', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'transparent'     => false,
				'default'  => 'Archive'
			),		
			
			array(
				'id'       => 'portfex_search_page_banner_info',
				'type'     => 'info',
				'title'    => esc_html__('Search Banner Text Options', 'portfex'), 
				'style'     => 'success',
			),				

			array(
				'id'       => 'portfex_search_title',
				'type'     => 'text',
				'title'    => esc_html__('Search Page Subtitle', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'transparent'     => false,
				'default'  => 'Search Result'
			),
			
			array(
				'id'       => 'portfex_404_page_banner_info',
				'type'     => 'info',
				'title'    => esc_html__('404 Banner Text Options', 'portfex'), 
				'style'     => 'success',
			),		
			
			array(
				'id'       => 'portfex_404_banner_subtitle',
				'type'     => 'text',
				'title'    => esc_html__('404 Page Subtitle', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'default'  => '404'
			),	
			
			array(
				'id'       => 'portfex_404_banner_title',
				'type'     => 'text',
				'title'    => esc_html__('404 Page Title', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'default'  => 'Page Not Found'
			),				
							
        )
    ) );    
	
	// -> START 404 Page Setting
	
	Redux::setSection( $opt_name, array(
        'title'            => esc_html__( '404 Page Settings', 'portfex' ),
        'id'               => 'portfex-404-page-setting',
        'customizer_width' => '400px',
        'fields'           => array(
	

			array(
				'id'       => 'portfex_404_page_title',
				'type'     => 'textarea',
				'title'    => esc_html__('Page Title', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'transparent'     => false,
				'default'  => 'Oops! That page can’t be found.'
			),	
			
			array(
				'id'       => 'portfex_404_page_descrption',
				'type'     => 'textarea',
				'title'    => esc_html__('Page Description', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'transparent'     => false,
				'default'  => 'It looks like nothing was found at this location. Maybe try one of the links below or a search?'
			),

			array(
				'id'       => 'portfex_404_page_btn_text',
				'type'     => 'text',
				'title'    => esc_html__('Button Text', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'transparent'     => false,
				'default'  => 'Back To Home'
			),

        )
    ) );

	
	// -> START Call To Action
	
	Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Call To Action Settings', 'portfex' ),
        'id'               => 'portfex-call-to-action-setting',
        'customizer_width' => '400px',
        'fields'           => array(

			array(
                'id'       => 'portfex_cta_opt',
                'type'     => 'switch',
                'title'    => esc_html__('CTA Option', 'portfex'),
                'subtitle' => esc_html__('Show / hide banner Image', 'portfex'),
                'default'  => '1'// 1 = on | 0 = off
            ),
			
			array(
				'id'       => 'portfex_cta_img',
				'type'     => 'media',
				'title'    => esc_html__('Background Image', 'portfex'), 
				'subtitle' => esc_html__('upload image here ', 'portfex'),
				'required' => array( 'portfex_cta_opt', '=', '1' ),
			),
			
			array(
				'id'       => 'portfex_cta_title',
				'type'     => 'textarea',
				'title'    => esc_html__('Title', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'default'  => 'Let\'s Start Creating together',
				'required' => array( 'portfex_cta_opt', '=', '1' ),
			),	
			
			array(
				'id'       => 'portfex_cta_btn_text',
				'type'     => 'text',
				'title'    => esc_html__('Button Text', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'default'  => 'Hire Me',
				'required' => array( 'portfex_cta_opt', '=', '1' ),
			),	
			
			array(
				'id'       => 'portfex_cta_btn_link',
				'type'     => 'text',
				'title'    => esc_html__('Button Link', 'portfex'), 
				'subtitle' => esc_html__('enter text here ', 'portfex'),
				'default'  => '#',
				'required' => array( 'portfex_cta_opt', '=', '1' ),
			),

        )
    ) );	

	// -> START Footer Setting
	
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer Settings', 'portfex' ),
        'id'               => 'portfex-foooter-setting',
        'icon'             => 'el el-stop-alt',
        'customizer_width' => '400px',
        'fields'           => array(


			array(
                'id'       => 'portfex_footer_top_opt',
                'type'     => 'switch',
                'title'    => esc_html__('Footer Top Option', 'portfex'),
                'subtitle' => esc_html__('Show / hide banner Image', 'portfex'),
                'default'  => '1'// 1 = on | 0 = off
            ),
			
			array(
                'id'       => 'portfex_copyright_text',
                'type'             => 'editor',
                'title'            => esc_html__('Copyright Text', 'portfex'), 
                'subtitle'         => esc_html__('Write Copright text here.', 'portfex'),
                'default'          => 'Copyright © 2024 Portfx All rights reserved.',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 4
                )
            ),

        )
    ) );


	// -> START Custom Css Setting

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Custom Css Settings', 'portfex' ),
        'id'               => 'portfex-custom-css-setting',
        'customizer_width' => '400px',
        'fields'           => array(
		
			array(
                'id'       => 'portfex_custom_css_opt',
                'type'     => 'switch',
                'title'    => esc_html__('Custom Css Option', 'portfex'),
                'subtitle' => esc_html__('Show / hide banner Image', 'portfex'),
                'default'  => '0'// 1 = on | 0 = off
            ), 
			
			
			array(
				'id'       => 'portfex_primary_theme_color_opt',
				'type'     => 'color',
				'title'    => esc_html__('Primary Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#C9F31D',
			),	

			array(
				'id'       => 'portfex_primary_theme_textcolor_opt',
				'type'     => 'color',
				'title'    => esc_html__('Primary Text Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#222',
			),	
			
			array(
				'id'       => 'portfex_secondary_theme_color_opt',
				'type'     => 'color',
				'title'    => esc_html__('Secondary Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#1C3F39',
			),		
			
			array(
				'id'       => 'portfex_secondary_theme_textcolor_opt',
				'type'     => 'color',
				'title'    => esc_html__('Secondary Text Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#fff',
			),		

			array(
				'id'       => 'portfex_buttons_col_opt',
				'type'     => 'info',
				'style'     => 'success',
				'title'    => esc_html__('Buttons Color', 'portfex'), 
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
			),
			
			array(
				'id'       => 'portfex_border_btn_border_color',
				'type'     => 'color',
				'title'    => esc_html__('Border Button Border Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#1C3F39',
			),		
			
			array(
				'id'       => 'portfex_border_btn_color',
				'type'     => 'color',
				'title'    => esc_html__('Border Button Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#1C3F39',
			),		
			
			array(
				'id'       => 'portfex_border_btn_hbgcolor',
				'type'     => 'color',
				'title'    => esc_html__('Border Button Hover BG Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#C9F31D',
			),	
			
			array(
				'id'       => 'portfex_border_btn_htextcolor',
				'type'     => 'color',
				'title'    => esc_html__('Border Button Hover Text Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#222',
			),		
			
			array(
				'id'       => 'portfex_button_bgcolor',
				'type'     => 'color',
				'title'    => esc_html__('Background Button BG Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#C9F31D',
			),	
			
			array(
				'id'       => 'portfex_button_bg_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Background Button Text Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#222',
			),	
			
			array(
				'id'       => 'portfex_button_hbgcolor',
				'type'     => 'color',
				'title'    => esc_html__('Background Button Hover BG Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#1C3F39',
			),	
			
			array(
				'id'       => 'portfex_button_hbg_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Background Button Hover Text Color', 'portfex'),
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,				
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#fff',
			),	

	
			array(
				'id'       => 'portfex_header_col_opt',
				'type'     => 'info',
				'style'     => 'success',
				'title'    => esc_html__('Header Color', 'portfex'), 
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
			),			
							
		
			array(
				'id'       => 'portfex_menu_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Menu Text Color', 'portfex'), 
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#222'
			),						
			array(
				'id'       => 'portfex_menu_text_hover_color',
				'type'     => 'color',
				'title'    => esc_html__('Menu Text Hover', 'portfex'), 
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#C9F31D'
			),					

			array(
				'id'       => 'portfex_submenu_border_color',
				'type'     => 'color',
				'title'    => esc_html__('Submenu Border Top Color', 'portfex'), 
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#1C3F39'
			),	
			
			array(
				'id'       => 'portfex_submenu_bg_color',
				'type'     => 'color',
				'title'    => esc_html__('Submenu Background Color', 'portfex'), 
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#ffffff'
			),		
			
			array(
				'id'       => 'portfex_submenu_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Submenu Text Color', 'portfex'), 
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#333'
			),		
					
			array(
				'id'       => 'portfex_submenu_hover_bg_color',
				'type'     => 'color',
				'title'    => esc_html__('Submenu Hover Background Color', 'portfex'), 
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#1C3F39'
			),	
			
			array(
				'id'       => 'portfex_submenu_hover_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Submenu Hover text Color', 'portfex'), 
				'subtitle' => esc_html__('Choice color here', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#fff'
			),			

			array(
				'id'       => 'portfex_spinning_col_opt',
				'type'     => 'info',
				'style'     => 'success',
				'title'    => esc_html__('Preloader Color', 'portfex'), 
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
			),	
			
			array(
                'id'       => 'portfex_spinner_bgcolor',
                'type'             => 'color',
                'title'            => esc_html__('Preloader Background Color', 'portfex'), 		
                'subtitle'         => esc_html__('choice color here', 'portfex'),
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'transparent'     => false,
				'default'  => '#1C3F39'
            ),			

			array(
                'id'       => 'portfex_spinner_color',
                'type'             => 'color',
                'title'            => esc_html__('Preloader Color', 'portfex'), 		
                'subtitle'         => esc_html__('choice color here', 'portfex'),
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'transparent'     => false,
				'default'  => '#C9F31D'
            ),	
			
			
			array(
				'id'       => 'portfex_footer_col_opt',
				'type'     => 'info',
				'style'     => 'success',
				'title'    => esc_html__('Footer Color', 'portfex'), 
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
			),
			
			array(
				'id'       => 'portfex_footer_backgorund_color',
				'type'     => 'color',
				'title'    => esc_html__('Footer Backgrund Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default' => '#1B1B1B'
			),				

			array(
				'id'       => 'portfex_footer_title_color',
				'type'     => 'color',
				'title'    => esc_html__('Footer Title Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#fff'
			),	
				
			array(
				'id'       => 'portfex_footer_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Footer Text Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#A49999'
			),	
				
			array(
				'id'       => 'portfex_footer_link_color',
				'type'     => 'color',
				'title'    => esc_html__('Link Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#A49999'
			),				
			
			array(
				'id'       => 'portfex_footer_link_hover_color',
				'type'     => 'color',
				'title'    => esc_html__('Link Hover Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#C9F31D'
			),			

			array(
				'id'       => 'portfex_footer_social_color',
				'type'     => 'color',
				'title'    => esc_html__('Social Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#A49999'
			),
			
			array(
				'id'       => 'portfex_footer_hsocial_bgcolor',
				'type'     => 'color',
				'title'    => esc_html__('Hover Social Background Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#1C3F39'
			),		
			
			array(
				'id'       => 'portfex_footer_hsocial_color',
				'type'     => 'color',
				'title'    => esc_html__('Hover Social Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#fff'
			),
			
			array(
				'id'       => 'portfex_scroll_up_opt',
				'type'     => 'info',
				'style'     => 'success',
				'title'    => esc_html__('Scroll Color', 'portfex'), 
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
			),	
			
			array(
				'id'       => 'portfex_scroll_up_bg_color',
				'type'     => 'color',
				'title'    => esc_html__('Scroll up Background Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#1C3F39'
			),				
			
			array(
				'id'       => 'portfex_scroll_up_icon_color',
				'type'     => 'color',
				'title'    => esc_html__('Scroll up Icon Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#fff'
			),			
			
			array(
				'id'       => 'portfex_scroll_up_bg_hcolor',
				'type'     => 'color',
				'title'    => esc_html__('Scroll up Hover BG Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#C9F31D'
			),				
			
			array(
				'id'       => 'portfex_scroll_up_text_hcolor',
				'type'     => 'color',
				'title'    => esc_html__('Scroll up Hover Text Color', 'portfex'), 
				'subtitle' => esc_html__('Please use color ', 'portfex'),
				'transparent'     => false,
				'required' => array( 'portfex_custom_css_opt', '=', '1' ),
				'default'  => '#222'
			),			
        )
    ) );	
	

    /*
     * <--- END SECTIONS
     */


//Define

include_once(PORTFEXCOREDIR. '/inc/custom_css.php');