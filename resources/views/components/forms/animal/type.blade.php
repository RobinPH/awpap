@php
    $id = uniqid();
@endphp

<div class="flex flex-col w-full gap-4">
    @if (isset($type))
        <input type="text" name="id" value="{{ $type->id }}" class="hidden" required />
    @endif

    <x-forms.input.text name="type" label="Type" value="{{ isset($type) ? $type->type : null }}" required />

    <x-forms.input.textarea name="description" label="Description" value="{{ isset($type) ? $type->description : null }}"
        required />
</div>
