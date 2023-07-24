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
            AnimalSeeder::class,
            ArticleSeeder::class,
            PermissionSeeder::class,
            AdminSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
