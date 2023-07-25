@php
    $user = Auth::user();
@endphp

<x-layout.user>
    <h1 class="pt-10 pb-6 text-3xl font-bold text-center">Fill Up Volunteer Form</h1>

    <div class="flex-none p-4 md:flex md:justify-center">
        <div class="p-16 bg-white border border-gray-200 border-solid md:w-9/12 rounded-xl drop-shadow-xl">
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
                    <x-forms.input.text label="Municipality" value="{{ $user->address->municipality->name }}" required
                        disabled />
                    <x-forms.input.text label="Province" value="{{ $user->address->province->name }}" required
                        disabled />
                    <x-forms.input.text label="Region" value="{{ $user->address->region->name }}" required disabled />
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

                <form method="POST" action={{ route('user:volunteer:join') }}>
                    @csrf
                    <div class="pt-8 lg:px-32">
                        <label for="volunteer" class="">Type of Volunteer Work?<b class="text-red-500">*</b></p>
                            <div class="pb-4"></div>
                            <select name="volunteer_work_id" id="volunteer"
                                class="w-full p-2 border rounded-lg border-slate-400">

                                @foreach ($works as $work)
                                    <option value="{{ $work->id }}">{{ $work->name }}</option>
                                @endforeach

                            </select>
                    </div>

                    <div class="flex items-center justify-center pt-8">
                        <button type="submit"
                            class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-layout.user>
