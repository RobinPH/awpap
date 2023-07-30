@php
    $id = uniqid();
    
    $statusesAsOptions = array_map(function ($status) {
        return [
            'value' => $status['id'],
            'label' => $status['name'],
            'description' => $status['description'],
        ];
    }, $statuses->toArray());
@endphp

<div class="flex flex-col w-full gap-4">
    <input name="adoption_id" value="{{ $adoption->id }}" class="hidden" />

    <div>
        <div class="card w-full bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Adopter</h2>
                <div class="flex items-center gap-4 px-2">
                    <x-image :image="$adoption->adopter->profilePicture" id="{{ $adoption->adopter->id }}"
                        class="adopting-animal-image-preview object-cover w-32 h-32" />

                    <div>
                        <p><span class="font-bold">Name: </span>{{ $adoption->adopter->first_name }}
                            {{ $adoption->adopter->last_name }}</p>
                        <p><span class="font-bold">Birthdate: </span>{{ $adoption->adopter->birthdate }}</p>
                        <p><span class="font-bold">Address: </span>{{ $adoption->adopter->full_address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="card w-full bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Adopting</h2>
                <div class="flex items-center gap-4 px-2">
                    <x-image :image="$adoption->animal->thumbnail" id="{{ $adoption->animal->id }}"
                        class="adopting-animal-image-preview object-cover w-32 h-32" />

                    <div>
                        <p><span class="font-bold">Name: </span>{{ $adoption->animal->name }}</p>
                        <p><span class="font-bold">Type: </span>{{ $adoption->animal->type->type }}</p>
                        <p><span class="font-bold">Birthdate: </span>{{ explode(' ', $adoption->animal->birthdate)[0] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-forms.input.select name="adoption_form_status_id" label="Status"
        value="{{ isset($adoption) ? $adoption->adoption_form_status_id : null }}" :options="$statusesAsOptions" required />
</div>
