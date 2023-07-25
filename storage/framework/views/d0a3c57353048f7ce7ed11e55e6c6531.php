<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex flex-col">
        <div class="h-fit">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navbar', [])->html();
} elseif ($_instance->childHasBeenRendered('gzIQTUV')) {
    $componentId = $_instance->getRenderedChildComponentId('gzIQTUV');
    $componentTag = $_instance->getRenderedChildComponentTagName('gzIQTUV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gzIQTUV');
} else {
    $response = \Livewire\Livewire::mount('navbar', []);
    $html = $response->html();
    $_instance->logRenderedChild('gzIQTUV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="min-h-screen">
            <?php echo e($slot); ?>

        </div>
        <div class="h-fit">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer', [])->html();
} elseif ($_instance->childHasBeenRendered('NxTL3Ye')) {
    $componentId = $_instance->getRenderedChildComponentId('NxTL3Ye');
    $componentTag = $_instance->getRenderedChildComponentTagName('NxTL3Ye');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NxTL3Ye');
} else {
    $response = \Livewire\Livewire::mount('footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('NxTL3Ye', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/layout/user.blade.php ENDPATH**/ ?>