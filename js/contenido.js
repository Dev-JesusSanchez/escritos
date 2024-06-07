"use strict"

const navContent = document.querySelectorAll('.nav-writer__list__item__enlace')

const sectionsContent = document.querySelectorAll('.nav2-sections')

for(let i = 0; i < navContent.length; i++) {
    navContent[i].addEventListener('click', e => {
        e.preventDefault()
        for(let j = 0; j < navContent.length; j++) {
            sectionsContent[j].style.display = 'none';
            navContent[j].classList.remove('eyelash-active')
        }
        navContent[i].classList.add('eyelash-active')
        sectionsContent[i].style.display = 'flex'
    })
}