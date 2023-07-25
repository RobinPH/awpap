<?php

namespace Database\Seeders;

use App\Models\AdoptionFormStatus;
use Illuminate\Database\Seeder;

class AdoptionFormStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = array(
            [
                'name' => 'PENDING',
                'description' => "Pending adoption",
            ],
            [
                'name' => 'PROCESSING',
                'description' => "Processing adoption",
            ],
            [
                'name' => 'APPROVED',
                'description' => "Approved adoption",
            ],
            [
                'name' => 'DENIED',
                'description' => "Denied adoption",
            ],
            [
                'name' => 'CANCELLED',
                'description' => "Cancelled adoption",
            ],
            [
                'name' => 'COMPLETED',
                'description' => "Completed adoption",
            ],
        );

        foreach ($statuses as $status) {
            AdoptionFormStatus::query()->create([
                "name" => $status["name"],
                "description" => $status["description"],
            ]);
        }
    }
}
