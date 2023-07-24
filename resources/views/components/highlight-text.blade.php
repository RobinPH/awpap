@php
    $text = $slot->__toString();
    $text_length = strlen($text);
    $keyword_length = strlen($keyword);
    $segments = [];
    $is_case_sensitive = $caseSensitive ?? false;
    
    $last = 0;
    
    for ($i = 0; $i < $text_length; $i++) {
        for ($j = 0; $j < $keyword_length; $j++) {
            $idx = $i + $j;
            $a = $is_case_sensitive ? $text[$idx] : strtolower($text[$idx]);
            $b = $is_case_sensitive ? $keyword[$j] : strtolower($keyword[$j]);
    
            if ($a != $b) {
                break;
            }
    
            if ($j == $keyword_length - 1) {
                array_push($segments, ['text' => substr($slot, $last, $i - $last), 'highlighted' => false]);
                array_push($segments, ['text' => substr($slot, $i, $idx - $i + 1), 'highlighted' => true]);
                $i = $idx;
                $last = $idx + 1;
            }
        }
    }
    
    array_push($segments, ['text' => substr($slot, $last, $text_length - $last + 1), 'highlighted' => false]);
    
@endphp

<div class="text-[0px]">
    @foreach ($segments as $segment)
        <span class="@if ($segment['highlighted']) bg-yellow-300 @endif text-base">{{ $segment['text'] }}</span>
    @endforeach
</div>
