@php
    $user = Auth::user();
    
@endphp

<x-layout.user.profile>
    <div class="h-screen">
        <h1 class="text-xl font-bold">Your Volunteer Works</h1>
        <div class="flex flex-col w-full">
            @foreach ($user->volunteer_submissions as $volunteer_submission)
                <div class="flex flex-row items-center w-auto p-4 rounded-sm shadow-md bg-stone-300">
                    <div class="items-start ml-3">
                        <div class="flex gap-1">
                            <div class="font-bold">Volunteer Type:</div>
                            {{ $volunteer_submission->work->name }}
                        </div>
                    </div>
            @endforeach
        </div>
    </div>

</x-layout.user.profile>
