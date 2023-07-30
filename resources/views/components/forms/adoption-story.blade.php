@php
    $id = uniqid();
@endphp

<div class="flex flex-col w-full gap-4">
    <input type="text" name="adoption_id" value="{{ $adoption->id }}" class="hidden" required />

    @if (isset($story))
        <input type="text" name="story_id" value="{{ $story->id }}" class="hidden" required />
    @endif

    <x-forms.input.text name="title" label="Title" value="{{ isset($story) ? $story->title : null }}" required />

    <x-forms.input.textarea name="story" label="Story" value="{{ isset($story) ? $story->story : null }}" required />
</div>
