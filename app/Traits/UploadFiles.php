<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;


trait UploadFiles
{

    public function upload($data)
    {
        $destinationPath = public_path('upload/images');
      $imagename = time() . '-' . $data->file('file')->getClientOriginalName();
      $img = Image::make($data->file('file')->getRealPath());
     $img->save($destinationPath . '/' . $imagename,70);
     return $imagename;
    }



}
