// Skills Left

const skillsLeft = document.querySelectorAll('.skill:nth-child(odd)')

skillsLeft?.forEach((skill) => {
    gsap.to(skill, {
        scrollTrigger: {
            trigger: skillsLeft[0],
            scrub: 2,
            start: '-225%',
            end: '125%'
        },
        y: '-200px'
    })

    gsap.from(skill, {
        duration: 2,
        delay: .3,
        yPercent: 80,
        opacity: 0,
        ease: "power4"
    })
})

// Skills Right

const skillsRight = document.querySelectorAll('.skill:nth-child(even)')

skillsRight?.forEach((skill) => {
    gsap.to(skill, {
        scrollTrigger: {
            trigger: skillsRight[0],
            scrub: 3,
            start: '-200%',
            end: '125%'
        },
        y: '150px'
    })

    gsap.from(skill, {
        duration: 2,
        delay: .3,
        yPercent: 80,
        opacity: 0,
        ease: "power4"
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

const header = document.querySelector('.home .header')

if(header){
    gsap.from(header, {
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
        duration: 2,
        delay: .3,
        yPercent: -80,
        opacity: 0,
        ease: "power4"
    })
}
