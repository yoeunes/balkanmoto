<?php

namespace App\Observers;

use App\Image;
use Illuminate\Support\Facades\Storage;

class ImageObserver
{
    /**
     * Handle the image "deleting" event.
     *
     * @param Image $image
     *
     * @return void
     */
    public function deleting(Image $image)
    {
        Storage::delete($image->filename);
        Storage::delete($image->thumbnail);
    }
}
