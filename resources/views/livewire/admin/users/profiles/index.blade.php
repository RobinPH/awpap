<div>
    <div class="navbar bg-slate-300">
        <div class="flex-1">
            <div class="form-control">
                <input wire:model.debounce.150ms="search" type="search" placeholder="Search"
                    class="w-24 input input-bordered md:w-auto" />
            </div>
        </div>
    </div>
    {{-- <div class="flex flex-row items-center gap-4 p-2 bg-slate-100">
        <div class="font-bold">
            Filter by:
        </div>
        @foreach (['ADMIN', 'USER'] as $user_type)
            <div>
                <input type="checkbox" wire:model.debounce.150ms="types" className="checkbox checkbox-success"
                    value="{{ $user_type }}" @if (in_array($user_type, $types)) checked @endif />
                {{ $user_type }}
            </div>
        @endforeach
    </div> --}}

    <div wire:loading.delay class="w-full">
        <div class="flex flex-col items-center justify-center w-full m-auto">
            <p>Loading Users</p>
            <span class="loading loading-dots loading-lg"></span>
        </div>
    </div>

    <div wire:loading.delay.remove class="flex flex-col gap-4 mt-4">
        @foreach ($users as $user)
            <div :wire:key="$user->id">
                @include($card, ['user' => $user, 'keyword' => $search])
            </div>
        @endforeach
    </div>
</div>
