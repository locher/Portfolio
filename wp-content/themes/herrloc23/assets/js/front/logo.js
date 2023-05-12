const logo = document.querySelector('.logo')
const logoContent = logo.innerHTML

if (logo) {
    gsap.to(logo, {
        duration: 1,
        text: logoContent.charAt(0),
        delay: 2,
    })

    logo.addEventListener('mouseenter', () => {
        gsap.to(logo, {
            duration: 0.3,
            text: logo.getAttribute('data-back'),
        })
    })

    logo.addEventListener('mouseleave', () => {
        const tLogo = gsap.timeline();
        tLogo.to(logo, {duration: 1.2, text: logoContent})
            .to(logo, {duration: 0.3,text: logoContent.charAt(0)})
    })
}
