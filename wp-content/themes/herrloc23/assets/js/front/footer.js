document.addEventListener('DOMContentLoaded', () => {
    // Duplicate the email
    const email = document.querySelector('.emailFooter')

    const setEmailWidth = () => {
        const emailWidth = email.scrollWidth
        // Passer la width de l'email au css
        document.querySelector('.footer__contact')?.style.setProperty('--size', `${emailWidth}px`)
    }

    if(email) {
        setEmailWidth()

        window.addEventListener('resize', () => {
            setEmailWidth()
        })

        // Remplir le footer avec autant d'email qu'il faut
        for (let i = 0; i < 10; i++) {
            document.querySelector('.footer__contact').appendChild(email.cloneNode(true));
        }
    }

    // Click on email for copying it
    const buttons = document.querySelectorAll('.emailFooter')
    const info = document.getElementById('info')

    if(buttons){
        buttons.forEach((button) => {
            // Copy mail and show message on click
            button.addEventListener('click', () => {
                navigator.clipboard.writeText(button.innerHTML)
                .then(() => {
                    info.classList.add('show')
                },() => {
                    console.error('Failed to copy');
                })
                // Hide message after 4s
                .then(() => {
                    setTimeout(() => {
                        info.classList.remove('show')
                    }, 4000)
                });
            })
        })
    }

})