<x-forms.input.wrapper :name="$name ?? null" :label="$label" required="{{ $required ?? false }}">
    <select class="w-full select select-bordered" @if (isset($name)) name="{{ $name }}" @endif
        wire:change="{{ $onchange ?? '' }}" {{ $required ?? false ? 'required' : '' }}
        {{ $disabled ?? false ? 'disabled' : '' }}>

        @if (isset($placeholder))
            <option value disabled {{ $value ?? false ? '' : 'selected' }}>{{ $placeholder }}</option>
        @endif
        @foreach ($options as $option)
            <option value="{{ $option['value'] }}" {{ isset($value) && $value == $option['value'] ? 'selected' : '' }}>
                {{ $option['label'] }}
            </option>
        @endforeach
    </select>
</x-forms.input.wrapper>
