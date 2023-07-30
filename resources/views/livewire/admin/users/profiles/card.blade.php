<div class="flex flex-row items-center justify-between w-auto p-4 rounded-sm shadow-md bg-stone-300">
    <div class="flex items-center gap-4">
        <x-image :image="$user->profilePicture" id="{{ $user->id }}"
            class="object-cover w-48 h-48 adopting-animal-image-preview" />
        <div>
            <div class="flex gap-1">
                <div class="font-bold">Name:</div>
                <x-highlight-text :keyword="$keyword">
                    {{ $user->first_name }} {{ $user->last_name }}
                </x-highlight-text>
            </div>
            <div class="flex gap-1">
                <div class="font-bold">Birthdate:</div>
                {{ $user->birthdate }}
            </div>
            <div class="flex gap-1">
                <div class="font-bold">Address:</div>
                {{ $user->full_address }}
            </div>
            <div class="flex gap-1">
                <div class="font-bold">Type:</div>
                {{ $user->is_admin ? 'ADMIN' : 'USER' }}
            </div>
        </div>
    </div>
    <div class="flex gap-4">
        @if (Auth::user()->permissionCan('admin:edit:permissions'))
            <label for="edit_user_permissions_modal/{{ $user->id }}" class="btn btn-success">
                <b>Permissions</b>
            </label>

            <input type="checkbox" id="edit_user_permissions_modal/{{ $user->id }}" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box">
                    <form method="POST" action={{ route('user:edit:permissions') }} enctype="multipart/form-data"
                        wire:key="edit_user_permissions_modal_form">
                        @csrf
                        <h1>
                            <b>Edit User Permissions</b>
                        </h1>
                        <div class="py-4">
                            <livewire:forms.user.permission :user_id="$user->id" />
                        </div>
                        <button class="w-full btn btn-success" type="submit">Edit User Permissions</button>
                    </form>
                </div>
                <label class="modal-backdrop" for="edit_user_permissions_modal/{{ $user->id }}">Close</label>
            </div>
        @endif

        <label for="edit_user_modal/{{ $user->id }}" class="btn btn-success">
            <b>Update</b>
        </label>

        <input type="checkbox" id="edit_user_modal/{{ $user->id }}" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <form method="POST" action={{ route('user:profile:edit') }} enctype="multipart/form-data"
                    wire:key="edit_user_modal_form">
                    @csrf
                    <h1>
                        <b>Edit User Profile</b>
                    </h1>
                    <div class="py-4">
                        <x-forms.user.profile :user="$user" />
                    </div>
                    <button class="w-full btn btn-success" type="submit">Edit User Profile</button>
                </form>
            </div>
            <label class="modal-backdrop" for="edit_user_modal/{{ $user->id }}">Close</label>
        </div>
    </div>
</div>
