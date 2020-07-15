/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { Icon } from '@wordpress/components';
import { registerBlockType } from '@wordpress/blocks';

/**
 * Internal dependencies
 */
import Edit from './edit';
// CSS
import './style.scss';

const BlockSVG = (
	<svg height="24" width="24" viewBox="0 0 24 24">
		<path d="M0 0h24v24H0z" fill="none" />
		<path d="M3 15h18v-2H3v2zm0 4h18v-2H3v2zm0-8h18V9H3v2zm0-6v2h18V5H3z" />
	</svg>
);

registerBlockType( 'ryelle/simple-faqs', {
	title: __( 'Simple FAQs', 'ryelle-simple-faqs' ),
	description: __( '', 'ryelle-simple-faqs' ),
	category: 'widgets',
	icon: <Icon icon={ BlockSVG } />,
	supports: {
		html: true,
	},
	edit: Edit,
	save: () => null,
} );
