@php
    $imagePreviewClass = 'w-48 h-auto mx-auto ' . ($imagePreviewClass ?? '');
    $imageInputClass = 'w-full file-input file-input-bordered ' . ($imageInputClass ?? '');
    
    $_name = isset($name) ? $name . (isset($multiple) ? '[]' : '') : null;
@endphp


<div>
    <x-forms.input.wrapper name="{{ $_name }}" label="{{ $label ?? 'Upload Image' }}"
        required="{{ $required ?? false }}">
        <x-slot name="label_top_right">
            Max. 2 MB
        </x-slot>
        <input type="file" name="{{ $_name }}" class="{{ $imageInputClass }}"
            onchange="document.getElementById('{{ $id }}').src = window.URL.createObjectURL(event.target.files[0])"
            accept="{{ $accept ?? '.jpeg,.jpg,.png,.webp' }}" {{ $required ?? false ? 'required' : '' }}
            {{ $disabled ?? false ? 'disabled' : '' }} {{ $multiple ?? false ? 'multiple' : '' }} />
    </x-forms.input.wrapper>
    <div>
        @if (isset($preview))
            @if (isset($image))
                <x-image :wire:key="$image->id" :image="$image" id="{{ $id }}"
                    class="{{ $imagePreviewClass }}" />
            @else
                <img id="{{ $id }}" class="{{ $imagePreviewClass }}" />
            @endif
        @endif
    </div>
</div>
