let menu = document.querySelector('header');
/*ON SCROLL*/
window.onload = () => {
    isScrolledNavbar(menu)
}
window.addEventListener('scroll', (e) => {
    isScrolledNavbar(menu)
})

function isScrolledNavbar(el) {

    console.log()

    if(window.scrollY >= 50 ||
        window.location.href !== window.location.origin + '/' &&
        window.location.href !== window.location.origin + '/login') {
        el.className = 'navbar'
    }else {
        el.removeAttribute('class')
    }
}

let overlayBtn = document.querySelector('header .right button')
let overlay = document.querySelector('.overlay')
let closeBtn = document.querySelector('.overlay .close')

overlayBtn.addEventListener('click', () => {
    overlay.style.opacity = '1'
    overlay.style.pointerEvents = 'all'
    overlay.querySelector('.panel').classList.add('on-screen')
})

overlay.addEventListener('click', (e) => {
    if(e.target.className.includes('overlay') || e.target.className.includes('fas')) {
        overlay.removeAttribute('style')
        overlay.querySelector('.panel').classList.remove('on-screen')
    }
})

