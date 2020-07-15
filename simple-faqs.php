<?php


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
