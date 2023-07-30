<?php

namespace Database\Seeders;

use App\Models\AddressRegion;
use Illuminate\Database\Seeder;

class AddressRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (boolval(env("MIGRATE_ADDRESS_TABLES", true))) {

            $json = file_get_contents(public_path() . '/assets/json/address/' . 'region.json');

            $regions = json_decode($json, true);

            foreach ($regions as $region) {
            AddressRegion::query()->create([
                "real_id" => $region["region_id"],
                "name" => $region["region_name"],
                "description" => $region["region_description"],
            ]);
        }
    }
    }
}
