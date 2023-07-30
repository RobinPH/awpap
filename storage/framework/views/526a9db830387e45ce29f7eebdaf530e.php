<div x-data="{
    animal: {},
    animalType: 'ALL',
    setAnimal(animal) {
        this.animal = animal
    }
}">
    <div class="flex justify-center p-3">
        <div class="w-2/5 p-2 bg-teal-100 rounded-full drop-shadow-lg">
            <ul class="flex justify-center gap-20 text-xl">
                <li class="hover:cursor-pointer" @click="animalType = 'ALL'" wire:click="getAnimalsOfType">
                    <p href="#">ALL</p>
                </li>
                <?php $__currentLoopData = $animalTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animalType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="hover:cursor-pointer" @click="animalType = '<?php echo e($animalType->type); ?>'"
                        wire:click="getAnimalsOfType('<?php echo e($animalType->id); ?>')">
                        <p href="#"><?php echo e($animalType->type); ?>

                        </p>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </ul>
        </div>
    </div>

    <div id="div1" class="items-center justify-center max-w-6xl mx-auto">
        <h1 class="p-8 text-3xl font-bold text-center" x-text="animalType"></h1>
        <div class="grid grid-cols-1 gap-2 p-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center">

            <?php $__currentLoopData = $animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('adopt-card', ['animal' => $animal])->html();
} elseif ($_instance->childHasBeenRendered($animal->id)) {
    $componentId = $_instance->getRenderedChildComponentId($animal->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($animal->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($animal->id);
} else {
    $response = \Livewire\Livewire::mount('adopt-card', ['animal' => $animal]);
    $html = $response->html();
    $_instance->logRenderedChild($animal->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

    <dialog id="animal_modal" class=" modal">
        <form method="dialog" class="w-1/2 max-w-5xl modal-box">
            <div class="flex gap-4">
                <figure><img class="object-cover w-80 h-80" x-bind:src="animal.thumbnail_url" />
                </figure>
                <div class="flex flex-col w-full">
                    <h3 class="w-full text-lg font-bold text-center" x-text="animal.name"></h3>
                    <div>
                        <span><b>Type: </b></span>
                        <span x-text="animal.type"></span>
                    </div>
                    <div>
                        <span><b>Age: </b></span>
                        <span x-text="animal.age_months_string"></span>
                    </div>
                    <div>
                        <span><b>Sex: </b></span>
                        <span x-text="animal.sex"></span>
                    </div>
                    <p class="py-4" x-text="animal.description"></p>

                </div>
            </div>
            <div class="modal-action">
                <!-- if there is a button in form, it will close the modal -->
                <a class="w-full btn btn-primary"
                    x-bind:href="'<?php echo e(route('adoption-form') . '?animal_id='); ?>' + animal.id">Adopt Now</a>
            </div>
        </form>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/animals-viewer.blade.php ENDPATH**/ ?>