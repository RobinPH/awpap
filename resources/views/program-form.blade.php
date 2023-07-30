@php
    $user = Auth::user();
    
    $animalTypesAsOptions = array_map(function ($animalType) {
        return [
            'value' => $animalType['id'],
            'label' => $animalType['type'],
            'description' => $animalType['description'],
        ];
    }, $animalTypes->toArray());
    
    $programsAsOptions = array_map(function ($program) {
        return [
            'value' => $program['id'],
            'label' => $program['name'],
            'description' => $program['description'],
        ];
    }, $programs->toArray());
@endphp


<x-layout.user>
    <form method="POST" action="{{ route('program-form:create') }}" enctype="multipart/form-data">
        @csrf

        <input class="hidden" name="user_id" value="{{ $user->id }}" />
        <h1 class="pt-10 pb-6 text-3xl font-bold text-center">Fill Up Program Form</h1>
        <div class="flex justify-center p-4">
            <div class="p-16 bg-white border border-gray-200 border-solid md:w-9/12 rounded-xl drop-shadow-xl">
                <div>
                    <h2 class="text-2xl font-bold border-b-2 border-solid border-slate-950">Owner's Info</h2>
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


                    <h2 class="pt-12 text-2xl font-bold border-b-2 border-solid border-slate-950">Pet's Info</h2>
                    <p class="py-4 text-sm">NOTE: At the moment, you can only book one Patient Type in a single booking.
                        You
                        can submit a new booking if you want to book another Patient Type.</b></p>

                    <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                        <x-forms.input.select name="type_id" label="Patient Type" :options="$animalTypesAsOptions"
                            placeholder="Select Patient Type" horizontal required />
                        <x-forms.input.text name="breed" label="Breed" placeholder="Breed" required />
                        <x-forms.input.text type="number" name="how_many" label="How many?" value="1"
                            placeholder="" required />
                    </div>

                    <h2 class="pt-12 text-2xl font-bold border-b-2 border-solid border-slate-950">Appointment</h2>
                    <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                        <x-forms.input.select name="program_id" label="Program Type" :options="$programsAsOptions"
                            placeholder="Select Program Type" horizontal required />
                        <x-forms.input.date name="appointment_date" label="Date"
                            min="{{ now()->toDateString('Y-m-d') }}" required disabled />
                    </div>

                    <x-forms.input.textarea name="other_information" label="Other information about your pet?"
                        required />

                    <x-forms.input.image-upload id="appointment-images" name="image"
                        label="Please upload photos of your pet/s (head, body [top and side
                            view], and gentitals)"
                        required multiple />

                    {{-- <p class="pt-4 lg:pt-1 lg:pt-8 lg:pb-2">Please upload photos of your pet/s (head, body [top and side
                    view], and gentitals)</p>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:bg-gray-100 ">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-700" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-700"><span class="font-semibold">Click to upload</span> or
                                drag and drop</p>
                            <p class="text-xs text-gray-600 ">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div> --}}

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
