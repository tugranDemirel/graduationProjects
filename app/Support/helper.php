<?php

namespace App\Support;

use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

class Helper
{
//    FILE UPLOAD FUNCTION
    public static function imageUpload($file, string $title, string $path)
    {
        /*
         *  $file = $request->file
         *  $title = request->title
         *  $path = image file path
         * */
            $imageName = Str::slug($title, '-') . '-' . rand(1200, 199999) . '.' .$file->extension(); // getClientOriginalExtension()
            $file->move(public_path($path), $imageName);
            $move = $path.'/'.$imageName;
            return $move;
    }
    public static function deleteOldImage(string $path)
    {
        return unlink(public_path($path));
    }
}
