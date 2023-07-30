<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Program;
use App\Models\ProgramForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProgramsController extends Controller
{
    public function create(Request $request) {
        $inputs = $request->all();

        Validator::make($inputs, [
            'name' => ['required', 'string', 'unique:App\Models\Program,name', 'max:255'],
            'description' => ['string', 'max:2048', 'nullable'],
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ], [
            "type.unique" => 'Program "' . $inputs["name"] . '" already exists',
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

        $program = Program::query()->create([
            'name' => $inputs['name'],
            'description' => $inputs['description'],
            'thumbnail_id' => $image && $thumbnail ? $thumbnail->id : null,
        ]);

        return redirect()->back();
    }

    public function edit(Request $request) {
        $inputs = $request->all();


        Validator::make($inputs, [
            'name' => ['required', 'string', 'max:255', Rule::unique('programs', "name")->ignore($inputs["id"], "id")],
            'description' => ['string', 'max:2048', 'nullable'],
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

        $program = Program::query()->where("id", "=", $inputs["id"])->firstOrFail();

        if (!$program) {
            return;
        }

        $image = $request->file("image");

        $program->name = $inputs["name"];
        $program->description = $inputs["description"];

        if ($image) {
            $storageImagePath = public_path() . "/storage/images/";

            if (!is_dir($storageImagePath)) {
                mkdir($storageImagePath, 0755, true);
            }

            $thumbnail = Image::query()->create([
                "title" => $inputs["name"],
            ]);

            $image->move($storageImagePath, $thumbnail->id);

            $program->thumbnail_id = $thumbnail->id;
        }


        $program->save();

        return redirect()->back();
    }
    public function showTypes() {
        $programs = Program::all();
        return view("admin.programs.types", [
            "programs" => $programs,
        ]);
    }

    public function showSchedules() {
        $schedules = ProgramForm::all();
        return view("admin.programs.schedules", [
            "schedules" => $schedules,
        ]);
    }
}
