<x-header :title="$title"/>

<div class="single-news">
    <div class="header">
        <h1>{{$news->title}}</h1>
        <p>Rédiger par: {{$news->user->name ?? '?missing'}}</p>
        <h3>{{$news->created_at}}</h3>
    </div>

    <div class="body">
        <img src="{{$news->getThumbnail()}}"/>
    </div>
</div>

<x-footer/>>
