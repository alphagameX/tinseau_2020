<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public function __construct(
        public string $name = ""
    ){}

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render(): View|string
    {
        return view('components.header', array(
            'title' => $this->name
        ));
    }
}
