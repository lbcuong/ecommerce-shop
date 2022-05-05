<?php

use Illuminate\Support\Facades\Storage;


function uploadFile($file, $path)
{
    return Storage::putFile($path, $file);
}

function retrieveNodes($categories, $prefix = '')
{
    foreach ($categories as $category) {
        echo "<option value='$category->id'>$prefix $category->name</option>";

        return retrieveNodes($category->children, $prefix . '-');
    }
}