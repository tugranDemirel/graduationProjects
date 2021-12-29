<?php

namespace App\Support;

use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

class Helper
{
//    FILE UPLOAD FUNCTION
    public static function imageUpload($file, string $title, string $path, string $name = '')
    {
        /*
         *  $file = $request->file
         *  $title = request->title
         *  $path = image file path
         * Kullanabilmeniz icin PHP-RANDOM 'u composer aracılığla yüklemeniz ve ilgili sayfaya import etmeniz gerekmektedir.
         * link: https://github.com/tugranDemirel/PHP-Random
         * */
            $imageName = Str::slug($title, '-') . '-' . rand(1200, 199999) .$name. '.' .$file->extension(); // getClientOriginalExtension()
            $file->move(public_path($path), $imageName);
            $move = $path.'/'.$imageName;
            return $move;
    }
    public static function deleteOldImage(string $path)
    {
        if (is_file($path))
        {
            return unlink(public_path($path));
        }
        else
            return false;
    }
}
