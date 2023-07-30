<?php

namespace App\Http\Livewire\Forms\Input;

use App\Models\AddressBarangay;
use App\Models\AddressMunicipality;
use App\Models\AddressProvince;
use App\Models\AddressRegion;
use App\Models\UserAddress;
use Livewire\Component;

class Address extends Component
{
    /** @var Address $address */
    public $address;

    public $region_id;
    public $province_id;
    public $municipality_id;
    public $barangay_id;

    public $barangays = [];
    public $municipalities = [];
    public $provinces = [];
    public $regions = [];

    public function boot() {
        $this->regions = AddressRegion::all()->toArray();
    }

    public function mount(UserAddress $address) {
        $this->address = $address;

        $this->region_id = $this->address ? $this->address->region_id : null;
        $this->province_id = $this->address ? $this->address->province_id : null;
        $this->municipality_id = $this->address ? $this->address->municipality_id : null;
        $this->barangay_id = $this->address ? $this->address->barangay_id : null;

        $this->setRegion($this->region_id);
        $this->setProvince($this->province_id);
        $this->setMunicipality($this->municipality_id);
        $this->setBarangay($this->barangay_id);
    }

    public function setRegion(string|null $region_id) {
        $this->municipalities = [];
        $this->municipality_id = null;

        $this->barangays = [];
        $this->barangay_id = null;

        if ($region_id) {
            $this->provinces = AddressProvince::query()->where("region_id", "=", $region_id)->get()->toArray();
        } else {
            $this->provinces = [];
        }

        $this->province_id = null;

        $this->region_id = $region_id;
    }

    public function setProvince(string|null $province_id) {
        $this->barangays = [];
        $this->barangay_id = null;

        if ($province_id) {
            $this->municipalities = AddressMunicipality::query()->where("province_id", "=", $province_id)->get()->toArray();
        } else {
            $this->municipalities = [];
        }

        $this->municipality_id = null;

        $this->province_id = $province_id;
    }

    public function setMunicipality(string|null $municipality_id) {
        if ($municipality_id) {
            $this->barangays = AddressBarangay::query()->where("municipality_id", "=", $municipality_id)->get()->toArray();
        } else {
            $this->barangays = [];
        }

        $this->barangay_id = null;

        $this->municipality_id = $municipality_id;
    }

    public function setBarangay(string|null $barangay_id) {
        $this->barangay_id = $barangay_id;
    }


    public function render()
    {
        return view('livewire.forms.input.address');
    }
}
