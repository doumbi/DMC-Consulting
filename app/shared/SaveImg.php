<?php


namespace App\Shared;


class SaveImg
{
    public function saveImg($img, $attr="imageService")
    {
        if($img->hasfile($attr))
        {
            $file = $img->file($attr);
            $filename = $img->file($attr)->get();
            $file->move("imageService", $filename);
        }
    }
}
