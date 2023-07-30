<?php

namespace Database\Seeders;

use App\Models\AddressBarangay;
use App\Models\AddressMunicipality;
use Illuminate\Database\Seeder;

class AddressBarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (boolval(env("MIGRATE_ADDRESS_TABLES", true))) {
        $json = file_get_contents(public_path() . '/assets/json/address/' . 'barangay.json');

        $barangays = json_decode($json, true);

        $cache = array();

        foreach ($barangays as $barangay) {
            if (!$barangay["municipality_id"] || !$barangay["municipality_id"]) {
                continue;
            }

            if (array_key_exists($barangay["municipality_id"], $cache)) {
                $municipality = $cache[$barangay["municipality_id"]];
            } else {
                $municipality = AddressMunicipality::query()->where("real_id", "=", $barangay["municipality_id"])->first();
                $cache[$barangay["municipality_id"]] = $municipality;
            }

            if ($municipality) {
                AddressBarangay::query()->create([
                    "real_id" => $barangay["barangay_id"],
                    "municipality_id" => $municipality->id,
                    "name" => $barangay["barangay_name"],
                ]);

            }
        }
    }
    }
}
