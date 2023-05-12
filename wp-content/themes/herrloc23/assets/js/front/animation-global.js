const animatedElements = document.querySelectorAll('[data-anim]')

animatedElements?.forEach(elt => {

    let direction = elt.getAttribute('data-anim')
    let delay = elt.getAttribute('data-delay') || 0

    direction === '' ? direction = 'top' : ''

    let position, unit

    if(direction === 'top'){
        position = 'yPercent'
        unit = '-'
    }else if(direction === 'bottom'){
        position = 'yPercent'
        unit = '+'
    }else if(direction === 'right'){
        position = 'xPercent'
        unit = '+'
    }else if(direction === 'left'){
        position = 'xPercent'
        unit = '-'
    }

    gsap.from(elt, {
        scrollTrigger: {
            trigger: elt,
            start: "top 100%",
            scrub: 3
        },
        duration: 1.5,
        [position]: `${unit}20`,
        opacity: 0,
        ease: "power4",
        stagger: 1,
        delay: delay
    })
})