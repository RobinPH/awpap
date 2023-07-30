@php
    $user = Auth::user();
@endphp

<x-layout.user.profile>
    <h1 class="text-xl font-bold">Your Appointments</h1>
    <div class="flex flex-col w-full gap-4">
        @foreach ($user->programs as $schedule)
            <div class="flex flex-row items-center w-auto p-4 rounded-sm shadow-md bg-stone-300">
                <div class="items-start ml-3">
                    <div class="flex gap-1">
                        <div class="font-bold">Owner:</div>
                        {{ $schedule->user->full_name }}
                    </div>
                    <div class="flex gap-1">
                        <div class="font-bold">Patient Type:</div>
                        {{ $schedule->patient_type->type }}
                    </div>
                    <div class="flex gap-1">
                        <div class="font-bold">Breed:</div>
                        {{ $schedule->breed }}
                    </div>
                    <div class="flex gap-1">
                        <div class="font-bold">Count:</div>
                        {{ $schedule->how_many }}
                    </div>
                    <div class="flex gap-1">
                        <div class="font-bold">Program:</div>
                        {{ $schedule->program->name }}
                    </div>
                    <div class="flex gap-1">
                        <div class="font-bold">Appointment Date:</div>
                        {{ $schedule->appointment_date }}
                    </div>
                    <div class="flex gap-1">
                        <div class="font-bold">Status:</div>
                        {{ $schedule->status->name }}
                    </div>
                    <div class="flex gap-1">
                        <div class="font-bold">Other Informations:</div>
                        {{ $schedule->other_information }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.user.profile>
