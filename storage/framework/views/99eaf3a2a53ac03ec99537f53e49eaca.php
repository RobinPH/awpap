<?php
    $imagePreviewClass = 'w-48 h-auto mx-auto ' . ($imagePreviewClass ?? '');
    $imageInputClass = 'w-full file-input file-input-bordered ' . ($imageInputClass ?? '');
?>

<div class="w-full form-control">
    <?php if(isset($image)): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['wire:key' => $image->id,'image' => $image,'id' => ''.e($id).'','class' => ''.e($imagePreviewClass).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($image->id),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($image),'id' => ''.e($id).'','class' => ''.e($imagePreviewClass).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php else: ?>
        <img id="<?php echo e($id); ?>" class="<?php echo e($imagePreviewClass); ?>" />
    <?php endif; ?>
    <label class="label">
        <span class="label-text">Picture</span>
        <span class="label-text-alt">Max. 2 MB</span>
    </label>
    <input type="file" name="<?php echo e($name ?? 'image'); ?>" class="<?php echo e($imageInputClass); ?>"
        onchange="document.getElementById('<?php echo e($id); ?>').src = window.URL.createObjectURL(event.target.files[0])"
        accept="<?php echo e($accept ?? '.jpeg,.jpg,.png,.webp'); ?>" />
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/forms/inputs/image-upload.blade.php ENDPATH**/ ?>