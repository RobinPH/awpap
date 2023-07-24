<?php
    $age_years = floor($animal->age_months / 12);
    $age_months = $animal->age_months % 12;
?>

<div class="duration-200 shadow-xl card bg-base-100 hover:-translate-y-1 hover:cursor-pointer">
    <figure>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['class' => 'object-cover w-48 h-48','image' => $animal->thumbnail,'defaultSrc' => './assets/dog1.jpg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'object-cover w-48 h-48','image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($animal->thumbnail),'defaultSrc' => './assets/dog1.jpg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </figure>
    <div class="card-body">
        <h2 class="card-title">
            <?php echo e($animal->name); ?>

            <div class="badge badge-secondary">
                <?php if($age_years != 0 || $age_months == 0): ?>
                    <?php echo e($age_years); ?> yrs
                <?php endif; ?>
                <?php if($age_months != 0): ?>
                    <?php echo e($age_months); ?> mos
                <?php endif; ?>
                old
            </div>
        </h2>
        <p><?php echo e(mb_strimwidth($animal->description, 0, 128, '...')); ?></p>
        <div class="justify-end card-actions">
            <div class="badge badge-outline"><?php echo e($animal->sex->sex); ?></div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/animal-card.blade.php ENDPATH**/ ?>