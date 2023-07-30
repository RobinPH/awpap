<?php

namespace App\Http\Controllers;

use App\Models\AdoptionForm;
use App\Models\AdoptionFormImage;
use App\Models\AdoptionFormStatus;
use App\Models\Animal;
use App\Models\AnimalType;
use App\Models\Image;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdoptionFormController extends Controller
{
    public function __construct(Request $request) {
        $this->middleware(function (Request $request, $next) {
            $inputs = $request->all();

            try {
                Validator::make($inputs, [
                    "animal_id" => ["required", "uuid", "exists:App\Models\Animal,id"],
                ])->validate();
            } catch (Exception $e) {
                return redirect()->route("animal");
            }

            return $next($request);
        });
    }

    public function create(Request $request) {
        $inputs = $request->all();

        // dd($inputs);
        Validator::make($inputs, [
            "user_id" => ["required", "uuid", "exists:App\Models\User,id"],
            "prompted_to_adopt" => ["required", "array", "min:1"],
            "prompted_to_adopt.*" => ["required", "string", "max:1024"],
            "adopted_before" => ["required", "string", "max:1024"],
            "to_adopt_a_specific_shelter_animal" => ["required", "string", "max:1024"],
            "describe_ideal" => ["required", "string", "max:1024"],
            "type_of_building" => ["required", "string", "max:1024"],
            "happens_to_pet" => ["required", "string", "max:1024"],
            "live_with" => ["required", "array", "min:1"],
            "live_with.*" => ["required", "string", "max:1024"],
            "allergic_to_animals" => ["required", "string", "max:1024"],
            "responsible" => ["required", "string", "max:1024"],
            "financially_responsible" => ["required", "string", "max:1024"],
            "average_workday" => ["required", "string", "max:1024"],
            "steps_to_introduce" => ["required", "string", "max:1024"],
            "everyone_supports" => ["required", "string", "max:1024"],
            "image" => ["required", "array", 'min:0'],
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

        $adoptionForm = AdoptionForm::query()->create([
            "animal_id" => $inputs["animal_id"],
            "user_id" => $inputs["user_id"],
            "prompted_to_adopt" => join(",", $inputs["prompted_to_adopt"]),
            "adopted_before" => $inputs["adopted_before"],
            "to_adopt_a_specific_shelter_animal" => $inputs["to_adopt_a_specific_shelter_animal"],
            "describe_ideal" => $inputs["describe_ideal"],
            "type_of_building" => $inputs["type_of_building"],
            "happens_to_pet" => $inputs["happens_to_pet"],
            "live_with" => join(",", $inputs["live_with"]),
            "allergic_to_animals" => $inputs["allergic_to_animals"],
            "responsible" => $inputs["responsible"],
            "financially_responsible" => $inputs["financially_responsible"],
            "average_workday" => $inputs["average_workday"],
            "steps_to_introduce" => $inputs["steps_to_introduce"],
            "everyone_supports" => $inputs["everyone_supports"],
            "adoption_form_status_id" => AdoptionFormStatus::where("name", "PENDING")->first()->id,
        ]);


        $storageImagePath = public_path() . "/storage/images/";

        if (!is_dir($storageImagePath)) {
            mkdir($storageImagePath, 0755, true);
        }

        foreach ($inputs["image"] as $image) {
            $created_image = Image::query()->create([
                "title" => 'image',
            ]);

            AdoptionFormImage::query()->create([
                'image_id' => $created_image->id,
                'adoption_form_id' => $adoptionForm->id,
            ]);

            $image->move($storageImagePath, $created_image->id);
        }

        return redirect()->route("profile:adoptions");
    }

    public function show(Request $request) {
        $inputs = $request->all();
        $animalTypes = AnimalType::all();
        $animal = Animal::query()->where("id", $inputs['animal_id'])->first();

        return view('adoption-form', [
            "animalTypes" => $animalTypes,
            "animal" => $animal,
        ]);
    }
}
