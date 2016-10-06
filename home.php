<?php

/**
 * Insights page template
 *
 * @package     KnowTheCode\Insights
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://UpTechLabs.io
 * @license     GNU General Public License 2.0+ and MIT Licence (MIT)
 */
namespace UpTechLabs\WPDC\Insights;

do_action( 'fulcrum_grid' );

add_action( 'genesis_before_while', __NAMESPACE__ .  '\add_in_blog_page_contents' );
/**
 * Hey let's add in the Page Title and stuff that we put into the editor for
 * this page.
 *
 * @since 1.0.0
 *
 * @return void
 */
function add_in_blog_page_contents() {
	$blog_page = get_post( get_option( 'page_for_posts' ) );

	if ( ! $blog_page ) {
		return;
	}

	$content = wp_kses_post( $blog_page->post_content );
	$content = do_shortcode( $content );

	include( CHILD_THEME_DIR . '/lib/views/home-page-header.php' );
}

genesis();
