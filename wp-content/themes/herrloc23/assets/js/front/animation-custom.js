const customAnimations = () => {

    // Skills Left
    const skillsLeft = document.querySelectorAll('.skill:nth-child(odd)')

    skillsLeft?.forEach((skill) => {
        gsap.to(skill, {
            scrollTrigger: {
                trigger: skillsLeft[0],
                scrub: 2,
                start: '-=200%',
                end: '125%'
            },
            y: '-=200',
        })
    })

    // Skills Right
    const skillsRight = document.querySelectorAll('.skill:nth-child(even)')

    skillsRight?.forEach((skill) => {
        gsap.to(skill, {
            scrollTrigger: {
                trigger: skillsRight[0],
                scrub: 3,
                start: '-=200%',
                end: '125%'
            },
            y: '+=150'
        })
    })

    // Footer
    const footer = document.querySelector('footer.footer')

    gsap.from(footer, {
        scrollTrigger: {
            trigger: footer,
            start: "top 100%",
        },
        duration: 2,
        yPercent: 20,
        opacity: 0,
        ease: "power4"
    })

    // Header
    const header = document.querySelector('.header')

    if(header){
        gsap.from(header, {
            autoAlpha: 0,
            duration: 2,
            delay: .3,
            yPercent: -80,
            opacity: 0,
            ease: "power4"
        })
    }

    // Header Home
    const headerHome = document.querySelector('.header-home')

    if(headerHome){
        gsap.from(headerHome, {
            autoAlpha: 0,
            duration: 3,
            delay: .5,
            yPercent: -50,
            opacity: 0,
            ease: "power4"
        })
    }

    // Folio
    const folio = document.querySelector('.folios')

    if (folio){
        gsap.from(folio, {
            autoAlpha: 0,
            duration: 2,
            delay: .3,
            y: '-80px',
            opacity: 0,
            ease: "power4"
        })
    }

    // Skills
    const skills = document.querySelector('.skills')

    if (skills){
        gsap.from(skills, {
            autoAlpha: 0,
            duration: 2,
            delay: .9,
            y: '-80px',
            opacity: 0,
            ease: "power4"
        })
    }

    // Titre
    const pageTitle = document.querySelector('.page-title')

    if(pageTitle){
        gsap.from(pageTitle, {
            autoAlpha: 0,
            duration: 2.5,
            delay: .2,
            y: '-80px',
            opacity: 0,
            ease: "power4"
        })
    }
}

window.addEventListener('load', () => {
    customAnimations()
})
