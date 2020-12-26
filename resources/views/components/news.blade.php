<div class="news-container">
    <div class="news">
        @foreach($articles as $index => $article)
            <a href="{{route('news', array('id' => $article->id))}}" class="news-{{$index + 1}}" style="background-image:  linear-gradient(#44676457, #446764),  url({{$article->getThumbnail()}});">
                <p class="date">{{$article->created_at}}</p>
                <div>
                    <p class="author">
                        Rédiger par {{$article->user->name ?? 'missing'}}
                        <i class="far fa-comment-dots"></i>
                    </p>
                    <h1>{{$article->title}}</h1>
                </div>
            </a>
        @endforeach
    </div>

    <div class="search">
        <button>
            <i class="fas fa-search"></i>
            Recherche
        </button>
        <div class="search-block">
            <div>
                <i class="fas fa-search"></i>
                <input type="text"/>
                <div class="result"></div>
            </div>
        </div>
    </div>

    @php register_script('/js/search.js') @endphp
</div>


