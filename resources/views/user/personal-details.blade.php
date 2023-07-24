@php
    $user = Auth::user();
@endphp

<x-layout.user.profile>
    <div class="flex flex-col w-full gap-4">
        <form method="POST" action={{ route('animal:sex:create') }} enctype="multipart/form-data">
            @csrf
            <input type="text" name="id" value="{{ $user->id }}" class="hidden" required />

            <div class="flex flex-row w-full">
                <x-forms.input.text name="first_name" label="First name" value="{{ $user->first_name }}" required />

                <x-forms.input.text name="last_name" label="Last name" value="{{ $user->last_name }}" required />
            </div>

            <x-forms.input.text type="email" name="email" label="Email" value="{{ $user->email }}" required
                disabled />

            <livewire:forms.input.address :address="$user->address" />

            <x-forms.input.image-upload id="user-profile-picture-{{ $user->id }}" name="image"
                :image="$user->profilePicture" />
        </form>
    </div>

</x-layout.user.profile>
