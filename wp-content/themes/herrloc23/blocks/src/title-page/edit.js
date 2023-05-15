import {
    useBlockProps,
    InnerBlocks,
} from '@wordpress/block-editor';

import './editor.scss';

export default function Edit( props )
{
    const blockProps = useBlockProps();

    return (
        <>
            <section
                className={ `wrapper page-title ${ blockProps.className }` }
            >
                    <InnerBlocks
                        allowedBlocks={ [ 'core/heading' ] }
                        template={ [
                            [
                                'core/heading',
                                { placeholder: 'Titre de la page' },
                            ],
                            ] }
                    />
            </section>
        </>
    );
}
