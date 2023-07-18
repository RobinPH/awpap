<?php

namespace Database\Seeders;

use App\Models\AnimalType;
use Illuminate\Database\Seeder;

class AnimalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = array("CAT" => "Description for cat", "DOG" => "Description for dog");

        foreach ($types as $type => $description) {
            AnimalType::query()->create([
                "type" => $type,
                "description" => $description,
            ]);
        }
    }
}
