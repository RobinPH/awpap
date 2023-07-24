@php
    $regionsAsOptions = array_map(function ($region) {
        return [
            'value' => $region['id'],
            'label' => $region['name'] . ' (' . $region['description'] . ')',
        ];
    }, $regions);
    
    $provincesAsOptions = array_map(function ($province) {
        return [
            'value' => $province['id'],
            'label' => $province['name'],
        ];
    }, $provinces);
    
    $municipalitiesAsOptions = array_map(function ($municipality) {
        return [
            'value' => $municipality['id'],
            'label' => $municipality['name'],
        ];
    }, $municipalities);
    
    $barangaysAsOptions = array_map(function ($barangay) {
        return [
            'value' => $barangay['id'],
            'label' => $barangay['name'],
        ];
    }, $barangays);
    
    $user = Auth::user();
@endphp

<div class="w-full">
    <x-forms.input.text name="address_line_1" label="Address Line" value="{{ $address->address_line_1 }}" required />

    <x-forms.input.select name="region_id" label="Region" placeholder="Select Region" :options="$regionsAsOptions" :value="$region_id"
        onchange="setRegion($event.target.value)" required />

    <x-forms.input.select name="province_id" label="Province" placeholder="Select Province" :options="$provincesAsOptions"
        :value="$province_id" onchange="setProvince($event.target.value)" required />

    <x-forms.input.select name="municipality_id" label="Municipality" placeholder="Select Municipality"
        :value="$municipality_id" :options="$municipalitiesAsOptions" onchange="setMunicipality($event.target.value)" required />

    <x-forms.input.select name="barangay_id" label="Barangay" placeholder="Select Barangay" :options="$barangaysAsOptions"
        :value="$barangay_id" onchange="setBarangay($event.target.value)" required />
</div>
