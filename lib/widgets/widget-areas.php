<?php

/**
 * Sidebars and widgets functionality
 *
 * @package     KnowTheCode\Insights
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://UpTechLabs.io
 * @license     GNU General Public License 2.0+ and MIT Licence (MIT)
 */
namespace UpTechLabs\WPDC\Widgets;

add_action( 'genesis_setup', __NAMESPACE__ . '\setup', 15 );
/**
 * Setup the sidebars/widget areas.
 *
 * @since 1.0.0
 *
 * @return void
 */
function setup() {
	unregister_sidebar( 'sidebar-alt' );
	add_filter( 'widget_text', 'do_shortcode' );

	register_widget_areas();
}

/**
 * Register the widget areas enabled by default in Utility.
 *
 * @since  1.0.0
 *
 * @return void
 */
function register_widget_areas() {

	$widget_areas = array(
		array(
			'id'          => 'blog',
			'name'        => __( 'Insights', 'wpdc' ),
			'description' => __( 'This is the Insights section which appears on the Insights page.', 'wpdc' ),
		),
		array(
			'id'          => 'pre_footer',
			'name'        => __( 'Pre-Footer', 'wpdc' ),
			'description' => __( 'This is the Pre-Footer section, just before the footer widgets.', 'wpdc' ),
		),
		array(
			'id'          => 'disclaimer',
			'name'        => __( 'Disclaimer', 'wpdc' ),
			'description' => __( 'This is the Disclaimer section on very bottom of the site.', 'wpdc' ),
		),
	);

	foreach ( $widget_areas as $widget_area ) {
		genesis_register_sidebar( $widget_area );
	}
}
