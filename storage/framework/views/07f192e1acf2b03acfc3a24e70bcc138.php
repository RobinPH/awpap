<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.animals.profiles.index', ['animals' => $animals,'card' => 'livewire.admin.animals.profiles.card'])->html();
} elseif ($_instance->childHasBeenRendered('rwcxwHm')) {
    $componentId = $_instance->getRenderedChildComponentId('rwcxwHm');
    $componentTag = $_instance->getRenderedChildComponentTagName('rwcxwHm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rwcxwHm');
} else {
    $response = \Livewire\Livewire::mount('admin.animals.profiles.index', ['animals' => $animals,'card' => 'livewire.admin.animals.profiles.card']);
    $html = $response->html();
    $_instance->logRenderedChild('rwcxwHm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/admin/animals.blade.php ENDPATH**/ ?>