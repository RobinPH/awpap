<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AddressRegionSeeder::class,
            AddressProvinceSeeder::class,
            AddressMunicipalitySeeder::class,
            AddressBarangaySeeder::class,

            AnimalTypeSeeder::class,
            AnimalSexSeeder::class,
            ArticleSeeder::class,
            AnimalSeeder::class,
            PermissionSeeder::class,
            AdminSeeder::class,
            AdoptionFormStatusSeeder::class,
            AdoptionFormSeeder::class,
            AdoptionStorySeeder::class,

            VolunteerWorkSeeder::class,
            VolunteerSubmissionSeeder::class,

            ProgramSeeder::class,
            ProgramFormStatusSeeder::class,
        ]);
    }
}
