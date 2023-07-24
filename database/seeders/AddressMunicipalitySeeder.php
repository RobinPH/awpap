<?php

namespace Database\Seeders;

use App\Models\AddressMunicipality;
use App\Models\AddressProvince;
use Illuminate\Database\Seeder;

class AddressMunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(public_path() . '/assets/json/address/' . 'municipality.json');

        $municipalities = json_decode($json, true);

        $cache = array();

        foreach ($municipalities as $municipality) {
            if (!$municipality["province_id"] || !$municipality["province_id"]) {
                continue;
            }

            if (array_key_exists($municipality["province_id"], $cache)) {
                $province = $cache[$municipality["province_id"]];
            } else {
                $province = AddressProvince::query()->where("real_id", "=", $municipality["province_id"])->first();
                $cache[$municipality["province_id"]] = $province;
            }

            if ($province) {
                AddressMunicipality::query()->create([
                    "real_id" => $municipality["municipality_id"],
                    "province_id" => $province->id,
                    "name" => $municipality["municipality_name"],
                ]);

            }
        }
    }
}
