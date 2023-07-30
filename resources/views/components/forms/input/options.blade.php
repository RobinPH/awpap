@php
    $is_horizontal = $horizontal ?? false;
    $id = uniqid();
@endphp

<x-forms.input.wrapper :name="$name ?? null" :label="$label" required="{{ $required ?? false }}">
    <div class="flex flex-wrap {{ $is_horizontal ? 'flex-row gap-6' : 'flex-col gap-1' }}" id="{{ $id }}">
        @foreach ($options as $option)
            <div class="flex flex-row items-center gap-2">
                <input type="{{ isset($multiple) ? 'checkbox' : 'radio' }}"
                    {{ ($required ?? false) && !isset($multiple) ? 'required' : '' }}
                    @if (isset($name)) name="{{ $name }}" @endif value="{{ $option['value'] }}"
                    class="{{ isset($multiple) ? 'checkbox checkbox-xs' : 'radio radio-xs' }}"
                    @if (isset($selected)) @if (is_array($selected) ? in_array($option['value'], $selected) : $selected == $option['value'])
                            checked @endif
                @elseif ($loop->first && isset($preselect)) checked @endif
                {{ $disabled ?? false ? 'disabled' : '' }} />
                <label>
                    <p>{{ isset($option['label']) ? $option['label'] : $option['value'] }}</p>
                    @if (isset($option['description']))
                        <p class="text-xs italic">{{ $option['description'] }}</p>
                    @endif
                </label>
            </div>
        @endforeach
    </div>

    @if (isset($multiple) && isset($required))
        <script>
            (function() {
                const form = document.getElementById('{{ $id }}');
                const checkboxes = form.querySelectorAll('input[type=checkbox]');
                const checkboxLength = checkboxes.length;
                const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

                function init() {
                    if (firstCheckbox) {
                        for (let i = 0; i < checkboxLength; i++) {
                            checkboxes[i].addEventListener('change', checkValidity);
                        }

                        checkValidity();
                    }
                }

                function isChecked() {
                    for (let i = 0; i < checkboxLength; i++) {
                        if (checkboxes[i].checked) return true;
                    }

                    return false;
                }

                function checkValidity() {
                    const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
                    firstCheckbox.setCustomValidity(errorMessage);
                }

                init();
            })();
        </script>
    @endif
</x-forms.input.wrapper>
