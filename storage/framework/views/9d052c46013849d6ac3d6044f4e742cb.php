<img class="<?php echo e($class ?? ''); ?>" id="<?php echo e($id ?? ''); ?>"
    src=<?php echo e(url(isset($image) ? 'storage/images/' . $image->id : $defaultSrc ?? 'assets/no-image.png')); ?>

    alt="<?php echo e($alt ?? ((isset($image) ? $image->title : null) ?? '')); ?>" />
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/image.blade.php ENDPATH**/ ?>