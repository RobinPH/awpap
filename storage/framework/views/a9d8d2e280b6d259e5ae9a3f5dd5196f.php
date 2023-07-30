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
    <input name="form_id" value="<?php echo e($schedule->id); ?>" class="hidden" />

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.select','data' => ['name' => 'status_id','label' => 'Status','value' => ''.e(isset($schedule) ? $schedule->status_id : null).'','options' => $statusesAsOptions,'required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'status_id','label' => 'Status','value' => ''.e(isset($schedule) ? $schedule->status_id : null).'','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statusesAsOptions),'required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/forms/program/schedule.blade.php ENDPATH**/ ?>