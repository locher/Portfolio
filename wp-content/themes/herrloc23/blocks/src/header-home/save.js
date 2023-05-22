import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save( props ) {
	const blockProps = useBlockProps.save();

	return (
		<section
			className={ `header-home v-hidden ${ blockProps.className }` }
		>
			<div className="wrapper wrapper--tiny">
				<InnerBlocks.Content />
			</div>
		</section>
	);
}
