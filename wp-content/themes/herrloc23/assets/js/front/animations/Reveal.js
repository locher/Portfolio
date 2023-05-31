export class Reveal {
    constructor(element, duration, delay) {
        this.element = element
        this.duration = duration
        this.delay = delay
        this.animate()
    }

    animate(){
        if(document.querySelector(this.element)) {
            gsap.from(this.element, {
                autoAlpha: 0,
                duration: this.duration,
                delay: this.delay,
                y: -90,
                opacity: 0,
                ease: "power4",
                clearProps:"transform"
            })
        }
    }
}