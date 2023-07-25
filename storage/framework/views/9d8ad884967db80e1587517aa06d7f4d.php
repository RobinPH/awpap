<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.user','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div>
        <div class="grid grid-cols-1 gap-10 p-10 text-center justify-items-center">
            <h1 class="text-3xl font-bold"><b class="text-blue-500">Programs</b> Offered</h1>
            <p class=" lg:pr-80 lg:pl-80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis ratione
                officia neque excepturi similique quasi aspernatur cupiditate, quae accusamus!</p>
            <a type="button"
                class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 "
                href="./program-form">
                Book Now
            </a>
        </div>
    </div>

    <div>
        <?php for($i = 0; $i < 4; $i++): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'sample','description' => 'Furfecto Veterinary Services is a leading clinic
                    providing exceptional care for pets. Their dedicated team of skilled veterinarians offers
                    personalized attention and advanced medical expertise. From routine check-ups to specialized
                    treatments, Furfecto Veterinary Services ensures the health and well-being of your furry
                    friends. With state-of-the-art facilities and a focus on preventive medicine, they prioritize
                    individualized care and client satisfaction. Trust Furfecto Veterinary Services for top-notch
                    pet healthcare.'])->html();
} elseif ($_instance->childHasBeenRendered('CCprqLA')) {
    $componentId = $_instance->getRenderedChildComponentId('CCprqLA');
    $componentTag = $_instance->getRenderedChildComponentTagName('CCprqLA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CCprqLA');
} else {
    $response = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'sample','description' => 'Furfecto Veterinary Services is a leading clinic
                    providing exceptional care for pets. Their dedicated team of skilled veterinarians offers
                    personalized attention and advanced medical expertise. From routine check-ups to specialized
                    treatments, Furfecto Veterinary Services ensures the health and well-being of your furry
                    friends. With state-of-the-art facilities and a focus on preventive medicine, they prioritize
                    individualized care and client satisfaction. Trust Furfecto Veterinary Services for top-notch
                    pet healthcare.']);
    $html = $response->html();
    $_instance->logRenderedChild('CCprqLA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endfor; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/program.blade.php ENDPATH**/ ?>