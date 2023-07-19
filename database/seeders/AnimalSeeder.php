<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\AnimalNickname;
use App\Models\AnimalSex;
use App\Models\AnimalType;
use App\Models\Image;
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

        $catsImages = array_filter(scandir(public_path() . "/assets/images/cats"), function ($path) {
            return !str_starts_with($path, ".");
        });

        $dogsImages = array_filter(scandir(public_path() . "/assets/images/dogs"), function ($path) {
            return !str_starts_with($path, ".");
        });

        $storageImagePath = public_path() . "/storage/images/";

        if (!is_dir($storageImagePath)) {
            mkdir($storageImagePath, 0755, true);
        }

        for ($i = 0; $i < 10; $i++) {
            $type = AnimalType::query()->inRandomOrder()->first();

            $imageList = $type->type == "CAT" ? $catsImages : $dogsImages;
            $imageDirectory = $type->type == "CAT" ? "/assets/images/cats" : "/assets/images/dogs";
            $animalName = fake()->userName();

            shuffle($imageList);

            $thumbnail = Image::query()->create([
                "title" => $animalName,
            ]);

            copy(public_path() . $imageDirectory . "/" . $imageList[0]  , $storageImagePath . $thumbnail->id);


            $animal = Animal::query()->create([
                "name" => $animalName,
                "type_id" => $type->id,
                "sex_id" => AnimalSex::query()->inRandomOrder()->first()->id,
                "thumbnail_id" => $thumbnail->id,
                "birthdate" => fake()->dateTimeBetween("-6 years", "-1 years"),
                "description" => fake()->text(512),
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
