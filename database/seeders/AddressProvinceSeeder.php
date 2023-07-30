<?php

namespace Database\Seeders;

use App\Models\AddressProvince;
use App\Models\AddressRegion;
use Illuminate\Database\Seeder;

class AddressProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (boolval(env("MIGRATE_ADDRESS_TABLES", true))) {
            $json = file_get_contents(public_path() . '/assets/json/address/' . 'province.json');

        $provinces = json_decode($json, true);

        $cache = array();

        foreach ($provinces as $province) {
            if (!$province["province_id"] || !$province["region_id"]) {
                continue;
            }

            if (array_key_exists($province["region_id"], $cache)) {
                $region = $cache[$province["region_id"]];
            } else {
                $region = AddressRegion::query()->where("real_id", "=", $province["region_id"])->first();
                $cache[$province["region_id"]] = $region;
            }


            if ($region) {
                AddressProvince::query()->create([
                    "real_id" => $province["province_id"],
                    "region_id" => $region->id,
                    "name" => $province["province_name"],
                ]);

            }
        }
        }
    }
}
