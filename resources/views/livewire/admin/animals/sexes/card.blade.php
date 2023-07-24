<div class="flex flex-row items-center w-auto h-24 rounded-sm shadow-md bg-stone-300">
    <div class="items-start ml-3">
        <p class="">
            <b>
                <x-highlight-text :keyword="$keyword">
                    {{ $sex->sex }}
                </x-highlight-text>
            </b>
        </p>
        <p class="">
            <x-highlight-text :keyword="$keyword">
                {{ $sex->description }}
            </x-highlight-text>
        </p>
    </div>
    <div class="ml-auto mr-5">
        <label for="edit_animal_sex_modal/{{ $sex->id }}" class="btn btn-success">
            <b>Update</b>
        </label>
    </div>

    <input type="checkbox" id="edit_animal_sex_modal/{{ $sex->id }}" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <form method="POST" action={{ route('animal:sex:edit') }} enctype="multipart/form-data"
                wire:key="edit_animal_sex_modal_form">
                @csrf
                <h1>
                    <b>Edit Animal Sex</b>
                </h1>
                <div class="py-4">
                    <x-forms.animal.sex :sex="$sex" />
                </div>
                <button class="w-full btn btn-success" type="submit">Edit Animal Sex</button>
            </form>
        </div>
        <label class="modal-backdrop" for="edit_animal_sex_modal/{{ $sex->id }}">Close</label>
    </div>
</div>
