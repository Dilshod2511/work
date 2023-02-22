<?php


namespace App\Services;
use Intervention\Image\Facades\Image;

class ImageService
{
    public function upload($data)
    {
            $destinationPath = public_path('upload/image');
            $imagename = time() . '-' . $data->file('image')->getClientOriginalName();
            $img = Image::make($data->file('image')->getRealPath());
            $img->save($destinationPath . '/' . $imagename,70);
            return $imagename;
            $a=++$a;
    }

}
