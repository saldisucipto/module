<?php

namespace App\Classes;

class ImageHandling
{
    // class image Files

    // Upload Images
    public function upload(Object $image, String $directory, String $image_name)
    {
        // Uploaded images and Rename Original Name Off Images
        $rename_image = preg_replace('/\s+/', '', $image->getClientOriginalName());
        // Pindahkan Image Ke Directory
        $folder_image = $directory . '/';
        // Membuat Nama Image Baru
        $name_image = $image_name . '-' . time() . '-' . $rename_image;
        // Finall Files Images
        $image->move($folder_image, $name_image);
        return $name_image;
    }

    // Update or Delete Images
    public function update(String $old_image, String $path)
    {
        // image path folde ron the server
        $image_path = public_path($path . '\\') . $old_image;
        // menghapus email di local memory
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
    }
}
