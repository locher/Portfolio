export class ScrollReveal {
    constructor(element, duration, delay, position = '95%') {
        this.element = element
        this.duration = duration
        this.delay = delay
        this.position = position
        this.animate()
    }

    animate(){
        gsap.from(this.element, {
            scrollTrigger: {
                trigger: this.element,
                start: `top ${this.position}`,
                scrub: 2
            },
            autoAlpha: 0,
            duration: this.duration,
            delay: this.delay,
            yPercent: 30,
            opacity: 0,
            ease: "power4",
            stagger: 2
        })
    }


}