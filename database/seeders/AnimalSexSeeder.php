<?php

namespace Database\Seeders;

use App\Models\AnimalSex;
use Illuminate\Database\Seeder;

class AnimalSexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sexes = array("MALE" => "Description for MALE", "FEMALE" => "Description for FEMALE");

        foreach ($sexes as $sex => $description) {
            AnimalSex::query()->create([
                "sex" => $sex,
                "description" => $description,
            ]);
        }
    }
}
