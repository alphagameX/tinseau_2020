
const slider = document.querySelector('.items');
const item = slider.querySelector('.item')
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
});

slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
});

slider.addEventListener('mousemove', (e) => {
    if(!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 1.5; //scroll-fast
    slider.scrollLeft = scrollLeft - walk;
});


if(document.querySelector('.selector') !== null) {
    let selector = document.querySelector('.selector > div:last-child')
    let container = document.getElementById('event-slide')
    loadCheck()
    Array.from(selector.children).forEach((btn) => {
        btn.addEventListener('click', () => {
            container.className = btn.dataset.type + '-container'
            reset(btn)
        })
    })

    /**
     * @param {HTMLElement} el
     */
    let reset = function (el) {
        Array.from(selector.children).forEach((e) => {
            e.removeAttribute('class')
        })
        el.className = 'active'
    }

    function loadCheck() {
        let className = container.className.replace('-container', '')
        Array.from(selector.children).forEach((btn) => {
            if(btn.dataset.type === className) {
                btn.className = 'active'
            }
        })
    }
}
