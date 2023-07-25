@php
    $user = Auth::user();
@endphp

<x-layout.user.profile>
    <h1 class="text-xl font-bold">Your Volunteer Works</h1>
    <div class="flex flex-col w-full">
        @foreach ($user->volunteer_submissions as $volunteer_submission)
            <div>{{ $loop->iteration }}. {{ $volunteer_submission->work->name }}</div>
        @endforeach
    </div>

</x-layout.user.profile>
