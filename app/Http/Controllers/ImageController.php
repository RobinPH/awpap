<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function make(Request $request, string $key = "image") {
        $inputs = $request->all();

        $request->validate([
            [$key] => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $storageImagePath = public_path() . "/storage/images/";

        if (!is_dir($storageImagePath)) {
            mkdir($storageImagePath, 0755, true);
        }

        $image = Image::query()->create([
            "title" => $inputs["name"],
        ]);

        $request->file("image")->move($storageImagePath, $image->id);

        return $image;
    }
}
