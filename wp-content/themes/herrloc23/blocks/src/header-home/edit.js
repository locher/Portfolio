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
                className={ `header-home ${ blockProps.className }` }
            >
                <div className="wrapper wrapper--tiny">
                    <InnerBlocks
                        allowedBlocks={ [ 'core/paragraph', 'core/heading', 'hloc/button' ] }
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
