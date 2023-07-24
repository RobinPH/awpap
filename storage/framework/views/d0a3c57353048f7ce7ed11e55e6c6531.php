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
} elseif ($_instance->childHasBeenRendered('yZEmF26')) {
    $componentId = $_instance->getRenderedChildComponentId('yZEmF26');
    $componentTag = $_instance->getRenderedChildComponentTagName('yZEmF26');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yZEmF26');
} else {
    $response = \Livewire\Livewire::mount('navbar', []);
    $html = $response->html();
    $_instance->logRenderedChild('yZEmF26', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="h-full">
            <?php echo e($slot); ?>

        </div>
        <div class="h-fit">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer', [])->html();
} elseif ($_instance->childHasBeenRendered('avKaRBK')) {
    $componentId = $_instance->getRenderedChildComponentId('avKaRBK');
    $componentTag = $_instance->getRenderedChildComponentTagName('avKaRBK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('avKaRBK');
} else {
    $response = \Livewire\Livewire::mount('footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('avKaRBK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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