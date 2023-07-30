@php
    
    $yesOrNoOptions = [
        [
            'value' => 'Yes',
        ],
        [
            'value' => 'No',
        ],
    ];
    
    $typeOfBuildingsOptions = [
        [
            'value' => 'House',
        ],
        [
            'value' => 'Condo',
        ],
        [
            'value' => 'Apartment',
        ],
        [
            'value' => 'Other',
        ],
    ];
    
    $liveWithOptions = [
        [
            'value' => 'Living alone',
        ],
        [
            'value' => 'Children (<18)',
        ],
        [
            'value' => 'Parents',
        ],
        [
            'value' => 'Children (18+)',
        ],
        [
            'value' => 'Spouse',
        ],
        [
            'value' => 'Roomate(s)',
        ],
    ];
    
    $promptedToAdoptOptions = [
        [
            'value' => 'Friend',
        ],
        [
            'value' => 'Social Media',
        ],
        [
            'value' => 'Website',
        ],
        [
            'value' => 'Other',
        ],
    ];
    
@endphp

<div class="flex flex-row items-center justify-between w-auto p-4 rounded-sm shadow-md bg-stone-300">
    <div class="flex gap-4">
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
    </div>
    <div class="flex gap-4">
        <div class="ml-auto mr-5">
            <label for="view_adoption_modal/{{ $adoption->id }}" class="btn btn-success">
                <b>View Form</b>
            </label>
        </div>

        <div class="ml-auto mr-5">
            <label for="edit_adoption_modal/{{ $adoption->id }}" class="btn btn-success">
                <b>Update</b>
            </label>
        </div>
    </div>

    <input type="checkbox" id="view_adoption_modal/{{ $adoption->id }}" class="modal-toggle" />
    <div class="modal">
        <div class="w-3/4 modal-box">
            <div class="py-4">
                <div>
                    <h2 class="text-2xl font-bold border-b-2 border-solid border-slate-950">Applicant's Info</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.text label="First Name" value="{{ $adoption->adopter->first_name }}" required
                            disabled />
                        <x-forms.input.text label="Last name" value="{{ $adoption->adopter->last_name }}" required
                            disabled />
                    </div>

                    <x-forms.input.text label="Address Line" value="{{ $adoption->adopter->address->address_line_1 }}"
                        required disabled />

                    <x-forms.input.text label="Barangay" value="{{ $adoption->adopter->address->barangay->name }}"
                        required disabled />
                    <x-forms.input.text label="Municipality"
                        value="{{ $adoption->adopter->address->municipality->name }}" required disabled />
                    <x-forms.input.text label="Province" value="{{ $adoption->adopter->address->province->name }}"
                        required disabled />
                    <x-forms.input.text label="Region" value="{{ $adoption->adopter->address->region->name }}" required
                        disabled />

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.text label="Phone" value="{{ $adoption->adopter->phone }}" required disabled />
                        <x-forms.input.text label="Email" value="{{ $adoption->adopter->email }}" required disabled />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.date label="Birthdate" value="{{ $adoption->adopter->birthdate }}"
                            max="{{ now()->toDateString('Y-m-d') }}" required disabled />
                        <x-forms.input.text label="Civil Status" value="{{ $adoption->adopter->civil_status }}"
                            required disabled />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.text label="Occupation" value="{{ $adoption->adopter->occupation }}" disabled
                            required />
                        <x-forms.input.text label="Social Media" value="{{ $adoption->adopter->social_media }}"
                            disabled required />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.options name="prompted_to_adopt[]" label="What prompted you to adopt?"
                            :options="$promptedToAdoptOptions" :selected="explode(',', $adoption->prompted_to_adopt)" horizontal multiple required disabled />
                        <x-forms.input.options name="adopted_before" label="Have you adopted before?" :options="$yesOrNoOptions"
                            :selected="$adoption->adopted_before" horizontal required disabled />
                    </div>


                    <h2 class="pt-12 text-2xl font-bold border-b-2 border-solid border-slate-950">Questionaire</h2>
                    <p class="py-4 text-sm text-justify">In an effort to help the process go smoothly, please be as
                        detailed as possible with your responses to the questions below.</p>

                    <div class="grid grid-cols-1 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.options name="to_adopt_a_specific_shelter_animal"
                            label="Are you applying to adopt a specific shelter animal?" :options="$yesOrNoOptions"
                            :selected="$adoption->to_adopt_a_specific_shelter_animal" horizontal required disabled />

                        <x-forms.input.textarea name="describe_ideal"
                            label="Describe your ideal pet, including its sex, age, appearance, temperament, etc."
                            value="{{ $adoption->describe_ideal }}" disabled required />

                        <x-forms.input.options name="type_of_building" label="What type of building do you live in?"
                            :options="$typeOfBuildingsOptions" :selected="$adoption->type_of_building" horizontal required disabled />

                        <x-forms.input.text name="happens_to_pet" label="What happens to your pet if or when you move?"
                            value="{{ $adoption->happens_to_pet }}" disabled required />

                        <x-forms.input.options name="live_with[]" label="Who do you live with?" :options="$liveWithOptions"
                            :selected="explode(',', $adoption->live_with)" horizontal required multiple disabled />

                        <x-forms.input.options name="allergic_to_animals"
                            label="Are any members of your household allergic to animals?" :options="$yesOrNoOptions"
                            :selected="$adoption->allergic_to_animals" horizontal required disabled />

                        <x-forms.input.text name="responsible"
                            label="Who will be responsible for feeding, grooming, and generally caring
                        for your pet?"
                            value="{{ $adoption->responsible }}" required disabled />

                        <x-forms.input.text name="financially_responsible"
                            label="Who will be financially responsible for your pet’s needs (i.e. food,
                    vet bills, etc.)?"
                            value="{{ $adoption->financially_responsible }}" required disabled />

                        <x-forms.input.text name="average_workday"
                            label="How many hours in an average workday will your pet be left alone?"
                            value="{{ $adoption->average_workday }}" required disabled />

                        <x-forms.input.textarea name="steps_to_introduce"
                            label="What steps will you take to introduce your new pet to his/her new
                        surroundings?"
                            value="{{ $adoption->steps_to_introduce }}" disabled required />

                        <x-forms.input.options name="everyone_supports"
                            label="Does everyone in the family support your decision to adopt a pet?" :options="$yesOrNoOptions"
                            :selected="$adoption->everyone_supports" horizontal required disabled />

                        <div class="pt-4 text-justify">
                            <p>Please attach photos of your home. This has replaced our on-site ocular inspections.</p>
                            <ul class="pl-4 list-decimal">
                                <li>Front of the house</li>
                                <li>Street Photo</li>
                                <li>Living room</li>
                                <li>Dining area</li>
                                <li>Kitchen</li>
                                <li>Bedroom/s (if your pet will have access)</li>
                                <li>Windows (if adopting a cat)</li>
                                <li>Front & backyard</li>
                            </ul>
                        </div>

                        {{-- <x-forms.input.image-upload id="adoption-form-images" name="image"
                            label="We value your privacy. Your photos will not be used for
                        purposes other than this adoption application"
                            required multiple /> --}}
                    </div>


                </div>
            </div>
        </div>
        <label class="modal-backdrop" for="view_adoption_modal/{{ $adoption->id }}">Close</label>
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
