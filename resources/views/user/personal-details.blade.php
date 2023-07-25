@php
    $user = Auth::user();
    
    $civilStatusOptions = [
        [
            'value' => 'SINGLE',
        ],
        [
            'value' => 'MARRIED',
        ],
        [
            'value' => 'SEPARATED',
        ],
        [
            'value' => 'DIVORCED',
        ],
    ];
    
@endphp

<x-layout.user.profile>
    <div class="flex flex-col w-full gap-4">
        <form method="POST" action={{ route('user:profile:edit') }} enctype="multipart/form-data">
            @csrf
            <input type="text" name="id" value="{{ $user->id }}" class="hidden" required />

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                <x-forms.input.text name="first_name" label="First name" value="{{ $user->first_name }}" required />

                <x-forms.input.text name="last_name" label="Last name" value="{{ $user->last_name }}" required />
            </div>

            <x-forms.input.text type="email" name="email" label="Email" value="{{ $user->email }}" required
                disabled />


            <x-forms.input.date name="birthdate" label="Birthdate" value="{{ $user->birthdate }}"
                max="{{ now()->toDateString('Y-m-d') }}" required />

            <x-forms.input.text type="text" name="phone" label="Phone" value="{{ $user->phone }}" />

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 lg:gap-y-2 lg:gap-x-12">
                <x-forms.input.text type="text" name="occupation" label="Occupation"
                    value="{{ $user->occupation }}" />
                <x-forms.input.text type="text" name="social_media" label="Social Media Link"
                    value="{{ $user->social_media }}" />
            </div>



            <x-forms.input.options name="civil_status" label="Civil Status" :options="$civilStatusOptions"
                selected="{{ $user->civil_status }}" horizontal required />

            <livewire:forms.input.address :address="$user->address" />

            <x-forms.input.image-upload id="user-profile-picture-{{ $user->id }}" label="Profile Picture"
                name="image" :image="$user->profilePicture" preview />

            <button class="btn btn-success w-full my-4" type="submit">Save Personal Details</button>
        </form>
    </div>

</x-layout.user.profile>
