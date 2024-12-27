<?php
/**
 * ShopStart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ShopsMax
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shopsmax_widgets_init_shop() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар магазина', 'shopsmax' ),
			'id'            => 'sidebar-shop',
			'description'   => esc_html__( 'Add widgets here.', 'shopsmax' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => ' <div class="title-home-wrapper"><h2 class="title-home"><span>',
			'after_title'   => '<small class="arow-after"></small></span><strong class="title-line"></strong></h2></div>',
		)
	);
}
add_action( 'widgets_init', 'shopsmax_widgets_init_shop' );