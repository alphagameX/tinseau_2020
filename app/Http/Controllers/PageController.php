<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Prestation;

use Illuminate\View\View;

class PageController extends Controller
{
    public function prestation($slug) : View|string {
        $page = Prestation::all()->where('slug', '=', $slug)->first();
        if($page === null) {
            abort(404);
            return ('fail');
        }
        return view('prestation', array(
            'title' => $page->title,
            'page' => $page
        ));
    }

    public function news($id) {

        $news = Article::query()->where('id', '=', $id)->first();

        return view('single-news', array(
            'title' => $news->title,
            'news' => $news
        ));
    }
}
