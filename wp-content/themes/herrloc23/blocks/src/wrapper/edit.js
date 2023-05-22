import {useBlockProps, InnerBlocks, InspectorControls} from '@wordpress/block-editor';

import './editor.scss';
import {Panel, PanelBody, PanelRow, ToggleControl} from "@wordpress/components";
import {useState} from "@wordpress/element";

export default function Edit( props ) {
	const blockProps = useBlockProps();
	const [ isTiny, setIsTiny ] = useState( props.attributes.isTiny );

	return (
		<>
			<InspectorControls key="tiny">
				<Panel header="Style">
					<PanelBody initialOpen={ true } title="Taille">
						<PanelRow>
							<ToggleControl
								label="Wrapper Tiny"
								help={
									isTiny
										? 'Taille Tiny'
										: 'Taille normale'
								}
								checked={ isTiny }
								onChange={ () => {
									setIsTiny( ( state ) => ! state );
									props.setAttributes({isTiny: !isTiny})
								}}
							/>
						</PanelRow>
					</PanelBody>
				</Panel>
			</InspectorControls>

			<div
				{ ...blockProps }
				className={ `${ blockProps.className } wrapper ${props.attributes.isTiny ? 'wrapper--tiny' : '' }` }
			>
				<InnerBlocks />
			</div>

		</>
	);
}
