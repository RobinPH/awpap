@php
    $id = uniqid();
@endphp

<div class="flex flex-col w-full gap-4">
    @if (isset($sex))
        <input type="text" name="id" value="{{ $sex->id }}" class="hidden" required />
    @endif

    <x-forms.input.text name="type" label="Sex" value="{{ isset($sex) ? $sex->sex : null }}" required />

    <x-forms.input.textarea name="description" label="Description" value="{{ isset($sex) ? $sex->description : null }}"
        required />
</div>
