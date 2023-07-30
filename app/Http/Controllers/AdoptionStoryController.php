<?php

namespace App\Http\Controllers;

use App\Models\AdoptionStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdoptionStoryController extends Controller
{
    public function create(Request $request) {
        $inputs = $request->all();

        Validator::make($inputs, [
            'adoption_id' => ["required", "uuid", "exists:App\Models\AdoptionForm,id"],
            'title' => ["required", "string", "max:128"],
            'story' => ["required", "string", "max:1024"],
        ])->validate();

        $story = AdoptionStory::query()->create([
            "adoption_id" => $inputs["adoption_id"],
            "title" => $inputs["title"],
            "story" => $inputs["story"],
        ]);

        return redirect()->back();
    }

    public function edit(Request $request) {
        $inputs = $request->all();

        Validator::make($inputs, [
            'story_id' => ["required", "uuid", "exists:App\Models\AdoptionStory,id"],
            'title' => ["required", "string", "max:128"],
            'story' => ["required", "string", "max:1024"],
        ])->validate();

        $story = AdoptionStory::query()->where("id", "=", $inputs["story_id"])->first();

        if ($story) {
            $story->title = $inputs["title"];
            $story->story = $inputs["story"];

            $story->save();
        }

        return redirect()->back();
    }
}
