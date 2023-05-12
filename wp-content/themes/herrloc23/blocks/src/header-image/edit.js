import {
	useBlockProps,
	InnerBlocks,
	InspectorControls,
	MediaUpload,
	ColorPalette,
	getColorObjectByColorValue,
} from '@wordpress/block-editor';
import {
	Panel,
	PanelBody,
	PanelRow,
	Button,
	RangeControl,
} from '@wordpress/components';
import { useState } from '@wordpress/element';

import './editor.scss';

export default function Edit( props ) {
	const blockProps = useBlockProps();

	const paletteColors = wp.data
		.select( 'core/editor' )
		.getEditorSettings()?.colors;

	const [ color, setColor ] = useState(
		props.attributes.backgroundImageOverlay
	);
	const [ opacity, setOpacity ] = useState(
		props.attributes.backgroundImageOpacity
	);

	return (
		<>
			<InspectorControls key="setting">
				<Panel header="Background">
					<PanelBody initialOpen={ true } title="Image">
						<PanelRow>
							{ props.attributes.backgroundImage ? (
								<img
									src={
										props.attributes.backgroundImage.desktop
									}
									alt=""
								/>
							) : (
								<p>Aucune image sélectionnée</p>
							) }
						</PanelRow>
						<PanelRow>
							<MediaUpload
								type="image"
								onSelect={ ( image ) => {
									props.setAttributes( {
										backgroundImage: {
											desktop: image.sizes.l_large.url,
											tablet: image.sizes.l_medium.url,
											mobile: image.sizes.s_small.url,
										},
									} );
								} }
								render={ ( { open } ) => (
									<Button
										onClick={ open }
										variant="secondary"
									>
										{ props.attributes.backgroundImage
											? 'Choisir une autre image...'
											: 'Choisir une image' }
									</Button>
								) }
							/>
						</PanelRow>
					</PanelBody>
					<PanelBody initialOpen={ false } title="Filtre de couleur">
						<PanelRow>
							<ColorPalette
								value={ color }
								onChange={ ( color ) => {
									setColor( color );
									props.setAttributes( {
										backgroundImageOverlay:
											getColorObjectByColorValue(
												paletteColors,
												color
											).slug,
									} );
								} }
								disableCustomColors={ true }
								clearable={ false }
							/>
						</PanelRow>
						<PanelRow>
							<RangeControl
								label="Opacity"
								value={ opacity }
								onChange={ ( val ) => {
									setOpacity( val );
									props.setAttributes( {
										backgroundImageOpacity: val,
									} );
								} }
								min={ 0 }
								max={ 100 }
								step={ 5 }
							/>
						</PanelRow>
					</PanelBody>
				</Panel>
			</InspectorControls>

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
					/>
				</div>
				<div className="wrapper f-headerImg__content">
					<InnerBlocks
						allowedBlocks={ [ 'core/paragraph', 'core/heading' ] }
						template={ [
							[
								'core/heading',
								{ placeholder: 'Exemple de titre' },
							],
							[
								'core/paragraph',
								{ placeholder: 'Exemple de sous-titre' },
							],
						] }
					/>
				</div>
			</section>
		</>
	);
}
