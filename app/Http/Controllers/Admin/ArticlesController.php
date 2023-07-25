<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ArticlesController extends Controller
{
    public function create(Request $request) {
        $inputs = $request->all();


        Validator::make($inputs, [
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:127'],
            'date_published' => ["required", "date"],
            'description' => ['string', 'max:2048', 'nullable'],
            'link' => ['required', 'string', 'max:255'],
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

        $image = $request->file("image");

        if ($image) {
            $storageImagePath = public_path() . "/storage/images/";

            if (!is_dir($storageImagePath)) {
                mkdir($storageImagePath, 0755, true);
            }

            $thumbnail = Image::query()->create([
                "title" => $inputs["title"],
            ]);

            $image->move($storageImagePath, $thumbnail->id);
        }

        $article = Article::query()->create([
            'title' => $inputs["title"],
            'author' => $inputs["author"],
            'date_published' => $inputs["date_published"],
            'description' => $inputs["description"],
            'link' => $inputs["link"],
            'thumbnail_id' => $image && $thumbnail ? $thumbnail->id : null,
        ]);

        return redirect()->back();
    }

    public function edit(Request $request) {
        $inputs = $request->all();

        Validator::make($inputs, [
            'id' => ['required', 'uuid', "exists:App\Models\Article,id"],
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:127'],
            'date_published' => ["required", "date"],
            'description' => ['string', 'max:2048', 'nullable'],
            'link' => ['required', 'string', 'max:255'],
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

        $image = $request->file("image");

        $article = Article::query()->where("id", "=", $inputs["id"])->firstOrFail();

        if (!$article) {
            return;
        }

        $article->title = $inputs["title"];
        $article->author = $inputs["author"];
        $article->date_published = $inputs["date_published"];
        $article->description = $inputs["description"];
        $article->link = $inputs["link"];


        if ($image) {
            $storageImagePath = public_path() . "/storage/images/";

            if (!is_dir($storageImagePath)) {
                mkdir($storageImagePath, 0755, true);
            }

            $thumbnail = Image::query()->create([
                "title" => $inputs["title"],
            ]);

            $image->move($storageImagePath, $thumbnail->id);

            $article->thumbnail_id = $thumbnail->id;
        }

        $article->save();

        return redirect()->back();
    }
    public function show() {
        $articles = Article::all();

        return view("admin.articles", [
            "articles" => $articles,
        ]);
    }
}
