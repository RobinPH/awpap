<?php
    $kaponProcess = ['Submit the adoption application form', 'Attend the Zoom interview', 'Meet our shelter animals in person', 'Visit your chosen pet to confirm your choice', 'Wait for vet clearance and schedule pick up', 'Take your pet home!'];
    $adoptProcess = ['Submit the adoption application form', 'Attend the Zoom interview', 'Meet our shelter animals in person', 'Visit your chosen pet to confirm your choice', 'Wait for vet clearance and schedule pick up', 'Take your pet home!'];
    
?>

<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.user','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guideline-card', ['title' => 'Adoption Process','description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis
            aliquid molestias consequuntur provident corporis et, nesciunt sequi
            odit ab eligendi.','img' => './assets/adoption.png','process' => $adoptProcess])->html();
} elseif ($_instance->childHasBeenRendered('KhWQI2s')) {
    $componentId = $_instance->getRenderedChildComponentId('KhWQI2s');
    $componentTag = $_instance->getRenderedChildComponentTagName('KhWQI2s');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KhWQI2s');
} else {
    $response = \Livewire\Livewire::mount('guideline-card', ['title' => 'Adoption Process','description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis
            aliquid molestias consequuntur provident corporis et, nesciunt sequi
            odit ab eligendi.','img' => './assets/adoption.png','process' => $adoptProcess]);
    $html = $response->html();
    $_instance->logRenderedChild('KhWQI2s', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guideline-black-card', ['title' => 'Adoption Process','description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis
            ratione officia neque excepturi similique quasi aspernatur cupiditate, quae accusamus!','img' => './assets/dog2.jpg','process' => $kaponProcess])->html();
} elseif ($_instance->childHasBeenRendered('iwFH3Py')) {
    $componentId = $_instance->getRenderedChildComponentId('iwFH3Py');
    $componentTag = $_instance->getRenderedChildComponentTagName('iwFH3Py');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iwFH3Py');
} else {
    $response = \Livewire\Livewire::mount('guideline-black-card', ['title' => 'Adoption Process','description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis
            ratione officia neque excepturi similique quasi aspernatur cupiditate, quae accusamus!','img' => './assets/dog2.jpg','process' => $kaponProcess]);
    $html = $response->html();
    $_instance->logRenderedChild('iwFH3Py', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/guideline.blade.php ENDPATH**/ ?>