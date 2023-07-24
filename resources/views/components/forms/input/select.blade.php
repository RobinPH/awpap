<x-forms.input.wrapper :name="$name" :label="$label" required="{{ $required ?? false }}">
    <select class="w-full select select-bordered" name="{{ $name }}" wire:change="{{ $onchange }}"
        {{ $required ?? false ? 'required' : '' }} {{ ($disabled ?? false) || count($options) == 0 ? 'disabled' : '' }}>

        @if (isset($placeholder))
            <option disabled {{ $value ?? false ? '' : 'selected' }}>{{ $placeholder }}</option>
        @endif
        @foreach ($options as $option)
            <option value="{{ $option['value'] }}" {{ isset($value) && $value == $option['value'] ? 'selected' : '' }}>
                {{ $option['label'] }}
            </option>
        @endforeach
    </select>
</x-forms.input.wrapper>
