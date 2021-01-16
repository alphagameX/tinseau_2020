<x-header :name="$title"/>

<div class="event-list">

    <div class="header">
        <h1>Tinseau Test Days</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo accumsan metus vitae pulvinar. Aliquam accumsan orci vitae erat fermentum vehicula. Nullam sit amet malesuada mauris. Phasellus quis est tortor. Duis mollis vehicula erat eu molestie. Vestibulum pellentesque eu nulla sed tincidunt. Aliquam quis arcu urna. Proin et leo quis lorem volutpat dictum. Aliquam ac molestie ante. Donec at magna sit amet augue dictum gravida vitae at ligula. Praesent finibus mauris risus, et ultrices velit imperdiet at. Pellentesque vulputate, ante nec dignissim pulvinar, felis metus venenatis mauris, quis interdum lorem augue vel sapien. Nulla auctor, leo quis consectetur pulvinar, augue nisl vulputate justo, eu porta quam mi ac nulla.
        </p>
    </div>



    <div class="selector">
        <div>
            <p>Il y a {{count($events)}} évenements de prevu pour cette année</p>
        </div>
        <div>
            <button data-type="grid">
                <i class="fas fa-th-large"></i>
            </button>
            <button data-type="list">
                <i class="fas fa-th-list"></i>
            </button>
        </div>
    </div>

    <div class="grid-container" id="event-slide">
        <main class="grid-item">
            <div class="items">

                @foreach($events as $event)
                    <div class="item" style="background-image: url('{{$event->getThumbnail()}}')">
                        <div class="number" data-number="{{$event->place}}">
                            <p>places restantes</p>
                        </div>
                        <a href="{{route('event', array('id' => $event->id))}}">
                            <div class="desc">
                                <h1>{{$event->title}}</h1>
                                <p>{{$event->getDate()}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </main>
    </div>

    <x-carousel/>

</div>



@php register_script('/js/grabbled.js') @endphp
@php register_script('/js/number.js') @endphp


<x-footer/>
