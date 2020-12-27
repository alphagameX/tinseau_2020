<?php

namespace App\FormField;

use TCG\Voyager\FormFields\AbstractHandler;

class Builder extends AbstractHandler {

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('admin.formFields.Builder', array(
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ));
    }
}
