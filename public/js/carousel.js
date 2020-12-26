class Carousel {

    /*PROPERTY*/
    carousel = document.querySelector('.carousel')
    coord = 0
    pos = 0

    constructor() {
        if(this.setPills() === false || this.setControl() === false) {
            return false
        }
        window.addEventListener('resize', () => {
            this.coord = this.coord + ((this.carousel.querySelector('.carousel-container').clientWidth * this.pos) - this.coord)
            this.carousel.querySelector('.carousel-container').scrollTo({
                left: this.coord
            })
        })
        setInterval(() => {
            this.pos++;
            if(this.pos < this.carousel.querySelector('.pills').children.length)
                this.move(this.pos)
            else
                this.pos = -1

        }, this.carousel.dataset.delay ?? 4000)
    }

    /*SETTER*/
    setPills() {
        if (this.carousel.querySelector('.pills') !== null) {
            let pills = this.carousel.querySelector('.carousel-container').children.length
            for (let i = 0; i < pills; i++) {
                let pill = document.createElement('span')
                if (i === 0) {
                    pill.className = 'active'
                }
                pill.addEventListener('click', () => {
                    this.move(i)
                })
                this.carousel.querySelector('.pills').appendChild(pill)
            }
            return true
        } else {
            console.log('Error: missing container for pills')
            return false
        }
    }
    setControl() {
        if(this.carousel.querySelector('.control') !== null) {
            let _this = this
            this.carousel.querySelector('.control .left').addEventListener('click', () => {
                _this.scroll('prev')
            })
            this.carousel.querySelector('.control .right').addEventListener('click', () => {
                _this.scroll('next')
            })
            return true
        } else {
            console.log('Error: missing container for control')
            return false
        }
    }

    /*CONTROL FUNC*/
    move(to) {
        this.pos = to
        let container = this.carousel.querySelector('.carousel-container')
        let pills = this.carousel.querySelector('.pills').children
        let index = 0
        Array.from(pills).forEach((el, nb) => {
            if(el.className === 'active') {
                index = nb
            }
        })
        pills[index].className = ''
        pills[to].className = 'active'
        this.coord = container.clientWidth * to
        container.scrollTo({
            left: this.coord,
            behavior: 'smooth'
        })
    }
    scroll(dir) {
        console.log(this.coord)
        let container = this.carousel.querySelector('.carousel-container')
        let pills = this.carousel.querySelector('.pills').children
        let index = 0
        Array.from(pills).forEach((el, nb) => {
            if(el.className === 'active') {
                index = nb
            }
        })
        /*SECURE*/
       switch (dir) {
           case 'prev':
               if(pills[index - 1] === undefined) {
                   return;
               }
               break;
           case 'next':
               if(pills[index + 1] === undefined) {
                   return;
               }
               break;
       }
        if(index < pills.length) {
            pills[index].className = ''
            if(dir === 'prev') {
                this.pos = index - 1
                pills[index - 1].className = 'active'
            }
            else if(dir === 'next') {
                this.pos = index + 1
                pills[index + 1].className = 'active'
            }
        }
        if(dir === 'prev')
            this.coord -= container.clientWidth
        else if(dir === 'next')
            this.coord += container.clientWidth
        container.scrollTo({
            left: this.coord,
            behavior: 'smooth'
        })
    }
}

new Carousel()
