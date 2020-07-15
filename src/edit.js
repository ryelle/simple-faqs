/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';

/**
 * Internal dependencies
 */
// CSS
import './style.scss';

export default function Edit( { attributes, className, setAttributes } ) {
	return (
		<p className={ className }>
			{ __( 'Simple Faqs – hello from the editor!', 'ryelle-simple-faqs' ) }
		</p>
	);
}
