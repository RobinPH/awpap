<div class="flex flex-row items-center justify-between w-auto p-4 rounded-sm shadow-md bg-stone-300">
    <div class="flex items-center gap-4">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['image' => $user->profilePicture,'id' => ''.e($user->id).'','class' => 'object-cover w-48 h-48 adopting-animal-image-preview']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user->profilePicture),'id' => ''.e($user->id).'','class' => 'object-cover w-48 h-48 adopting-animal-image-preview']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <div>
            <div class="flex gap-1">
                <div class="font-bold">Name:</div>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.highlight-text','data' => ['keyword' => $keyword]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('highlight-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['keyword' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($keyword)]); ?>
                    <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>
            <div class="flex gap-1">
                <div class="font-bold">Birthdate:</div>
                <?php echo e($user->birthdate); ?>

            </div>
            <div class="flex gap-1">
                <div class="font-bold">Address:</div>
                <?php echo e($user->full_address); ?>

            </div>
            <div class="flex gap-1">
                <div class="font-bold">Type:</div>
                <?php echo e($user->is_admin ? 'ADMIN' : 'USER'); ?>

            </div>
        </div>
    </div>
    <div class="flex gap-4">
        <?php if(Auth::user()->permissionCan('admin:edit:permissions')): ?>
            <label for="edit_user_permissions_modal/<?php echo e($user->id); ?>" class="btn btn-success">
                <b>Permissions</b>
            </label>

            <input type="checkbox" id="edit_user_permissions_modal/<?php echo e($user->id); ?>" class="modal-toggle" />
            <div class="modal">
                <div class="modal-box">
                    <form method="POST" action=<?php echo e(route('user:edit:permissions')); ?> enctype="multipart/form-data"
                        wire:key="edit_user_permissions_modal_form">
                        <?php echo csrf_field(); ?>
                        <h1>
                            <b>Edit User Permissions</b>
                        </h1>
                        <div class="py-4">
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('forms.user.permission', ['userId' => $user->id,'user_id' => $user->id])->html();
} elseif ($_instance->childHasBeenRendered('l1935046618-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1935046618-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1935046618-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1935046618-0');
} else {
    $response = \Livewire\Livewire::mount('forms.user.permission', ['userId' => $user->id,'user_id' => $user->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l1935046618-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>
                        <button class="w-full btn btn-success" type="submit">Edit User Permissions</button>
                    </form>
                </div>
                <label class="modal-backdrop" for="edit_user_permissions_modal/<?php echo e($user->id); ?>">Close</label>
            </div>
        <?php endif; ?>

        <label for="edit_user_modal/<?php echo e($user->id); ?>" class="btn btn-success">
            <b>Update</b>
        </label>

        <input type="checkbox" id="edit_user_modal/<?php echo e($user->id); ?>" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <form method="POST" action=<?php echo e(route('user:profile:edit')); ?> enctype="multipart/form-data"
                    wire:key="edit_user_modal_form">
                    <?php echo csrf_field(); ?>
                    <h1>
                        <b>Edit User Profile</b>
                    </h1>
                    <div class="py-4">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.user.profile','data' => ['user' => $user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.user.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                    <button class="w-full btn btn-success" type="submit">Edit User Profile</button>
                </form>
            </div>
            <label class="modal-backdrop" for="edit_user_modal/<?php echo e($user->id); ?>">Close</label>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/admin/users/profiles/card.blade.php ENDPATH**/ ?>