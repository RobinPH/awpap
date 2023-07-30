<?php
    $permissionsAsOptions = array_map(function ($permission) {
        return [
            'value' => $permission['id'],
            'label' => $permission['name'],
            'description' => $permission['description'],
        ];
    }, $permissions->toArray());
    
    usort($permissionsAsOptions, function ($a, $b) {
        if ($a['label'] == $b['label']) {
            return 0;
        }
        return $a['label'] < $b['label'] ? -1 : 1;
    });
    
    $existing_permissions = array_map(function ($permission) {
        return $permission['id'];
    }, $user->permissions->toArray());
?>

<div class="flex flex-col w-full gap-4">
    <input type="text" name="user_id" value="<?php echo e($user->id); ?>" class="hidden" required />

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.options','data' => ['name' => 'permission[]','label' => 'Permissions','options' => $permissionsAsOptions,'selected' => $existing_permissions,'multiple' => true,'required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input.options'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'permission[]','label' => 'Permissions','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permissionsAsOptions),'selected' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($existing_permissions),'multiple' => true,'required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/forms/user/permission.blade.php ENDPATH**/ ?>