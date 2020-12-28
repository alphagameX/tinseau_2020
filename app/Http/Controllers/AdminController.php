<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;
use TCG\Voyager\Facades\Voyager;

class AdminController extends Controller
{
    public function asset($file) {
        $path = resource_path() . '/views/admin/' . $file;
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }

    public function upload(Request $request) {
        $request->image->storeAs('/public/utils/background/', $request->image->getClientOriginalName());
        return json_encode(array(
            'success' => 1,
            'file' => array(
                'url' =>  'http://localhost/storage/utils/background/' . $request->image->getClientOriginalName()
            )
        ));
    }
}
