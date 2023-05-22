import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save( props ) {
	const blockProps = useBlockProps.save();

	return (
		<div
			{ ...blockProps }
			className={ `${ blockProps.className } wrapper ${props.attributes.isTiny ? 'wrapper--tiny' : '' }` }
		>
			<InnerBlocks.Content />
		</div>
	);
}
