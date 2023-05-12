import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save( props ) {
	const blockProps = useBlockProps.save();

	return <section { ...blockProps }></section>;
}
