<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Carousel extends Component
{

    public function __construct(){}


    public function render() : View|string
    {
        return view('components.carousel', array(
            'delay' => 4000
        ));
    }
}


