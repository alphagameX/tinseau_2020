<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function getThumbnail() {
        return env('APP_URL') . '/storage/' . $this->getAttribute('thumbnail');
    }

    public function getCreatedAtAttribute($createdAt) {
        $time = strtotime($createdAt);
        return  date('d M, Y', $time);
    }
}
