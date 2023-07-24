<div class="p-4 duration-200 shadow-xl card bg-base-100 hover:-translate-y-1 hover:cursor-pointer"
    onclick="animal_modal.showModal()"
    @click="setAnimal(<?php echo e(json_encode([...$animal->toArray(), 'type' => $animal->type->type, 'sex' => $animal->sex->sex, 'age_months_string' => $animal->ageMonthsString, 'thumbnail_url' => './storage/images/' . $animal->thumbnail->id])); ?>)">
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
    <div class="p-4 card-body">
        <h3 class="card-title">
            <?php echo e($animal->name); ?>

        </h3>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/adopt-card.blade.php ENDPATH**/ ?>