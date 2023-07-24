<?php
    $regionsAsOptions = array_map(function ($region) {
        return [
            'value' => $region['id'],
            'label' => $region['name'] . ' (' . $region['description'] . ')',
        ];
    }, $regions);
    
    $provincesAsOptions = array_map(function ($province) {
        return [
            'value' => $province['id'],
            'label' => $province['name'],
        ];
    }, $provinces);
    
    $municipalitiesAsOptions = array_map(function ($municipality) {
        return [
            'value' => $municipality['id'],
            'label' => $municipality['name'],
        ];
    }, $municipalities);
    
    $barangaysAsOptions = array_map(function ($barangay) {
        return [
            'value' => $barangay['id'],
            'label' => $barangay['name'],
        ];
    }, $barangays);
    
    $user = Auth::user();
?>

<div class="w-full">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.text','data' => ['name' => 'address_line_1','label' => 'Address Line','value' => ''.e($address->address_line_1).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'address_line_1','label' => 'Address Line','value' => ''.e($address->address_line_1).'','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.select','data' => ['name' => 'region_id','label' => 'Region','placeholder' => 'Select Region','options' => $regionsAsOptions,'value' => $region_id,'onchange' => 'setRegion($event.target.value)','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'region_id','label' => 'Region','placeholder' => 'Select Region','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($regionsAsOptions),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($region_id),'onchange' => 'setRegion($event.target.value)','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.select','data' => ['name' => 'province_id','label' => 'Province','placeholder' => 'Select Province','options' => $provincesAsOptions,'value' => $province_id,'onchange' => 'setProvince($event.target.value)','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'province_id','label' => 'Province','placeholder' => 'Select Province','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($provincesAsOptions),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($province_id),'onchange' => 'setProvince($event.target.value)','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.select','data' => ['name' => 'municipality_id','label' => 'Municipality','placeholder' => 'Select Municipality','value' => $municipality_id,'options' => $municipalitiesAsOptions,'onchange' => 'setMunicipality($event.target.value)','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'municipality_id','label' => 'Municipality','placeholder' => 'Select Municipality','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($municipality_id),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($municipalitiesAsOptions),'onchange' => 'setMunicipality($event.target.value)','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.select','data' => ['name' => 'barangay_id','label' => 'Barangay','placeholder' => 'Select Barangay','options' => $barangaysAsOptions,'value' => $barangay_id,'onchange' => 'setBarangay($event.target.value)','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'barangay_id','label' => 'Barangay','placeholder' => 'Select Barangay','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($barangaysAsOptions),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($barangay_id),'onchange' => 'setBarangay($event.target.value)','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/forms/input/address.blade.php ENDPATH**/ ?>