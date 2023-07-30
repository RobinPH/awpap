<?php
    $user = Auth::user();
?>

<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.user.profile','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.user.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1 class="text-xl font-bold">Your Adoptions</h1>
    <div class="flex flex-col w-full gap-4">
        <?php $__currentLoopData = $user->adoptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adoption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex flex-row items-center w-auto p-4 rounded-sm shadow-md bg-stone-300">
                <div class="flex gap-4">
                    <div class="w-40 h-40 ml-2 min-w-fit">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['class' => 'object-cover w-40 h-40','image' => $adoption->animal->thumbnail,'defaultSrc' => './assets/dog1.jpg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'object-cover w-40 h-40','image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($adoption->animal->thumbnail),'defaultSrc' => './assets/dog1.jpg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                    <div class="items-start ml-3">
                        <div class="flex gap-1">
                            <div class="font-bold">Adopter:</div>

                            <div><?php echo e($adoption->adopter->full_name); ?></div>
                        </div>
                        <div class="flex gap-1">
                            <div class="font-bold">Adopting:</div>
                            <div><?php echo e($adoption->animal->name); ?> (<?php echo e($adoption->animal->type->type); ?>)</div>
                        </div>
                        <div class="flex gap-1">
                            <div class="font-bold">Status:</div>
                            <div>
                                <?php echo e($adoption->status->name); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <?php if($adoption->story): ?>
                    <div class="ml-auto mr-5">
                        <label for="edit_story_form/<?php echo e($adoption->story->id); ?>" class="btn btn-success">
                            <b>Edit Adoption Story</b>
                        </label>
                    </div>
                    <input type="checkbox" id="edit_story_form/<?php echo e($adoption->story->id); ?>" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box">
                            <form method="POST" action=<?php echo e(route('adoption-story:edit')); ?> enctype="multipart/form-data"
                                wire:key="edit_story_form_form">
                                <?php echo csrf_field(); ?>
                                <h1>
                                    <b>Edit Adoption Story</b>
                                </h1>
                                <div class="py-4">
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.adoption-story','data' => ['adoption' => $adoption,'story' => $adoption->story]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.adoption-story'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['adoption' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($adoption),'story' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($adoption->story)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                </div>
                                <button class="w-full btn btn-success" type="submit">Edit Adoption Story</button>
                            </form>
                        </div>
                        <label class="modal-backdrop" for="edit_story_form/<?php echo e($adoption->story->id); ?>">Close</label>
                    </div>
                <?php elseif($adoption->status->name == 'COMPLETED'): ?>
                    <div class="ml-auto mr-5">
                        <label for="create_story_form/<?php echo e($adoption->id); ?>" class="btn btn-success">
                            <b>Create Adoption Story</b>
                        </label>
                    </div>


                    <input type="checkbox" id="create_story_form/<?php echo e($adoption->id); ?>" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box">
                            <form method="POST" action=<?php echo e(route('adoption-story:create')); ?>

                                enctype="multipart/form-data" wire:key="create_story_form_form">
                                <?php echo csrf_field(); ?>
                                <h1>
                                    <b>Create Adoption Story</b>
                                </h1>
                                <div class="py-4">
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.adoption-story','data' => ['adoption' => $adoption]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.adoption-story'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['adoption' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($adoption)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                </div>
                                <button class="w-full btn btn-success" type="submit">Create Adoption Story</button>
                            </form>
                        </div>
                        <label class="modal-backdrop" for="create_story_form/<?php echo e($adoption->id); ?>">Close</label>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/user/adoptions.blade.php ENDPATH**/ ?>