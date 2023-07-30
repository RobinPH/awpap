@php
    $user = Auth::user();
@endphp

<x-layout.user.profile>
    <h1 class="text-xl font-bold">Your Adoptions</h1>
    <div class="flex flex-col w-full gap-4">
        @foreach ($user->adoptions as $adoption)
            <div class="flex flex-row items-center w-auto p-4 rounded-sm shadow-md bg-stone-300">
                <div class="flex gap-4">
                    <div class="w-40 h-40 ml-2 min-w-fit">
                        <x-image class="object-cover w-40 h-40" :image='$adoption->animal->thumbnail' defaultSrc="./assets/dog1.jpg" />
                    </div>
                    <div class="items-start ml-3">
                        <div class="flex gap-1">
                            <div class="font-bold">Adopter:</div>

                            <div>{{ $adoption->adopter->full_name }}</div>
                        </div>
                        <div class="flex gap-1">
                            <div class="font-bold">Adopting:</div>
                            <div>{{ $adoption->animal->name }} ({{ $adoption->animal->type->type }})</div>
                        </div>
                        <div class="flex gap-1">
                            <div class="font-bold">Status:</div>
                            <div>
                                {{ $adoption->status->name }}
                            </div>
                        </div>
                    </div>
                </div>

                @if ($adoption->story)
                    <div class="ml-auto mr-5">
                        <label for="edit_story_form/{{ $adoption->story->id }}" class="btn btn-success">
                            <b>Edit Adoption Story</b>
                        </label>
                    </div>
                    <input type="checkbox" id="edit_story_form/{{ $adoption->story->id }}" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box">
                            <form method="POST" action={{ route('adoption-story:edit') }} enctype="multipart/form-data"
                                wire:key="edit_story_form_form">
                                @csrf
                                <h1>
                                    <b>Edit Adoption Story</b>
                                </h1>
                                <div class="py-4">
                                    <x-forms.adoption-story :adoption="$adoption" :story="$adoption->story" />
                                </div>
                                <button class="w-full btn btn-success" type="submit">Edit Adoption Story</button>
                            </form>
                        </div>
                        <label class="modal-backdrop" for="edit_story_form/{{ $adoption->story->id }}">Close</label>
                    </div>
                @elseif ($adoption->status->name == 'COMPLETED')
                    <div class="ml-auto mr-5">
                        <label for="create_story_form/{{ $adoption->id }}" class="btn btn-success">
                            <b>Create Adoption Story</b>
                        </label>
                    </div>


                    <input type="checkbox" id="create_story_form/{{ $adoption->id }}" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box">
                            <form method="POST" action={{ route('adoption-story:create') }}
                                enctype="multipart/form-data" wire:key="create_story_form_form">
                                @csrf
                                <h1>
                                    <b>Create Adoption Story</b>
                                </h1>
                                <div class="py-4">
                                    <x-forms.adoption-story :adoption="$adoption" />
                                </div>
                                <button class="w-full btn btn-success" type="submit">Create Adoption Story</button>
                            </form>
                        </div>
                        <label class="modal-backdrop" for="create_story_form/{{ $adoption->id }}">Close</label>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

</x-layout.user.profile>
