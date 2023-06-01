export class AnimCols{

    constructor(element) {
        this.element = element
        this.left = document.querySelectorAll(`${this.element}:nth-child(odd)`)
        this.right = document.querySelectorAll(`${this.element}:nth-child(even)`)
        this.animations = []
        this.animate()
    }

    animate() {
        if(window.matchMedia('(width >= 550px)').matches){
            this.left?.forEach((left) => {
                const animation = gsap.to(left, {
                    scrollTrigger: {
                        trigger: this.left[0],
                        scrub: 2,
                        start: '-=200%',
                        end: '125%'
                    },
                    y: '-=125'
                })
                this.animations.push(animation);
            })

            this.right?.forEach((right) => {
                const animation = gsap.to(right, {
                    scrollTrigger: {
                        trigger: this.right[0],
                        scrub: 3,
                        start: '-=200%',
                        end: '125%'
                    },
                    y: '+=150'
                })
                this.animations.push(animation);
            })
        }
    }

    destroy() {
        this.animations.forEach((animation) => {
            // kill animation
            animation.kill()

            // Remove style
            document.querySelectorAll(`${this.element}`).forEach((elt) => {
                elt.removeAttribute('style')
            })
        });
        this.animations = []
    }
}