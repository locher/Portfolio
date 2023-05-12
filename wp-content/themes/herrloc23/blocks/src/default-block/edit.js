import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { Panel, PanelBody, PanelRow } from '@wordpress/components';

import './editor.scss';

export default function Edit( props ) {
	const blockProps = useBlockProps();

	return (
		<>
			<InspectorControls key="setting">
				<Panel header="Default Header">
					<PanelBody initialOpen={ true } title="Title">
						<PanelRow>
							<p>Panel Row</p>
						</PanelRow>
					</PanelBody>
				</Panel>
			</InspectorControls>

			<section
				{ ...blockProps }
				className={ `${ blockProps.className }` }
			></section>
		</>
	);
}
