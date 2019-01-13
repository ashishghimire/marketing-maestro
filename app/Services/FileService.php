<?php


namespace App\Services;


class FileService
{
    public function storeFile($file)
    {
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $size = $file->getClientSize();
        $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);
        $number = mt_rand(10000, 99999);
        $filename = $originalNameWithoutExt . '-' . $number . "." . $extension;
        return $filename;
    }
}