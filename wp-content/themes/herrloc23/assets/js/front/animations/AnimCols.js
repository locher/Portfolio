export class AnimCols{

    constructor(element) {
        this.element = element
        this.left = document.querySelectorAll(`${this.element}:nth-child(odd)`)
        this.right = document.querySelectorAll(`${this.element}:nth-child(even)`)
        this.animate()
    }

    animate() {
        this.left?.forEach((left) => {
            gsap.to(left, {
                scrollTrigger: {
                    trigger: this.left[0],
                    scrub: 2,
                    start: '-=200%',
                    end: '125%'
                },
                y: '-=200',
            })
        })

        this.right?.forEach((right) => {
            gsap.to(right, {
                scrollTrigger: {
                    trigger: this.right[0],
                    scrub: 3,
                    start: '-=200%',
                    end: '125%'
                },
                y: '+=150',
            })
        })
    }
}