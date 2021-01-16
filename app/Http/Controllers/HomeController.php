<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       /* $this->middleware('auth');*/
    }

    public function index() : View|String{

        return view('index', array(
            'title' => 'Page d\'accueil',
            'prestations' => Prestation::all()
        ));
    }
}
