
<input style="display: none" class="form-control" name="{{$row->field}}" value="{{ $dataTypeContent->getAttributes()['price'] ?? "" }}"/>

<div class="list-prices">
    <p>Nom du forfait</p>
    <p>Prix de forfait</p>
    <p>Limit de place sur le forfait</p>
</div>

<div class="prices" style="margin-top: 20px">
    @foreach($prices as $key => $price)
        <div class="price" data-key="{{$key}}" data-id="{{$price->id}}">
            <p>{{$price->name}}</p>
            <input data-index="1" oninput="updatePricing(this, this.parentElement.dataset.key)" class="form-control" type="number" value="{{$price->default_price}}"/>
            <input data-index="2" oninput="updatePricing(this, this.parentElement.dataset.key)" class="form-control" type="number" value="{{$price->default_limit}}"/>
        </div>
    @endforeach
</div>


<style>
    .list-prices {
        margin-top: 30px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }
    .price {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        margin-bottom: 20px;
    }

    .price p {
        font-weight: bold;
    }

    .price input[type=number] {
        width: 100px;
    }
</style>


<script>
    let root = document.querySelector('input[name={{$row->field}}]')
    let prices = document.querySelector('.prices')
    let json = []

    if(root.value === '' || JSON.parse(root.value).length !== prices.children.length) {
        Array.from(prices.children).forEach((item) => {
            let temp = {id: item.dataset.id, name: item.children[0].innerHTML, price: item.children[1].value, limit: item.children[2].value}
            json.push(temp)
            root.value = JSON.stringify(json)
        })
    } else {
        json = JSON.parse(root.value)
        console.log(json)

        Array.from(prices.children).forEach((item, index) => {
            Array.from(item.children).forEach((el, i) => {
                if(i > 0) {
                    if(i === 1) {
                        el.value = json[index].price
                    } else if(i === 2) {
                        el.value = json[index].limit
                    }
                }
            })
        })
    }

    function updatePricing(input, key) {
        if(input.dataset.index == 1) {
            json[key].price = input.value
        } else if(input.dataset.index == 2) {
            json[key].limit = input.value
        }
        root.value = JSON.stringify(json)
    }
</script>
