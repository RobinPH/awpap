<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\AnimalNickname;
use App\Models\AnimalSex;
use App\Models\AnimalType;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sexes = AnimalSex::all();
        $types = AnimalType::all();

        for ($i = 0; $i < 10; $i++) {
            $animal = Animal::query()->create([
                "name" => fake()->userName(),
                "type_id" => AnimalType::query()->inRandomOrder()->first()->id,
                "sex_id" => AnimalSex::query()->inRandomOrder()->first()->id,
                "birthdate" => date("Y/m/d H:i:s"),
                "description" => fake()->text(1024),
            ]);

            $nickname_count = rand(0, 3);

            for ($j = 0; $j < $nickname_count; $j++) {
                AnimalNickname::query()->create([
                    "nickname" => fake()->userName(),
                    "animal_id" => $animal->id,
                ]);
            }
        }
    }
}
