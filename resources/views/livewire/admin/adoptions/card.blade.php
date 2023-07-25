<div class="flex flex-row items-center w-auto rounded-sm shadow-md h-44 bg-stone-300">
    <div class="w-40 h-40 ml-2 min-w-fit">
        <x-image class="object-cover w-40 h-40" :image='$adoption->animal->thumbnail' defaultSrc="./assets/dog1.jpg" />
    </div>
    <div class="items-start ml-3">
        <div class="flex gap-1">
            <div class="font-bold">Adopter:</div>
            <x-highlight-text :keyword="$keyword">
                {{ $adoption->adopter->full_name }}
            </x-highlight-text>
        </div>
        <div class="flex gap-1">
            <div class="font-bold">Adopting:</div>
            <x-highlight-text :keyword="$keyword">
                {{ $adoption->animal->name }} ({{ $adoption->animal->type->type }})
            </x-highlight-text>
        </div>
        <div class="flex gap-1">
            <div class="font-bold">Status:</div>
            <x-highlight-text :keyword="$keyword">
                {{ $adoption->status->name }}
            </x-highlight-text>
        </div>
    </div>
    <div class="ml-auto mr-5">
        <label for="edit_adoption_modal/{{ $adoption->id }}" class="btn btn-success">
            <b>Update</b>
        </label>
    </div>

    <input type="checkbox" id="edit_adoption_modal/{{ $adoption->id }}" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <form method="POST" action={{ route('adoption:edit') }} enctype="multipart/form-data"
                wire:key="edit_adoption_modal_form">
                @csrf
                <h1>
                    <b>Edit Adoption</b>
                </h1>
                <div class="py-4">
                    <x-forms.adoption :adoption="$adoption" :statuses="$statuses" />
                </div>
                <button class="w-full btn btn-success" type="submit">Edit Adoption</button>
            </form>
        </div>
        <label class="modal-backdrop" for="edit_adoption_modal/{{ $adoption->id }}">Close</label>
    </div>
</div>
