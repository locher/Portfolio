import { AnimCols } from "./animations/AnimCols"
import { ScrollReveal } from "./animations/ScrollReveal"
import { Reveal } from "./animations/Reveal"

const customAnimations = () => {

    // Global
    new Reveal('.header', 2, 0.2)
    new ScrollReveal('footer.footer', 1, 0, '150%')

    // Home
    new Reveal('.header-home', 2, .4)
    new Reveal('.home .skills', 2, .6)
    new AnimCols('.home .skill')
    new Reveal('.home .folios', 2, .8)
    const folios = document.querySelectorAll('.folio')
    folios?.forEach((elt) => {
        new ScrollReveal(elt, 2, 0)
    })

    // Folio
    new Reveal('.portfolio .page-title', 2, .4)
    new Reveal('.portfolio .folios', 2, .6)

    // Single folio
    new Reveal('.single-portfolio .page-title', 2, .4)
    new Reveal('.single-folio__details', 2, .6)
    new Reveal('.single-folio__content', 2, .8)
    new Reveal('.single-folio__screenshot', 2, 1)
    new AnimCols('.folio-galerie__single')
    new Reveal('.portfolio__header__title', 2, 1.2)
    new Reveal('.single-portfolio .folios', 2, 1.4)

    // Skills
    new Reveal('.competences .page-title', 2, .4)
    new Reveal('.competences .skills', 2, .6)
    new AnimCols('.competences .skill')

    // Contact
    new Reveal('.contact .page-title', 2, .4)
    new Reveal('.contact .wp-block-hloc-wrapper', 2, .6)

    //404
    new Reveal('.p404__content__wrapper', 2, .6)
    const p404 = document.querySelector('.p404__bg')

    if(p404){
        gsap.from(p404, {
            autoAlpha: 0,
            duration: 2,
            delay: .4,
            y: -40,
            scale: .8,
            opacity: 0,
            ease: "power4"
        })
    }


}

window.addEventListener('load', () => {
    customAnimations()
})
