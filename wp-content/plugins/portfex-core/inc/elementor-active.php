<?php

/**
 * Elementor Active
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Main Portfex_Elementor_Active_Extension Class
 *
 * The main class that initiates and runs the plugin.
 *
 * @since 1.0.0
 */
final class Portfex_Elementor_Active_Extension {

	/**
	 * Plugin Version
	 *
	 * @since 1.0.0
	 *
	 * @var string The plugin version.
	 */
	const VERSION = '1.0.0';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const MINIMUM_PHP_VERSION = '5.6';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var Portfex_Elementor_Active_Extension The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return Portfex_Elementor_Active_Extension An instance of the class.
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {


		add_action( 'plugins_loaded', [ $this, 'init' ] );

	}



	/**
	 * Initialize the plugin
	 *
	 * Load the plugin only after Elementor (and other plugins) are loaded.
	 * Checks for basic plugin requirements, if one check fail don't continue,
	 * if all check have passed load the files required to run the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}

		// Add Plugin actions
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'portfex' ),
			'<strong>' . esc_html__( 'Portfex Plugin', 'portfex' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'portfex' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'portfex' ),
			'<strong>' . esc_html__( 'Portfex Plugin', 'portfex' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'portfex' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'portfex' ),
			'<strong>' . esc_html__( 'Portfex Plugin', 'portfex' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'portfex' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Init Widgets
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init_widgets() {

		// Include Widget files

		require_once( __DIR__ . '/elementor/title.php' );
		require_once( __DIR__ . '/elementor/buttons.php' );
		require_once( __DIR__ . '/elementor/banner.php' );
		require_once( __DIR__ . '/elementor/counter-up.php' );
		require_once( __DIR__ . '/elementor/about-img.php' );
		require_once( __DIR__ . '/elementor/skills.php' );
		require_once( __DIR__ . '/elementor/resume.php' );
		require_once( __DIR__ . '/elementor/service.php' );
		require_once( __DIR__ . '/elementor/portfolio.php' );
		require_once( __DIR__ . '/elementor/testimonial.php' );
		require_once( __DIR__ . '/elementor/partners.php' );
		require_once( __DIR__ . '/elementor/video.php' );
		require_once( __DIR__ . '/elementor/pricing.php' );
		require_once( __DIR__ . '/elementor/call-to-action.php' );
		require_once( __DIR__ . '/elementor/blog.php' );
		require_once( __DIR__ . '/elementor/portfolio-img.php' );
		require_once( __DIR__ . '/elementor/contact-info.php' );
		require_once( __DIR__ . '/elementor/contact-form.php' );


		// Register widget

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexTitleWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexButtonsWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexBannerWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexCounterUpWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexAboutImgWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexSkillsWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexResumeWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexServiceWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexPortfolioWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexTestimonialWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexPartnersWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexVideoWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexPricingWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexCallToActionWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexBlogWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexPortfolioImgWidget() );	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexContactInfoWidget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \PortfexContactFormWidget() );
	
	}



}

Portfex_Elementor_Active_Extension::instance();