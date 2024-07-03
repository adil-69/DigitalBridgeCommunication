<?php
/**
 * Portfex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Portfex
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function portfex_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Portfex, use a find and replace
		* to change 'portfex' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'portfex', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'portfex_portfolio', 600,680, true );
	add_image_size( 'portfex_testimonial', 100,100, true );
	add_image_size( 'portfex_blog_simage', 170,170, true );
	add_image_size( 'portfex_blog_img', 800,400, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
		
			'menu-1' => esc_html__( 'Header', 'portfex' ),
			'menu-2' => esc_html__( 'Footer', 'portfex' ),
			
		)
	);

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );
	
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
	
	// Add support for responsive-embeds.
	add_theme_support( "responsive-embeds" );
	
	// Add support for align-wide.
	add_theme_support( "align-wide" );
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'portfex_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'portfex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'portfex_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfex_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'portfex' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'portfex' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s wow fadeIn">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);	
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'portfex' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'portfex' ),
			'before_widget' => '<section class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeIn"><div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div></section>',
			'before_title'  => '<h4 class="fotter-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'portfex_widgets_init' );

// add_editor_style
add_editor_style( 'editor-style.css' );

// Main_menu
function portfex_main_menu() {
		wp_nav_menu( array(
		'theme_location'    => 'menu-1',
		'depth'             => 5,
		'container'         => false,
		'menu_class'        => ' ',
		'fallback_cb'       => 'portfex_navwalker::fallback',
		
		)
	); 	
}

function portfex_mobile_menu() {
		wp_nav_menu( array(
		'theme_location'    => 'menu-1',
		'depth'             => 5,
		'container'         => false,
		'menu_class'        => 'mobile_menu',
		'fallback_cb'       => 'portfex_navwalker::fallback',
		
		)
	); 	
}

function portfex_footer_menu() {
		wp_nav_menu( array(
		'theme_location'    => 'menu-2',
		'depth'             => 5,
		'container'         => false,
		'menu_class'        => ' ',
		'fallback_cb'       => 'portfex_navwalker::fallback',
		
		)
	); 	
}


	
/**
 * Enqueue scripts and styles.
 */
function portfex_scripts() {

	global $portfex;

	$portfex_scroll_switch					 = '';

	if ( isset( $portfex['portfex_scroll_switch'] ) ) {
		$portfex_scroll_switch = $portfex['portfex_scroll_switch'];
	}
	
	// Add CSS Files
	wp_enqueue_style('Rajdhani-Font' , '//fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap');
	wp_enqueue_style('Rubik-Font' , '//fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&display=swap');
	wp_enqueue_style('bootstrap' , get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap' , get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('themify-icons' , get_template_directory_uri(). '/assets/fonts/themify-icons.css');
	wp_enqueue_style('boxicons' , '//unpkg.com/boxicons@2.1.4/css/boxicons.min.css');
	wp_enqueue_style('line-awesome' , get_template_directory_uri(). '/assets/css/line-awesome.css');
	wp_enqueue_style('fontawesome' , get_template_directory_uri(). '/assets/fonts/fontawesome/fontawesome.css');
	wp_enqueue_style('owl-carousel' , get_template_directory_uri(). '/assets/owlcarousel/css/owl.carousel.min.css');
	wp_enqueue_style('owl-theme' , get_template_directory_uri(). '/assets/owlcarousel/css/owl.theme.default.min.css');
	wp_enqueue_style('jquery-simple-mobilemenu' , get_template_directory_uri(). '/assets/css/jquery-simple-mobilemenu.css');
	wp_enqueue_style('magnific-popup' , get_template_directory_uri(). '/assets/css/magnific-popup.css');
	wp_enqueue_style('animate' , get_template_directory_uri(). '/assets/css/animate.css');
	wp_enqueue_style('YouTubePopUp' , get_template_directory_uri(). '/assets/css/YouTubePopUp.css');
	wp_enqueue_style('slick' , get_template_directory_uri(). '/assets/css/slick.css');
	wp_enqueue_style('slick-theme' , get_template_directory_uri(). '/assets/css/slick-theme.css');
	wp_enqueue_style('portfex-main-style' , get_template_directory_uri(). '/assets/css/style.css');			
	wp_enqueue_style( 'portfex-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'portfex-style', 'rtl', 'replace' );

	
	// Load JS Files
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'imagesloaded', array('jquery'), '9865', true );
	wp_enqueue_script( 'masonry', array('jquery'), '9865', true );
	wp_enqueue_script( 'jquery-simple-mobilemenu', get_template_directory_uri() . '/assets/js/jquery-simple-mobilemenu.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'YouTubePopUp', get_template_directory_uri() . '/assets/js/YouTubePopUp.jquery.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'yvpopup-active', get_template_directory_uri() . '/assets/js/yvpopup-active.js', array('jquery'), '9865', true );
	if($portfex_scroll_switch == true) :
	wp_enqueue_script( 'scrolltopcontrol', get_template_directory_uri() . '/assets/js/scrolltopcontrol.js', array('jquery'), '9865', true );
	endif;
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), '9865', true );
	wp_enqueue_script( 'portfex-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '9865', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfex_scripts' );

// portfex wp kses
function portfex_wp_kses($val){
	return wp_kses($val, array(
	
	'p' => array(),
	'span' => array('class' => array(),'id' => array()),
	'div' => array(),
	'strong' => array(),
	'em' => array(),
	'u' => array(),	
	'b' => array(),
	'br' => array(),
	'h1' => array(),
	'h2' => array(),
	'h3' => array(),
	'h4' => array(),
	'h5' => array(),
	'h6' => array(),
	'i'=> array('class' => array(),'id' => array()),
	'div'=> array('class' => array(),'id' => array()),
	'ul'=> array('class' => array(),'id' => array()),
	'li'=> array('class' => array(),'id' => array()),
	'a'=> array('href' => array(),'target' => array()),
	'iframe'=> array('src' => array(),'height' => array(),'width' => array()),
	
	), '');
}

// modify search widget
function portfex_my_search_form( $form ) {
	$form = '
		<div class="search_form">
			<form method="get" class="search-form" action="' . esc_url(home_url( '/' )) . '" >
				<input type="text" value="' . esc_attr(get_search_query()) . '" name="s" id="s" class="search-control" placeholder="' . esc_attr__('Write text and search' , 'portfex') .'">
				<button type="submit" class="search-btn"><svg fill="none" viewBox="0 0 14 6"><path fill="#222" fill-rule="evenodd" d="M13.62 2.886v.233a524.78 524.78 0 01-3.22 2.828c-.288.117-.465.04-.531-.233.015-.042.029-.085.04-.128l2.62-2.293L.213 3.27A.408.408 0 010 3.12v-.233c.05-.07.12-.12.213-.151l12.29-.023c-.847-.764-1.702-1.52-2.568-2.27-.124-.24-.04-.387.253-.442a.619.619 0 01.186.035c1.088.948 2.17 1.898 3.245 2.851z" clip-rule="evenodd" opacity=".967"/></svg></button>					
			</form>
		</div>
        ';
	return $form;
}
add_filter( 'get_search_form', 'portfex_my_search_form' );


// comment list modify

function portfex_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>


<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	<div class="single-comment">
		<div class="float-start com-img">
			<div class="comment_img">
				<?php echo get_avatar( $comment, 100 ); ?>
				<p class="creplay">
					<?php comment_reply_link( array_merge($args, array(
						'reply_text' => '<i class="bx bx-reply"></i>',
						'depth'      => $depth,
						'max_depth'  => $args['max_depth']
						)
					)); ?>	
				</p>
			</div>
			<h4><?php comment_author_link() ?></h4>
			<span class="cdate"><?php echo esc_html(get_comment_date('F j, Y')); ?></span>			
			
		</div>
		<div class="com-content">
			<?php if ($comment->comment_approved == '0') : ?>
			<p><em><?php esc_html_e('Your comment is awaiting moderation.','portfex'); ?></em></p>
			<?php endif; ?>
			<?php comment_text(); ?>
		</div>
	</div>				
</li>


<?php } 

// comment box title change
add_filter( 'comment_form_defaults', 'portfex_remove_comment_form_allowed_tags' );
function portfex_remove_comment_form_allowed_tags( $defaults ) {

	$defaults['comment_notes_after'] = '';
	$defaults['comment_notes_before'] = '';
	return $defaults;

}

function portfex_comment_reform ($arg) {

$arg['title_reply'] = esc_html__('Comment','portfex');
$arg['comment_field'] = '<p><textarea id="comment" class="comment_field form-control" name="comment" cols="30" rows="6" placeholder="'. esc_attr__("Comment", "portfex").'" aria-required="true"></textarea></p>';


return $arg;

}
add_filter('comment_form_defaults','portfex_comment_reform');

// comment form modify

function portfex_modify_comment_form_fields($fields){
	$commenter = wp_get_current_commenter();
	$req	   = get_option( 'require_name_email' );

	$fields['author'] = '<p><input type="text" name="author" id="author" value="'. esc_attr( $commenter['comment_author'] ) .'" placeholder="'. esc_attr__("Your Name *", "portfex").'" size="22" tabindex="1"'. ( $req ? 'aria-required="true"' : '' ).' class="input-name form-control" /></p>';

	$fields['email'] = '<p><input type="text" name="email" id="email" value="'. esc_attr( $commenter['comment_author_email'] ) .'" placeholder="'.esc_attr__("Your Email *", "portfex").'" size="22" tabindex="2"'. ( $req ? 'aria-required="true"' : '' ).' class="input-email form-control"  /></p>';
	
	$fields['url'] = '<p><input type="text" name="url" id="url" value="'. esc_attr( $commenter['comment_author_url'] ) .'" placeholder="'. esc_attr__("Website", "portfex").'" size="22" tabindex="2"'. ( $req ? 'aria-required="false"' : '' ).' class="input-url form-control"  /></p>';

	return $fields;
}
add_filter('comment_form_default_fields','portfex_modify_comment_form_fields');

// Move Comment Field
function portfex_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields', 'portfex_move_comment_field_to_bottom' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * portfex-functions
 */
require get_template_directory() . '/inc/portfex-functions.php';

/**
 * navwalker
 */
require get_template_directory() . '/inc/navwalker.php';

/**
 * class-tgm-plugin-activation
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * required-plugin
 */
require get_template_directory() . '/inc/required-plugin.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

