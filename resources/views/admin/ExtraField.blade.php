
<input type="text" name="{{ $row->field }}" value="{{ old($row->field, $dataTypeContent->{$row->field}) }}">


<div class="extraField">
    <div class="appender">
        <input class="form-control" type="text" placeholder="Nom de la formule"/>
        <input class="form-control" type="number" placeholder="Prix"/>
        <button id="addPrice" class="btn btn-primary save" style="margin: 0">+</button>
    </div>
</div>

<style>
    .appender {
        display: flex;
        justify-content: space-between;
    }
    .appender input[type=number] {
        width: 100px;
    }
</style>


<script>
    let root = document.querySelector('.extraField')
    let priceBtn = document.querySelector('#addPrice')
    let title = document.querySelector('.appender input[type=text]')
    let price = document.querySelector('.appender input[type=number]')

    priceBtn.addEventListener('click', function () {
        event.preventDefault()
        pricing(title.value, price.value)
    })

    let pricing = function (name, price) {
        let p = document.createElement('p')
        p.innerHTML = 'nom : <strong>' + name + '</strong> prix: <strong>' + price + '$</strong>'
        root.appendChild(p)
    }
</script>
