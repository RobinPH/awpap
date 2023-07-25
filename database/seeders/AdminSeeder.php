<?php

namespace Database\Seeders;

use App\Models\AddressBarangay;
use App\Models\AddressMunicipality;
use App\Models\AddressProvince;
use App\Models\AddressRegion;
use App\Models\Permission;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UsersPermission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = Permission::all();

        $region = AddressRegion::query()->inRandomOrder()->first();
        $province = AddressProvince::query()->inRandomOrder()->where("region_id", "=", $region->id)->first();
        $municipality = AddressMunicipality::query()->inRandomOrder()->where("province_id", "=", $province->id)->first();
        $barangay = AddressBarangay::query()->inRandomOrder()->where("municipality_id", "=", $municipality->id)->first();

        $address = UserAddress::query()->create([
            'address_line_1' => "123 Rizal St.",
            'region_id' => $region->id,
            'province_id' => $province->id,
            'municipality_id' => $municipality->id,
            'barangay_id' => $barangay->id,
        ]);

        $admin = User::create([
            'first_name' => "Admin",
            'last_name' => "Furfecto",
            'address_id' => $address->id,
            'phone' => '09123456789',
            'birthdate' => date("Y-m-d H:i:s"),
            'email' => "admin@furfecto.com",
            'password' => Hash::make("password"),
        ]);

        foreach ($permissions as $permission) {
            UsersPermission::query()->create([
                "user_id" => $admin->id,
                "permission_id" => $permission->id,
            ]);
        }
    }
}
