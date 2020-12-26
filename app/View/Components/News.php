<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class News extends Component
{
    public function __construct(
        public $articles = []
    ){
        $this->articles = Article::all()->sortBy('created_at')->take(3);
    }

    public function render() : View|string
    {
        return view('components.news',array(
            'articles' => $this->articles
        ));
    }
}
