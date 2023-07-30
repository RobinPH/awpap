<?php
    $id = uniqid();
    
    $statusesAsOptions = array_map(function ($status) {
        return [
            'value' => $status['id'],
            'label' => $status['name'],
            'description' => $status['description'],
        ];
    }, $statuses->toArray());
?>

<div class="flex flex-col w-full gap-4">
    <input name="adoption_id" value="<?php echo e($adoption->id); ?>" class="hidden" />

    <div>
        <div class="card w-full bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Adopter</h2>
                <div class="flex items-center gap-4 px-2">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['image' => $adoption->adopter->profilePicture,'id' => ''.e($adoption->adopter->id).'','class' => 'adopting-animal-image-preview object-cover w-32 h-32']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($adoption->adopter->profilePicture),'id' => ''.e($adoption->adopter->id).'','class' => 'adopting-animal-image-preview object-cover w-32 h-32']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <div>
                        <p><span class="font-bold">Name: </span><?php echo e($adoption->adopter->first_name); ?>

                            <?php echo e($adoption->adopter->last_name); ?></p>
                        <p><span class="font-bold">Birthdate: </span><?php echo e($adoption->adopter->birthdate); ?></p>
                        <p><span class="font-bold">Address: </span><?php echo e($adoption->adopter->full_address); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="card w-full bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Adopting</h2>
                <div class="flex items-center gap-4 px-2">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['image' => $adoption->animal->thumbnail,'id' => ''.e($adoption->animal->id).'','class' => 'adopting-animal-image-preview object-cover w-32 h-32']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($adoption->animal->thumbnail),'id' => ''.e($adoption->animal->id).'','class' => 'adopting-animal-image-preview object-cover w-32 h-32']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                    <div>
                        <p><span class="font-bold">Name: </span><?php echo e($adoption->animal->name); ?></p>
                        <p><span class="font-bold">Type: </span><?php echo e($adoption->animal->type->type); ?></p>
                        <p><span class="font-bold">Birthdate: </span><?php echo e(explode(' ', $adoption->animal->birthdate)[0]); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.select','data' => ['name' => 'adoption_form_status_id','label' => 'Status','value' => ''.e(isset($adoption) ? $adoption->adoption_form_status_id : null).'','options' => $statusesAsOptions,'required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'adoption_form_status_id','label' => 'Status','value' => ''.e(isset($adoption) ? $adoption->adoption_form_status_id : null).'','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statusesAsOptions),'required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/forms/adoption.blade.php ENDPATH**/ ?>