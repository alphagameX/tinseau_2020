<x-header :name="$title"/>

<div id="home">
    <div class="main">
        <div class="left">
            <h1>Le mans<br><span>Buggati</span></h1>
            <h3>à partir de <span>€450</span></h3>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux</p>
            <div>
                <button>s'inscrire</button>
                <a href="{{route('circuits')}}" class="circuit">
                    <button>Voir les autres journées</button>
                </a>

            </div>
        </div>
        <div class="right">
            <img src="storage/logo/porsches.png">
        </div>
    </div>



    <div class="presta">
        @foreach($prestations as $prestation)
            <x-presta :prestation="$prestation"/>
        @endforeach
    </div>


    <x-carousel/>
    <x-news/>


</div>


<x-footer/>
