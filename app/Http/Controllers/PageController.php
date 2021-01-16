<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Circuit;
use App\Models\Event;
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


    // circuit route
    public function circuits() {

        $circuits = Circuit::all()->sortBy('date');

        return view('circuit', array(
            'title' => 'Nos circuits',
            'circuits' => $circuits
        ));
    }
    public function circuit($slug) {
        dd($slug);
        return $slug;
    }


    // event page
    public function events() {

        $events = Event::all()->sortBy('date');

        return view('event', array(
            'title' => 'Nos prochaines dates',
            'events' => $events
        ));
    }

    public function event($id) {
        $event = Event::all()->where('id', '=', $id)->first();
        return view('single-event', array(
            'title' => $event->title,
            'event' => $event
        ));
    }

}
