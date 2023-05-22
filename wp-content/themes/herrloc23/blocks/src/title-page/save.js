import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save( props ) {
	const blockProps = useBlockProps.save();

	return (
	<section
		className={ `wrapper page-title v-hidden ${ blockProps.className }` }
	>
		<InnerBlocks.Content />
	</section>
	);
}
