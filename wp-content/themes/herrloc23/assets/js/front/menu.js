// const menu = () => {
//
//     const menuElts = document.querySelectorAll('button[aria-expanded]')
//
//     if (menuElts) {
//         menuElts.forEach((menu) => {
//             menu.addEventListener('click', () => {
//                 let isExpanded = JSON.parse(menu.getAttribute('aria-expanded'))
//
//                 // toggle button
//                 menu.setAttribute('aria-expanded', !isExpanded)
//
//                 // toggle submenu
//                 document.getElementById(menu.getAttribute('aria-controls')).setAttribute('aria-hidden', isExpanded)
//             })
//         })
//     }
// }
//
// document.addEventListener('DOMContentLoaded', () => {
//     menu();
// })

// import { shuffleString } from "./helper";
//
// // Menu hover
//
// const menu = document.querySelectorAll('.menu-item a')
//
// if(menu){
//     menu.forEach((elt) => {
//         const t = gsap.timeline();
//         const menuText = elt.innerHTML;
//         elt.addEventListener('mouseenter', () => {
//             t.to(elt, {duration: 2, text: shuffleString(menuText)})
//                 .to(elt, {duration: 0.4,text: menuText})
//         })
//
//         elt.addEventListener('mouseleave', () => {
//             t.to(elt, {duration: 0.4, text: menuText})
//         })
//     })
// }

const menuElts = document.querySelectorAll('#menuMain .menu-item:not(.btn)')
const hoverElt = document.getElementById('hoverElt')

if (menuElts && hoverElt){
    menuElts.forEach((el) => {
        el.addEventListener('mouseenter', (e) => {
            hoverElt.classList.remove('disable')
            hoverElt.style.width = el.scrollWidth + 'px'
            hoverElt.style.left = el.offsetLeft + 'px'
        })

        el.addEventListener('mouseleave', () => {
            hoverElt.style.width = 0
            hoverElt.classList.add('disable')
        })
    })
}