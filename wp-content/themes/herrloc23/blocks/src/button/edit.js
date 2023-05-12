import {
	useBlockProps,
	RichText,
	BlockControls,
	__experimentalLinkControl as LinkControl,
	InspectorControls
} from '@wordpress/block-editor';
import {Toolbar, ToolbarButton, Popover, ToggleControl, Panel, PanelRow, PanelBody} from '@wordpress/components';
import { useState } from '@wordpress/element';
import { link, linkOff } from '@wordpress/icons';
import './editor.scss';

export default function Edit( props ) {
	const blockProps = useBlockProps();
	const [ isEditingURL, setIsEditingURL ] = useState( false );
	const [ hasBorder, setHasBorder ] = useState( props.attributes.hasBorder );

	return (
		<>
			<InspectorControls key="setting">
				<Panel header="Style">
					<PanelBody initialOpen={ true } title="Bordure">
						<PanelRow>
							<ToggleControl
								label="Ajouter bordure"
								help={
									hasBorder
										? 'A une bordure.'
										: 'N\'a pas de bordure.'
								}
								checked={ hasBorder }
								onChange={ () => {
									setHasBorder( ( state ) => ! state );
									props.setAttributes({hasBorder: !hasBorder})
								}}
								/>
						</PanelRow>
					</PanelBody>
				</Panel>
			</InspectorControls>

			<BlockControls>
				<Toolbar>
					<ToolbarButton
						name="link"
						icon={ props.attributes.link ? linkOff : link }
						title={ 'Link' }
						onClick={ () => {
							setIsEditingURL( ! isEditingURL );
						} }
					/>
				</Toolbar>
			</BlockControls>

			{ isEditingURL ? (
				<Popover placement="bottom">
					<LinkControl
						className="wp-block-navigation-link__inline-link-input"
						value={ { url: props.attributes.link } }
						onChange={ ( e ) => {
							props.setAttributes( { link: e.url } );
						} }
					/>
				</Popover>
			) : false }

			<div
				className={ `btn ${ blockProps.className } ${props.attributes.hasBorder ? 'btn--border' : ''}` }
				{ ...blockProps }
			>
				<a>
					<RichText
						tagName="span"
						value={ props.attributes.content }
						allowedFormats={ [ 'core/bold', 'core/italic' ] }
						onChange={ ( content ) =>
							props.setAttributes( { content } )
						}
						placeholder={ 'Ajouter un lien' }
					/>
				</a>
			</div>
		</>
	);
}
