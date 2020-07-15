<?php
/**
 * Plugin Name:     Simple FAQs
 * Description:     Example block written with ESNext standard and JSX support – build step required.
 * Version:         0.1.0
 * Author:          ryelle
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     ryelle-simple-faqs
 *
 * @package         ryelle-simple-faqs
 */

/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @throws Error If the build files are not found.
 */
function ryelle_simple_faqs_block_init() {
	$dir = dirname( __FILE__ );

	$script_asset_path = "$dir/build/index.asset.php";
	if ( ! file_exists( $script_asset_path ) ) {
		throw new Error(
			'You need to run `npm start` or `npm run build` for the "Simple FAQs" block first.'
		);
	}

	register_block_type_from_metadata( 'ryelle/simple-faqs', $dir );
}
add_action( 'init', 'ryelle_simple_faqs_block_init' );
