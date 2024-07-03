<?php
/*

Plugin Name: Portfex Core

Plugin URI: http://getmasum.com

Description: After install the portfex WordPress Theme, you must need to install this Plugin then will get all Features of portfex WP Theme.

Author: Masum Billah

Author URI: http://www.getmasum.com

Version: 1.0

Text Domain: portfex-core

*/


//define

define( 'PORTFEXCOREDIR', dirname( __FILE__ ) ); 

// Add main files

include_once(PORTFEXCOREDIR. '/inc/elementor-active.php');
include_once(PORTFEXCOREDIR. '/inc/custom_posts.php');
include_once(PORTFEXCOREDIR. '/inc/theme-options.php');
include_once(PORTFEXCOREDIR. '/inc/metabox.php');
include_once(PORTFEXCOREDIR. '/inc/demo_install.php');
include_once(PORTFEXCOREDIR. '/inc/widgets/footer-contact-info.php');
include_once(PORTFEXCOREDIR. '/inc/widgets/social-link.php');
include_once(PORTFEXCOREDIR. '/inc/widgets/about-me.php');


//Add Elementor Category
function portfex_add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'portfex-category',
		[
			'title' => esc_html__( 'Portfex', 'portfex' ),
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'portfex_add_elementor_widget_categories' );

