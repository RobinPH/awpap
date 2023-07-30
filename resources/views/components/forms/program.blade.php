@php
    $id = uniqid();
@endphp

<div class="flex flex-col w-full gap-4">
    @if (isset($program))
        <input type="text" name="id" value="{{ $program->id }}" class="hidden" required />
    @endif

    <x-forms.input.text name="name" label="Name" value="{{ isset($program) ? $program->name : null }}" required />

    <x-forms.input.textarea name="description" label="Description"
        value="{{ isset($program) ? $program->description : null }}" required />

    <x-forms.input.image-upload id="program-thumbnail-preview-{{ $id }}" name="image" :image="isset($program) ? $program->thumbnail : null"
        preview />
</div>
