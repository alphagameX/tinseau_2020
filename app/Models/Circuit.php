<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;

    public function getThumbnail(): string
    {
        return env('APP_URL') . '/storage/' . $this->getAttribute('thumbnail');
    }

    public function events() {
        return $this->hasMany(Event::class, 'circuit_id', 'id')->orderBy('date')->take(3);
    }
}
