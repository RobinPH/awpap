<?php
    $id = uniqid();
?>

<div class="flex flex-col w-full gap-4">
    <?php if(isset($animal)): ?>
        <input type="text" name="id" value="<?php echo e($animal->id); ?>" class="hidden" required />
    <?php endif; ?>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Name</span>
        </label>
        <input type="text" name="name" placeholder="Animal's name" class="w-full input input-bordered"
            <?php if(isset($animal)): ?> value="<?php echo e($animal->name); ?>" <?php endif; ?> required />
    </div>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Sex</span>
        </label>
        <div class="flex flex-col gap-2">
            <?php $__currentLoopData = $animalSexes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animalSex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-row items-center gap-2">
                    <input type="radio" name="sex_id" value="<?php echo e($animalSex->id); ?>" class="radio"
                        <?php if(isset($animal)): ?> <?php if($animal->sex_id == $animalSex->id): ?>
                    checked <?php endif; ?>
                    <?php elseif($loop->first): ?> checked <?php endif; ?> />
                    <label>
                        <p><?php echo e($animalSex->sex); ?></p>
                        <?php if(isset($animalSex->description)): ?>
                            <p class="text-xs italic"><?php echo e($animalSex->description); ?></p>
                        <?php endif; ?>
                    </label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Type</span>
        </label>
        <div class="flex flex-col gap-2">
            <?php $__currentLoopData = $animalTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animalType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-row items-center gap-2">
                    <input type="radio" name="type_id" value="<?php echo e($animalType->id); ?>" class="radio"
                        <?php if(isset($animal)): ?> <?php if($animal->type_id == $animalType->id): ?>
                                checked <?php endif; ?>
                    <?php elseif($loop->first): ?> checked <?php endif; ?> />
                    <label>
                        <p><?php echo e($animalType->type); ?></p>
                        <?php if(isset($animalType->description)): ?>
                            <p class="text-xs italic"><?php echo e($animalType->description); ?></p>
                        <?php endif; ?>
                    </label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>


    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Birthdate</span>
        </label>
        <input type="date" name="birthdate" placeholder="Birthdate" class="w-full input input-bordered"
            <?php if(isset($animal)): ?> value="<?php echo e(explode(' ', $animal->birthdate)[0]); ?>" <?php endif; ?> required>
    </div>


    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Description</span>
        </label>
        <textarea class="textarea textarea-bordere" name="description" placeholder="Description"
            <?php if(isset($animal)): ?> value="<?php echo e($animal->description); ?>" <?php endif; ?>></textarea>
    </div>


    <div class="w-full form-control">
        <?php if(isset($animal) && isset($animal->thumbnail)): ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['wire:key' => $animal->thumbnail->id,'image' => $animal->thumbnail,'id' => 'animal-thumbnail-preview-'.e($id).'','class' => 'w-48 h-auto mx-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($animal->thumbnail->id),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($animal->thumbnail),'id' => 'animal-thumbnail-preview-'.e($id).'','class' => 'w-48 h-auto mx-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <?php else: ?>
            <img id="animal-thumbnail-preview-<?php echo e($id); ?>" class="w-48 h-auto mx-auto" />
        <?php endif; ?>
        <label class="label">
            <span class="label-text">Picture</span>
            <span class="label-text-alt">Max. 2 MB</span>
        </label>
        <input type="file" name="image" class="w-full file-input file-input-bordered"
            onchange="document.getElementById('animal-thumbnail-preview-<?php echo e($id); ?>').src = window.URL.createObjectURL(event.target.files[0])"
            accept=".jpeg,.jpg,.png,.webp" />
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/forms/animal.blade.php ENDPATH**/ ?>