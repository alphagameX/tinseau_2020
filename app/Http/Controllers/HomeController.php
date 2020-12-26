<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function index() : View|String{

        return view('index', array(
            'title' => 'Page d\'accueil',
            'prestations' => Prestation::all()
        ));
    }
}
