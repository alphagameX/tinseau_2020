<?php

namespace App\Observers;

use App\Models\Prestation;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\NoReturn;

class PrestationObserver
{
    #[NoReturn] public function created(Prestation $prestation)
    {
        $this->slugify($prestation);
    }

    #[NoReturn] public function updated(Prestation $prestation)
    {
        $this->slugify($prestation);
    }

    private function slugify(Prestation $prestation) {
        $prestation->slug = Str::of($prestation['title'])->slug();
        $prestation->saveQuietly();
    }


   /* public function deleted(Prestation $prestation)
    {
        //
    }

    public function restored(Prestation $prestation)
    {
        //
    }

    public function forceDeleted(Prestation $prestation)
    {
        //
    }*/
}
