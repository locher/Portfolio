import Macy from 'macy'

document.addEventListener('DOMContentLoaded', () => {
    const macyFolio = Macy({
        container:  '.folio-galerie',
        columns: 2,
        margin:{
            x: 50,
            y: 50
        },
        breakAt: {
            1000:{
                columns:1
            }
        },
        trueOrder: true,
        cancelLegacy: true
    });
})


