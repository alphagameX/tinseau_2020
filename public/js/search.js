class Search {

    search = document.querySelector('.search')

    constructor() {
        if(this.search !== null) {
            this.init()
        } else {
            return false;
        }
    }

    init() {
        this.search.querySelector('button:first-of-type').addEventListener('click', () => {
            let block = this.search.querySelector('.search-block')
            block.addEventListener('click', (e) => {
                if(e.target.classList.contains('search-block')) {
                    if(block.classList.contains('active')) {
                        block.classList.remove('active')
                    }
                }

            })
            let input = block.querySelector('div input[type=text]')
            console.log(input)
            if(!block.className.includes('active')) {
                block.classList.add('active')
                input.addEventListener('input', (e) => {
                    this.ajax(e)
                })
            } else {
                block.classList.remove('active')
                input.removeEventListener('input', () => {})
            }
        })
    }

    ajax(e) {
        let ajax = new XMLHttpRequest()
        ajax.open('POST', window.location.origin + '/search', true)
        ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        ajax.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
        ajax.send("search=" + e.target.value)
        ajax.onloadend = () => {
            let block = this.search.querySelector('.search-block .result')
            let res = JSON.parse(ajax.response)
            block.innerHTML = ''
            res.forEach((data) => {
                block.appendChild(this.suggestion(data, e.target.value))
            })
        }
    }

    suggestion (data, search) {
        let suggestion = document.createElement('div')
        suggestion.className = 'suggestion'

        let div = document.createElement('div')
        let h1 = document.createElement('h1')
        h1.innerHTML = this.occurenceMatch(data.title, search)

        let p = document.createElement('p')
        p.innerHTML = data.created_at
        p.className = 'date'

        let a = document.createElement('a')
        a.href = '/news/' + data.id
        let button = document.createElement('button')
        button.innerHTML = 'Voir'
        a.appendChild(button)

        div.appendChild(h1)
        div.appendChild(p)
        suggestion.appendChild(div)
        suggestion.appendChild(a)

        return suggestion
    }

    occurenceMatch(text, search) {
        for(let i = 0; i < text.length; i++) {
            let subed = text.substr(i, search.length)
            if(subed.includes(search)
                || subed.includes(search.toUpperCase())
                || subed.includes(search.toLowerCase())
                || subed.includes(search[0].toUpperCase() + search.substr(1))) {
                text = text.replace(subed, '<span>' + subed + '</span>');
                return text
            }
        }
        return text + '<p><span>Résultat trouvé dans le contenu</span></p>'
    }
}


new Search()


