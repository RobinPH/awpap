<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ProgramForm;
use App\Models\ProgramFormImage;
use App\Models\ProgramFormStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProgramFormController extends Controller
{
    public function create(Request $request) {
        $inputs = $request->all();


        // dd($inputs);
        Validator::make($inputs, [
            "user_id" => ["required", "uuid", "exists:App\Models\User,id"],
            "type_id" => ["required", "uuid", "exists:App\Models\AnimalType,id"],
            "breed" => ["required", "string", "max:128"],
            "how_many" => ["required", "integer"],
            "program_id" => ["required", "string", "exists:App\Models\Program,id"],
            "appointment_date" => ["required", "date"],
            "other_information" => ["required", "string", "max:2048"],
            "image" => ["required", "array", 'min:1'],
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

        $programForm = ProgramForm::query()->create([
            "user_id" => $inputs["user_id"],
            "type_id" => $inputs["type_id"],
            "breed" => $inputs["breed"],
            "how_many" => $inputs["how_many"],
            "program_id" => $inputs["program_id"],
            "status_id" => ProgramFormStatus::query()->where("name", "=", "PENDING")->first()->id,
            "appointment_date" => $inputs["appointment_date"],
            "other_information" => $inputs["other_information"],
        ]);


        $storageImagePath = public_path() . "/storage/images/";

        if (!is_dir($storageImagePath)) {
            mkdir($storageImagePath, 0755, true);
        }

        foreach ($inputs["image"] as $image) {
            $created_image = Image::query()->create([
                "title" => 'image',
            ]);

            ProgramFormImage::query()->create([
                'image_id' => $created_image->id,
                'program_form_id' => $programForm->id,
            ]);

            $image->move($storageImagePath, $created_image->id);
        }

        return redirect()->route("profile:programs");
    }

    public function edit(Request $request) {
        $inputs = $request->all();

        Validator::make($inputs, [
            "form_id" => ["required", "uuid", "exists:App\Models\ProgramForm,id"],
            "status_id" => ["required", "uuid", "exists:App\Models\ProgramFormStatus,id"],
        ])->validate();

        $form = ProgramForm::query()->where("id", '=', $inputs["form_id"])->first();

        $form->status_id = $inputs["status_id"];

        $form->save();

        return redirect()->back();
    }
}
