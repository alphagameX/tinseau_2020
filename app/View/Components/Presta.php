<?php

namespace App\View\Components;

use App\Models\Prestation;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Presta extends Component
{
    public function __construct(
        public Prestation $prestation,
    ){}

    public function render() : View|string
    {
        return view('components.presta', array(
            'prestation' => $this->prestation
        ));
    }
}
