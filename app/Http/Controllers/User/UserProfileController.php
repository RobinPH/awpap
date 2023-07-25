<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{

    public function edit(Request $request) {
        $inputs = $request->all();

        $request->validate([
            "id" => ["required", "uuid", "exists:App\Models\User,id"],
            "first_name" => ["required", "string", "max:128"],
            "last_name" => ["required", "string", "max:128"],
            "phone" => ["required", "string", "max:11", "min:11", Rule::unique('users', "phone")->ignore($inputs["id"], "id")],
            "address_line_1" => ["required", "string", "max:128"],
            "occupation" => ["string", "max:128"],
            "social_media" => ["string", "max:128"],
            "birthdate" => ["required", "date"],
            "region_id" => ["required", "string", "exists:App\Models\AddressRegion,id"],
            "province_id" => ["required", "string", "exists:App\Models\AddressProvince,id"],
            "civil_status" => ["required","string", "max:128"],
            "municipality_id" => ["required", "string", "exists:App\Models\AddressMunicipality,id"],
            "barangay_id" => ["required", "string", "exists:App\Models\AddressBarangay,id"],
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = User::query()->where("id", "=", $inputs["id"])->first();

        $user->first_name = $inputs["first_name"];
        $user->last_name = $inputs["last_name"];
        $user->phone = $inputs["phone"];
        $user->birthdate = $inputs["birthdate"];
        $user->civil_status = $inputs["civil_status"];
        $user->occupation = $inputs["occupation"];
        $user->civil_status = $inputs["civil_status"];
        $user->social_media = $inputs["social_media"];


        $user->address->address_line_1 = $inputs["address_line_1"];
        $user->address->region_id = $inputs["region_id"];
        $user->address->province_id = $inputs["province_id"];
        $user->address->municipality_id = $inputs["municipality_id"];
        $user->address->barangay_id = $inputs["barangay_id"];

        $user->address->save();

        $image = $request->file("image");

        if ($image) {
            $storageImagePath = public_path() . "/storage/images/";

            if (!is_dir($storageImagePath)) {
                mkdir($storageImagePath, 0755, true);
            }

            $thumbnail = Image::query()->create([
                "title" => $inputs["first_name"] . " " . $inputs["last_name"],
            ]);

            $image->move($storageImagePath, $thumbnail->id);

            $user->profile_picture_id = $thumbnail->id;
        }

        $user->save();

        return redirect()->back();
    }

    public function showPersonalDetails() {
        return view("user.personal-details");
    }

    public function showVolunteerWorks() {
        return view("user.volunteer-works");
    }

    public function showAdoptions() {
        return view("user.adoptions");
    }
}
