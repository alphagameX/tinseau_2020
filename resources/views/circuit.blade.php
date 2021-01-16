<x-header :name="$title"/>

<div class="circuits">


    <div class="circuit-header">
        <h1>Nos circuits<i class="fas fa-road"></i></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue sem vel magna eleifend egestas. Suspendisse congue tellus justo, quis faucibus libero dignissim et. Sed tincidunt vehicula lorem, non iaculis leo bibendum sed. Duis eu iaculis enim. Cras placerat laoreet tellus id auctor. Praesent gravida pharetra nunc in semper.</p>
    </div>


    <div class="circuit-container">

        @foreach($circuits as $circuit)
            <div class="circuit-item">
                <img src="{{$circuit->getThumbnail()}}"/>
                <div>
                    <a href="{{route('circuit', array('slug' => $circuit->slug))}}">
                        <h1>{{$circuit->name}}</h1>
                    </a>
                    <p>{{$circuit->desc}}</p>
                    @if(count($circuit->events) > 0)
                        <div class="next-event">
                            <h1>Les prochaines journées sur ce circuit: </h1>
                            <ul>
                                @foreach($circuit->events as $event)
                                    <li>
                                        <div>
                                            <p>{{$event->list}}</p>
                                            <p class="place">Il reste <strong>{{$event->place}}</strong> place !</p>
                                        </div>
                                        <button>S'inscrire</button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                       <div class="no-event">
                           <p>Owww il n'y a aucune journée prevu sur ce circuit pour le moment...</p>
                           <button>Voir les autres journées</button>
                       </div>
                    @endif
                </div>
            </div>
        @endforeach

    </div>
</div>

<x-footer/>
