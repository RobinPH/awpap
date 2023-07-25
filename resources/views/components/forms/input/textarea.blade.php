<x-forms.input.wrapper :name="$name ?? null" :label="$label" required="{{ $required ?? false }}">
    <textarea class="textarea textarea-bordered" @if (isset($name)) name="{{ $name }}" @endif
        placeholder="{{ $placeholder ?? '' }}" {{ $required ?? false ? 'required' : '' }}
        {{ $disabled ?? false ? 'disabled' : '' }}>
@if (isset($value))
{{ $value }}
@endif
</textarea>
</x-forms.input.wrapper>
