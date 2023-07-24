<x-forms.input.wrapper :name="$name" :label="$label" required="{{ $required ?? false }}">
    <textarea class="textarea textarea-bordere" name="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
        {{ $required ?? false ? 'required' : '' }} {{ $disabled ?? false ? 'disabled' : '' }}>
@if (isset($value))
{{ $value }}
@endif
    </textarea>
</x-forms.input.wrapper>
