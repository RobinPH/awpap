@php
    $id = uniqid();
    
    $statusesAsOptions = array_map(function ($status) {
        return [
            'value' => $status['id'],
            'label' => $status['name'],
            'description' => $status['description'],
        ];
    }, $statuses->toArray());
@endphp

<div class="flex flex-col w-full gap-4">
    <input name="form_id" value="{{ $schedule->id }}" class="hidden" />

    <x-forms.input.select name="status_id" label="Status" value="{{ isset($schedule) ? $schedule->status_id : null }}"
        :options="$statusesAsOptions" required />
</div>
