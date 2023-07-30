<?php

namespace Database\Seeders;

use App\Models\AdoptionForm;
use App\Models\AdoptionFormStatus;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdoptionFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 6; $i++) {
            $animal = Animal::query()->inRandomOrder()->whereRaw("adopted_at IS NULL")->first();

            if ($animal) {
                $user = User::query()->inRandomOrder()->first();

                AdoptionForm::query()->create([
                    "user_id" => $user->id,
                    "animal_id" => $animal->id,
                    "prompted_to_adopt" => "Friend,Social Media",
                    "adopted_before" => "Yes",
                    "to_adopt_a_specific_shelter_animal" => "Yes",
                    "describe_ideal" => "describe_ideal",
                    "type_of_building" => "House",
                    "happens_to_pet" => "happens_to_pet",
                    "live_with" => "Children (<18),Parents",
                    "allergic_to_animals" => "Yes",
                    "responsible" => "responsible",
                    "financially_responsible" => "financially_responsible",
                    "average_workday" => "average_workday",
                    "steps_to_introduce" => "steps_to_introduce",
                    "everyone_supports" => "everyone_supports",
                    "adoption_form_status_id" => AdoptionFormStatus::where("name", "PENDING")->first()->id,
                ]);
            }
        }
    }
}
