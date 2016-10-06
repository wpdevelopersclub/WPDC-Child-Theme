<?php
/**
 * Partners Page
 *
 * @package     UpTechLabs\WPDC\Partners
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://UpTechLabs.io
 * @license     GNU General Public License 2.0+
 */
namespace UpTechLabs\WPDC\Partners;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_page_assets' );
/**
 * Enqueue the specific assets for this template, as there's no load it on every
 * single page.
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_page_assets() {
	wp_enqueue_style( 'wpdc_front_page_css', CHILD_URL . '/assets/dist/css/partners.min.css', array(), '1.0.0' );
}

genesis();
