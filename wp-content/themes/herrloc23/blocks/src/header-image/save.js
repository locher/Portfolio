import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save( props ) {
	const blockProps = useBlockProps.save();

	return (
		<section
			className={ `f-headerImg f-headerImg--${ props.attributes.backgroundImageOverlay } ${ blockProps.className }` }
		>
			<div
				className={ `f-headerImg__bg` }
				style={ {
					opacity: props.attributes.backgroundImageOpacity / 100,
				} }
			>
				<img
					src={ props.attributes.backgroundImage?.desktop }
					alt=""
					srcSet={ `${ props.attributes.backgroundImage?.desktop } 1920w, ${ props.attributes.backgroundImage?.tablet } 960w, ${ props.attributes.backgroundImage?.mobile } 480w` }
				/>
			</div>
			<div className="wrapper f-headerImg__content">
				<InnerBlocks.Content />
			</div>
		</section>
	);
}
