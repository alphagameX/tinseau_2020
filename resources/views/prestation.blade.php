<x-header :name="$title"/>

    <div class="single-presta">
        <img src="{{$page->getImage()}}">
        <h1><i class="fas <?= $page->logo ?>"></i>{{$page->title}}</h1>
        <div class="content">
            {!! $page->content !!}
        </div>
    </div>

<x-footer/>
