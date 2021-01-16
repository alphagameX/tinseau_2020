<?php

namespace App\FormField;

use App\Models\Price;
use TCG\Voyager\FormFields\AbstractHandler;

class PriceField extends AbstractHandler {
    public function createContent($row, $dataType, $dataTypeContent, $options)
    {

        $pricing = Price::all();

        return view('admin.PriceField',array(
            'row' => $row,
            'dataTypeContent' => $dataTypeContent,
            'prices' => $pricing
        ));
    }
}
