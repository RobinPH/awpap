<div class="flex flex-row items-center w-auto rounded-sm shadow-md h-44 bg-stone-300">
    <div class="w-40 h-40 ml-2 min-w-fit">
        <x-image class="object-cover w-40 h-40" :image='$animal->thumbnail' defaultSrc="./assets/dog1.jpg" />
    </div>
    <div class="items-start ml-3">
        <p class="">
            <b>
                <x-highlight-text :keyword="$keyword">
                    {{ $animal->name }}
                </x-highlight-text>
            </b>
        </p>

        <p class="">{{ $animal->type->type }}</p>
        <p class="">{{ $animal->age }}</p>
        <p class="">{{ $animal->sex->sex }}</p>
        <p class="">
            <x-highlight-text :keyword="$keyword">
                {{ $animal->description }}
            </x-highlight-text>
        </p>
    </div>
    <div class="ml-auto mr-5">
        <label for="edit_animal_modal/{{ $animal->id }}" class="btn btn-success">
            <b>Update</b>
        </label>
    </div>

    <input type="checkbox" id="edit_animal_modal/{{ $animal->id }}" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <form method="POST" action={{ route('animal:profile:edit') }} enctype="multipart/form-data"
                wire:key="edit_animal_modal_form">
                @csrf
                <h1>
                    <b>Edit Animal Profile</b>
                </h1>
                <div class="py-4">
                    <x-forms.animal.profile :animalSexes="$animalSexes" :animalTypes="$animalTypes" :animal="$animal" />
                </div>
                <button class="w-full btn btn-success" type="submit">Edit Animal Profile</button>
            </form>
        </div>
        <label class="modal-backdrop" for="edit_animal_modal/{{ $animal->id }}">Close</label>
    </div>
</div>
