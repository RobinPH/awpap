<?php

namespace App\Http\Controllers\Admin\Animals;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfilesController extends Controller
{
    public function create(Request $request) {
        $inputs = $request->all();


        Validator::make($inputs, [
            'name' => ['required', 'string', 'max:255'],
            'sex_id' => ["required", "uuid", "exists:App\Models\AnimalSex,id"],
            'type_id' => ["required", "uuid", "exists:App\Models\AnimalType,id"],
            'birthdate' => ["required", "date"],
            'description' => ['string', 'max:2048', 'nullable'],
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

        $image = $request->file("image");

        if ($image) {
            $storageImagePath = public_path() . "/storage/images/";

            if (!is_dir($storageImagePath)) {
                mkdir($storageImagePath, 0755, true);
            }

            $thumbnail = Image::query()->create([
                "title" => $inputs["name"],
            ]);

            $image->move($storageImagePath, $thumbnail->id);
        }

        $animal = Animal::query()->create([
            'name' => $inputs['name'],
            'sex_id' => $inputs['sex_id'],
            'type_id' => $inputs['type_id'],
            'birthdate' => $inputs['birthdate'],
            'description' => $inputs['description'],
            'thumbnail_id' => $image && $thumbnail ? $thumbnail->id : null,
        ]);

        return redirect()->back();
    }

    public function edit(Request $request) {
        $inputs = $request->all();

        Validator::make($inputs, [
            'id' => ['required', 'uuid', "exists:App\Models\Animal,id"],
            'name' => ['required', 'string', 'max:255'],
            'sex_id' => ["required", "uuid", "exists:App\Models\AnimalSex,id"],
            'type_id' => ["required", "uuid", "exists:App\Models\AnimalType,id"],
            'birthdate' => ["required", "date"],
            'description' => ['string', 'max:2048', 'nullable'],
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

        $image = $request->file("image");

        $animal = Animal::query()->where("id", "=", $inputs["id"])->firstOrFail();

        if (!$animal) {
            return;
        }

        $animal->name = $inputs["name"];
        $animal->sex_id = $inputs["sex_id"];
        $animal->type_id = $inputs["type_id"];
        $animal->birthdate = $inputs["birthdate"];
        $animal->description = $inputs["description"];


        if ($image) {
            $storageImagePath = public_path() . "/storage/images/";

            if (!is_dir($storageImagePath)) {
                mkdir($storageImagePath, 0755, true);
            }

            $thumbnail = Image::query()->create([
                "title" => $inputs["name"],
            ]);

            $image->move($storageImagePath, $thumbnail->id);

            $animal->thumbnail_id = $thumbnail->id;
        }

        $animal->save();

        return redirect()->back();
    }
    public function show() {
        $animals = Animal::all();

        return view("admin.animals.profiles", [
            "animals" => $animals,
        ]);
    }
}
