<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    private function pathToImage($imageName)
    {
        // Construct the full path to the image within the storage directory
        $path = storage_path("app/public/images/{$imageName}");
        debug($path);

        // Check if the image exists; if not, return a 404 response
        if (!Storage::exists("public/images/{$imageName}")) {
            abort(404);
        }

        return $path;
    }

    /**
     * Display the specified image.
     *
     * @param  string  $imageName
     * @return \Illuminate\Http\Response
     */
    public function show($imageName)
    {
        $path = $this->pathToImage($imageName);
        // Return the image as a response
        return response()->file($path);
    }
}
