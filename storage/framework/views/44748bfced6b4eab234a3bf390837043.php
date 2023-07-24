<div class="w-full form-control">
    <label class="label">
        <span class="label-text">
            <?php if(isset($label)): ?>
                <?php echo e($label); ?>

                <?php if(isset($required) && $required): ?>
                    <span class="font-bold text-red-700 label-text">*</span>
                <?php endif; ?>
            <?php endif; ?>
        </span>
        <?php if(isset($label_top_right)): ?>
            <span class="label-text"><?php echo e($label_top_right); ?></span>
        <?php endif; ?>
    </label>
    <?php echo e($slot); ?>

    <label class="label">
        <?php if($errors->has($name)): ?>
            <span class="text-red-600 label-text"><?php echo e($errors->first($name)); ?></span>
        <?php elseif(isset($label_bottom_left)): ?>
            <span class="label-text"><?php echo e($label_bottom_left); ?></span>
        <?php endif; ?>
        <?php if(isset($label_bottom_right)): ?>
            <span class="label-text"><?php echo e($label_bottom_right); ?></span>
        <?php endif; ?>
    </label>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/forms/input/wrapper.blade.php ENDPATH**/ ?>