<div class="last-news">
    <h1>Les dernieres news: </h1>
    <div class="grid-container">
        <main class="grid-item main">
            <div class="items">
                @foreach($lastNews as $news)
                    <div class="item" style="background-image:  linear-gradient(#44676457, #446764), url('{{$news->getThumbnail()}}')">
                        <p class="date">{{$news->created_at}}</p>
                        <div>
                            <p class="author">
                                Rédiger par {{$news->user->name ?? '?MISSING'}}
                                <i class="far fa-comment-dots"></i>
                            </p>
                            <a href="{{route('news', array('id' => $news->id))}}">
                                <h1>{{$news->title}}</h1>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>
    <a href="#">
        <h1>Voir tout les news</h1>
    </a>
</div>
@php register_script('/js/grabbled.js') @endphp
