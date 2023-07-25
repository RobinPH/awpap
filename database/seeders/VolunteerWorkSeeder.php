<?php

namespace Database\Seeders;

use App\Models\VolunteerWork;
use Illuminate\Database\Seeder;

class VolunteerWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $works = array(
            [
                'name' => 'Animal Care',
                'description' => "Description for Animal Care",
            ],
            [
                'name' => 'Office/Admin Work',
                'description' => "Description for Office/Admin Work",
            ],
            [
                'name' => 'Clinic',
                'description' => "Description for Clinic",
            ],
        );

        foreach ($works as $work) {
            VolunteerWork::query()->create([
                "name" => $work["name"],
                "description" => $work["description"],
            ]);
        }
    }
}
