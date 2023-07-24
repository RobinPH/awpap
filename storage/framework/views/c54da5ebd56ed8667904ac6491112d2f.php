<?php
    $id = uniqid();
?>

<div class="flex flex-col w-full gap-4">
    <?php if(isset($type)): ?>
        <input type="text" name="id" value="<?php echo e($type->id); ?>" class="hidden" required />
    <?php endif; ?>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Type</span>
        </label>
        <input type="text" name="type" placeholder="Type" class="w-full input input-bordered"
            <?php if(isset($type)): ?> value="<?php echo e($type->type); ?>" <?php endif; ?> required />
        <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <label class="label">
                <span class="text-red-500 label-text"><?php echo e($message); ?></span>
            </label>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Description</span>
        </label>
        <textarea class="textarea textarea-bordere" name="description" placeholder="Description">
<?php if(isset($type)): ?>
<?php echo e($type->description); ?>

<?php endif; ?>
</textarea>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/forms/animal/type.blade.php ENDPATH**/ ?>