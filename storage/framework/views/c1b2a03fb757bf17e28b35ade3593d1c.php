<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex flex-col h-screen">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.topbar', [])->html();
} elseif ($_instance->childHasBeenRendered('UCz18at')) {
    $componentId = $_instance->getRenderedChildComponentId('UCz18at');
    $componentTag = $_instance->getRenderedChildComponentTagName('UCz18at');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UCz18at');
} else {
    $response = \Livewire\Livewire::mount('admin.topbar', []);
    $html = $response->html();
    $_instance->logRenderedChild('UCz18at', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <div class="flex h-full">
            <div class="">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.navbar', [])->html();
} elseif ($_instance->childHasBeenRendered('yL1Cblq')) {
    $componentId = $_instance->getRenderedChildComponentId('yL1Cblq');
    $componentTag = $_instance->getRenderedChildComponentTagName('yL1Cblq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yL1Cblq');
} else {
    $response = \Livewire\Livewire::mount('admin.navbar', []);
    $html = $response->html();
    $_instance->logRenderedChild('yL1Cblq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
            <div class="w-full p-5 overflow-auto">
                <?php echo e($slot); ?>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/admin-layout.blade.php ENDPATH**/ ?>