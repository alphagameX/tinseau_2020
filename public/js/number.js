class NumberPicture {

    root = document.querySelectorAll('.number')
    relative_path = ""

    constructor(url) {
        /*SECURE*/
        if(this.root.length === 0) {
            console.log(new Error('no class number for img string counter'))
            return
        }
        this.relative_path = url
        this.init()
    }

    init() {
        this.root.forEach((number) => {
            try {
                let int = number.dataset.number
                let array = []
                for(let i = 0; i < int.length; i++) {
                    array.push(this.getPicturePath(int.charAt(i)))
                }
                array.forEach((num) => this.createImg(num, number));
            } catch (e) {
                console.log("data-number is not defined in DOM")
            }
        })
    }

    /**
     * @param {string} url
     * @param {HTMLElement} target
     */
    createImg(url, target) {
        let img = document.createElement('img')
        img.src = url
        target.appendChild(img)
    }

    /**
     * @param {string} i
     * @returns {string}
     */
    getPicturePath(i) {
        let url = window.location.origin + this.relative_path
        return url + i + '.png'
    }
}

new NumberPicture('/storage/utils/number/')

