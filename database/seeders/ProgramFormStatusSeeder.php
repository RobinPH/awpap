<?php

namespace Database\Seeders;

use App\Models\ProgramFormStatus;
use Illuminate\Database\Seeder;

class ProgramFormStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = array(
            [
                'name' => 'PENDING',
                'description' => "Pending appointment",
            ],
            [
                'name' => 'IN PROCESS',
                'description' => "In process appointment",
            ],
            [
                'name' => 'ATTENDED',
                'description' => "Attended appointment",
            ],
            [
                'name' => 'CANCELLED',
                'description' => "Cancelled appointment",
            ],
        );

        foreach ($statuses as $status) {
            ProgramFormStatus::query()->create([
                "name" => $status["name"],
                "description" => $status["description"],
            ]);
        }
    }
}
