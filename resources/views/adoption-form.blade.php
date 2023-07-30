@php
    $animalTypesAsOptions = array_map(function ($animalType) {
        return [
            'value' => $animalType['id'],
            'label' => $animalType['type'],
            'description' => $animalType['description'],
        ];
    }, $animalTypes->toArray());
    
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
    
    $user = Auth::user();
@endphp

<x-layout.user>
    {{-- <livewire:animal-card :animal='$animal' /> --}}
    <form method="POST" action="{{ route('adoption:create') }}" enctype="multipart/form-data">
        @csrf
        <input name="animal_id" class="hidden" value="{{ $animal->id }}">
        <input name="user_id" class="hidden" value="{{ $user->id }}">
        <h1 class="pt-10 pb-6 text-3xl font-bold text-center">Fill Up Adoption Form</h1>
        <div class="flex justify-center p-4">
            <div class="p-16 bg-white border border-gray-200 border-solid md:w-9/12 rounded-xl drop-shadow-xl">
                <div class="space-y-4">
                    <h2 class="text-2xl font-bold border-b-2 border-solid border-slate-950">Adopting Animal</h2>
                    <div class="flex items-center pb-4 gap-8 px-2">
                        <x-image :image="$animal->thumbnail" id="{{ $animal->id }}"
                            class="adopting-animal-image-preview object-cover w-64 h-64" />
                        <div>
                            <p><span class="font-bold">Name: </span>{{ $animal->name }}</p>
                            <p><span class="font-bold">Age: </span>{{ $animal->age_months_string }}</p>
                            <p><span class="font-bold">Type: </span>{{ $animal->type->type }}</p>
                            <p><span class="font-bold">Sex: </span>{{ $animal->sex->sex }}</p>
                            <p><span class="font-bold">Description: </span>{{ $animal->description }}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold border-b-2 border-solid border-slate-950">Applicant's Info</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.text label="First Name" value="{{ $user->first_name }}" required disabled />
                        <x-forms.input.text label="Last name" value="{{ $user->last_name }}" required disabled />
                    </div>

                    <x-forms.input.text label="Address Line" value="{{ $user->address->address_line_1 }}" required
                        disabled />

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.text label="Barangay" value="{{ $user->address->barangay->name }}" required
                            disabled />
                        <x-forms.input.text label="Municipality" value="{{ $user->address->municipality->name }}"
                            required disabled />
                        <x-forms.input.text label="Province" value="{{ $user->address->province->name }}" required
                            disabled />
                        <x-forms.input.text label="Region" value="{{ $user->address->region->name }}" required
                            disabled />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.text label="Phone" value="{{ $user->phone }}" required disabled />
                        <x-forms.input.text label="Email" value="{{ $user->email }}" required disabled />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.date label="Birthdate" value="{{ $user->birthdate }}"
                            max="{{ now()->toDateString('Y-m-d') }}" required disabled />
                        <x-forms.input.text label="Civil Status" value="{{ $user->civil_status }}" required disabled />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.text label="Occupation" value="{{ $user->occupation }}" disabled required />
                        <x-forms.input.text label="Social Media" value="{{ $user->social_media }}" disabled required />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        <x-forms.input.options name="prompted_to_adopt[]" label="What prompted you to adopt?"
                            :options="$promptedToAdoptOptions" horizontal multiple required />
                        <x-forms.input.options name="adopted_before" label="Have you adopted before?" :options="$yesOrNoOptions"
                            horizontal required />
                    </div>


                    <h2 class="pt-12 text-2xl font-bold border-b-2 border-solid border-slate-950">Questionaire</h2>
                    <p class="py-4 text-sm text-justify">In an effort to help the process go smoothly, please be as
                        detailed as possible with your responses to the questions below.</p>

                    <div class="grid grid-cols-1 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                        {{-- <x-forms.input.options name="looking_to_adopt" label="What are you looking to adopt?"
                        :options="$animalTypesAsOptions" horizontal required /> --}}

                        <x-forms.input.options name="to_adopt_a_specific_shelter_animal"
                            label="Are you applying to adopt a specific shelter animal?" :options="$yesOrNoOptions" horizontal
                            required />

                        <x-forms.input.textarea name="describe_ideal"
                            label="Describe your ideal pet, including its sex, age, appearance, temperament, etc."
                            required />

                        <x-forms.input.options name="type_of_building" label="What type of building do you live in?"
                            :options="$typeOfBuildingsOptions" horizontal required />

                        <x-forms.input.text name="happens_to_pet" label="What happens to your pet if or when you move?"
                            required />

                        <x-forms.input.options name="live_with[]" label="Who do you live with?" :options="$liveWithOptions"
                            horizontal required multiple />

                        <x-forms.input.options name="allergic_to_animals"
                            label="Are any members of your household allergic to animals?" :options="$yesOrNoOptions" horizontal
                            required />

                        <x-forms.input.text name="responsible"
                            label="Who will be responsible for feeding, grooming, and generally caring
                        for your pet?"
                            required />

                        <x-forms.input.text name="financially_responsible"
                            label="Who will be financially responsible for your pet’s needs (i.e. food,
                    vet bills, etc.)?"
                            required />

                        <x-forms.input.text name="average_workday"
                            label="How many hours in an average workday will your pet be left alone?" required />

                        <x-forms.input.textarea name="steps_to_introduce"
                            label="What steps will you take to introduce your new pet to his/her new
                        surroundings?"
                            required />

                        <x-forms.input.options name="everyone_supports"
                            label="Does everyone in the family support your decision to adopt a pet?" :options="$yesOrNoOptions"
                            horizontal required />

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

                        <x-forms.input.image-upload id="adoption-form-images" name="image"
                            label="We value your privacy. Your photos will not be used for
                        purposes other than this adoption application"
                            required multiple />
                    </div>

                    <div class="flex items-center justify-center pt-4">
                        <button type="submit"
                            class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Submit
                        </button>
                    </div>


                </div>
            </div>
        </div>
    </form>
</x-layout.user>
