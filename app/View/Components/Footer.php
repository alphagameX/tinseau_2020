<?php

namespace App\View\Components;

use App\Models\Partner;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct(){}

    public function render(): View|string
    {
        return view('components.footer', array(
            'partners' => Partner::all()
        ));
    }
}
