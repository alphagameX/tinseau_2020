<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LastNews extends Component
{

    public function __construct(
        public int $excepted
    ){}

    public function render() : View|string
    {
        return view('components.last-news', array(
            'lastNews' => Article::query()->where('id', '!=', $this->excepted)->get()
        ));
    }
}
