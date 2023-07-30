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
            <x-highlight-text :keyword="$keyword">
                {{ $schedule->breed }}
            </x-highlight-text>
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
    <div class="ml-auto mr-5">
        <label for="edit_program_schedule_modal/{{ $schedule->id }}" class="btn btn-success">
            <b>Update</b>
        </label>
    </div>

    <input type="checkbox" id="edit_program_schedule_modal/{{ $schedule->id }}" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <form method="POST" action={{ route('program-form:edit') }} enctype="multipart/form-data"
                wire:key="edit_program_schedule_modal_form">
                @csrf
                <h1>
                    <b>Edit Program Schedule</b>
                </h1>
                <div class="py-4">
                    <x-forms.program.schedule :schedule="$schedule" :statuses="$statuses" />
                </div>
                <button class="w-full btn btn-success" type="submit">Edit Program Schedule</button>
            </form>
        </div>
        <label class="modal-backdrop" for="edit_program_schedule_modal/{{ $schedule->id }}">Close</label>
    </div>
</div>
