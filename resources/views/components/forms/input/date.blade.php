<x-forms.input.wrapper :name="$name" :label="$label" required="{{ $required ?? false }}">
    <input type="date" name="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
        class="w-full input input-bordered" value="{{ isset($value) ? $value : '' }}"
        {{ $required ?? false ? 'required' : '' }} {{ $disabled ?? false ? 'disabled' : '' }} />
</x-forms.input.wrapper>
