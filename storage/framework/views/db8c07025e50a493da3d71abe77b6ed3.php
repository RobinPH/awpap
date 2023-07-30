<div class="flex flex-col items-center p-12 bg-white shadow-lg w-96 md:w-2/5 rounded-xl drop-shadow-xl">
    <div class="flex flex-row gap-4">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['image' => $story->form->adopter->thumbnail,'id' => ''.e($story->form->adopter->id).'','class' => 'rounded-full story-user-image-preview h-28']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($story->form->adopter->thumbnail),'id' => ''.e($story->form->adopter->id).'','class' => 'rounded-full story-user-image-preview h-28']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['image' => $story->form->animal->thumbnail,'id' => ''.e($story->form->animal->id).'','class' => 'rounded-full story-user-image-preview h-28']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($story->form->animal->thumbnail),'id' => ''.e($story->form->animal->id).'','class' => 'rounded-full story-user-image-preview h-28']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
    <h2 class="p-1 text-lg font-bold text-center"><?php echo e($story->title); ?></h2>
    <div class="flex items-center gap-1">
        <h3 class="text-sm font-bold text-blue-400"><?php echo e($story->form->adopter->full_name); ?></h3>
        <span>-</span>
        <h3 class="text-sm font-bold text-blue-400"><?php echo e($story->form->animal->name); ?></h3>
    </div>
    <p class="pt-2 text-xs text-justify"><?php echo e($story->story); ?></p>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/story-card.blade.php ENDPATH**/ ?>