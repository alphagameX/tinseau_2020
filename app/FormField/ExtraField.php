<?php

namespace App\FormField;

use TCG\Voyager\FormFields\AbstractHandler;

class ExtraField extends AbstractHandler {
    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('admin.ExtraField',array(
            'row' => $row,
            'dataTypeContent' => $dataTypeContent
        ));
    }
}
