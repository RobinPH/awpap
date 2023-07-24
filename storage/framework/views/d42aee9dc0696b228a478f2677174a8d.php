<?php
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
    
?>

<div class="text-[0px]">
    <?php $__currentLoopData = $segments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="<?php if($segment['highlighted']): ?> bg-yellow-300 <?php endif; ?> text-base"><?php echo e($segment['text']); ?></span>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/highlight-text.blade.php ENDPATH**/ ?>