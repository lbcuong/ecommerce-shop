<?php

use Illuminate\Support\Facades\Storage;


function uploadFile($file, $path)
{
    return Storage::putFile($path, $file);
}