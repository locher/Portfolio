import { useBlockProps } from '@wordpress/block-editor';

export default function save( props ) {
	const blockProps = useBlockProps.save();

	return (
		<div
			className={ `btn ${ blockProps.className } ${props.attributes.hasBorder ? 'btn--border' : ''}` }
		>
			<a href={ props.attributes.link }>
				{ props.attributes.content }
			</a>
		</div>
	);
}
