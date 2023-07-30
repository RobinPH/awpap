<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = array("Kapon" => "Description for Kapon", "Anti-Rabies" => "Description for Anti-Rabies", "Vaccine" => "Description for Vaccine", "Checkup" => "Description for Checkup");

        foreach ($programs as $name => $description) {
            Program::query()->create([
                "name" => $name,
                "description" => $description,
            ]);
        }
    }
}
