@php
    $id = uniqid();
    
    $animalTypesAsOptions = array_map(function ($animalType) {
        return [
            'value' => $animalType['id'],
            'label' => $animalType['type'],
            'description' => $animalType['description'],
        ];
    }, $animalTypes->toArray());
    
    $animalSexesAsOptions = array_map(function ($animalSexes) {
        return [
            'value' => $animalSexes['id'],
            'label' => $animalSexes['sex'],
            'description' => $animalSexes['description'],
        ];
    }, $animalSexes->toArray());
@endphp

<div class="flex flex-col w-full gap-4">
    @if (isset($animal))
        <input type="text" name="id" value="{{ $animal->id }}" class="hidden" required />
    @endif

    <x-forms.input.text name="name" label="Name" value="{{ isset($animal) ? $animal->name : null }}" required />

    <x-forms.input.options name="sex_id" label="Sex" selected="{{ isset($animal) ? $animal->sex_id : null }}"
        :options="$animalSexesAsOptions" required />

    <x-forms.input.options name="type_id" label="Type" selected="{{ isset($animal) ? $animal->type_id : null }}"
        :options="$animalTypesAsOptions" required />

    <x-forms.input.date name="birthdate" label="Birthdate"
        value="{{ isset($animal) ? explode(' ', $animal->birthdate)[0] : null }}" required />

    <x-forms.input.textarea name="description" label="Description"
        value="{{ isset($animal) ? $animal->description : null }}" required />


    <x-forms.input.image-upload id="animal-thumbnail-preview-{{ $id }}" name="image" :image="isset($animal) ? $animal->thumbnail : null" />
</div>
