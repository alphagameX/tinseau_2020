let menu = document.querySelector('header');
/*ON SCROLL*/
window.onload = () => {
    isScrolledNavbar(menu)
}
window.addEventListener('scroll', (e) => {
    isScrolledNavbar(menu)
})

function isScrolledNavbar(el) {
    if(window.scrollY >= 50 || window.location.href !== window.location.origin + '/') {
        el.className = 'navbar'
    }else {
        el.removeAttribute('class')
    }
}

/*DROPDOWN*/
let menuBtn = menu.querySelector('.right button');
menuBtn.addEventListener('click', () => {
    let dropdown = document.querySelector('.right ul')
    if(dropdown.className.includes('active')) {
        dropdown.removeAttribute('class')
    } else {
        dropdown.className = 'active'
    }
})
