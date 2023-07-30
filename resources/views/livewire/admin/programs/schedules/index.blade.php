<div>
    <div class="navbar bg-slate-300">
        <div class="flex-1">
            <div class="form-control">
                <input wire:model.debounce.150ms="search" type="search" placeholder="Search"
                    class="w-24 input input-bordered md:w-auto" />
            </div>
        </div>
    </div>

    <div class="flex flex-row items-center gap-4 p-2 bg-slate-100">
        <div class="font-bold">
            Filter by Program:
        </div>
        @foreach ($programs as $program)
            <div>
                <input type="checkbox" wire:model.debounce.150ms="types" className="checkbox checkbox-success"
                    value="{{ $program->id }}" />
                {{ $program->name }}
            </div>
        @endforeach
    </div>

    <div wire:loading.delay class="w-full">
        <div class="flex flex-col items-center justify-center w-full m-auto">
            <p>Loading Schedules</p>
            <span class="loading loading-dots loading-lg"></span>
        </div>
    </div>

    <div wire:loading.delay.remove class="flex flex-col gap-4 mt-4">
        @foreach ($schedules as $schedule)
            <div :wire:key="$schedule->id">
                @include($card, ['schedule' => $schedule, 'keyword' => $search])
            </div>
        @endforeach
    </div>
</div>
