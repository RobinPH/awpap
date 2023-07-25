<x-forms.input.wrapper :name="$name ?? null" :label="$label" required="{{ $required ?? false }}">
    <input type="{{ $type ?? 'text' }}" @if (isset($name)) name="{{ $name }}" @endif
        placeholder="{{ $placeholder ?? '' }}" class="w-full input input-bordered"
        value="{{ isset($value) ? $value : '' }}" {{ $required ?? false ? 'required' : '' }}
        {{ $disabled ?? false ? 'disabled' : '' }} />
</x-forms.input.wrapper>
