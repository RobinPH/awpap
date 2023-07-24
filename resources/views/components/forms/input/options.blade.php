<x-forms.input.wrapper :name="$name" :label="$label" required="{{ $required ?? false }}">
    <div class="flex flex-col gap-2">
        @foreach ($options as $option)
            <div class="flex flex-row items-center gap-2">
                <input type="radio" name="{{ $name }}" value="{{ $option['value'] }}" class="radio"
                    @if (isset($selected)) @if ($selected == $option['value'])
                            checked @endif
                @elseif ($loop->first) checked @endif />
                <label>
                    <p>{{ $option['label'] }}</p>
                    @if (isset($option['description']))
                        <p class="text-xs italic">{{ $option['description'] }}</p>
                    @endif
                </label>
            </div>
        @endforeach
    </div>
</x-forms.input.wrapper>
