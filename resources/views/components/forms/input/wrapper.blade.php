<div class="w-full form-control">
    <label class="label">
        <span class="label-text">
            @if (isset($label))
                {{ $label }}
                @if (isset($required) && $required)
                    <span class="font-bold text-red-700 label-text">*</span>
                @endif
            @endif
        </span>
        @if (isset($label_top_right))
            <span class="label-text">{{ $label_top_right }}</span>
        @endif
    </label>
    {{ $slot }}
    <label class="label">
        @if (isset($name) && $errors->has($name))
            <span class="text-red-600 label-text">{{ $errors->first($name) }}</span>
        @elseif (isset($label_bottom_left))
            <span class="label-text">{{ $label_bottom_left }}</span>
        @endif
        @if (isset($label_bottom_right))
            <span class="label-text">{{ $label_bottom_right }}</span>
        @endif
    </label>
</div>
