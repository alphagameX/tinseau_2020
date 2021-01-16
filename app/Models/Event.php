<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $additional_attributes = array(
        'list'
    );

    public function getDate(): bool|string
    {
        $time = strtotime($this->getAttribute('date'));
        return  date('d M, Y', $time);
    }

    public function getListAttribute() {
        return $this->getAttribute('date') . ', ' . $this->getAttribute('title');
    }

    public function getThumbnail(): string
    {
        return env('APP_URL') . '/storage/' . $this->getAttribute('thumbnail');
    }

    public function getPricing() {
        return json_decode($this->getAttribute('price'));
    }

    public function getPriceAttribute($price) : void
    {
        $temp = json_decode($price);
        if($temp == null) {return;}
        $dom = '<ul>';
        foreach ($temp as $p) {
            $dom .= '<li>';
                $dom .= '<p>name: ' . $p->name . ', prix: ' . $p->price . ', limit: ' . $p->limit . '</p>';
            $dom .= '</li>';
        }
        $dom .= '</ul>';
        echo $dom;
    }
}
