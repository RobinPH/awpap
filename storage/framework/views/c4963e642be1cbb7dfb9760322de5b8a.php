<div class="flex flex-row items-center w-auto p-4 rounded-sm shadow-md bg-stone-300">
    <div class="items-start ml-3">
        <div class="flex gap-1">
            <div class="font-bold">Owner:</div>
            <?php echo e($schedule->user->full_name); ?>

        </div>
        <div class="flex gap-1">
            <div class="font-bold">Patient Type:</div>
            <?php echo e($schedule->patient_type->type); ?>

        </div>
        <div class="flex gap-1">
            <div class="font-bold">Breed:</div>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.highlight-text','data' => ['keyword' => $keyword]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('highlight-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['keyword' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($keyword)]); ?>
                <?php echo e($schedule->breed); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
        <div class="flex gap-1">
            <div class="font-bold">Count:</div>
            <?php echo e($schedule->how_many); ?>

        </div>
        <div class="flex gap-1">
            <div class="font-bold">Program:</div>
            <?php echo e($schedule->program->name); ?>

        </div>
        <div class="flex gap-1">
            <div class="font-bold">Appointment Date:</div>
            <?php echo e($schedule->appointment_date); ?>

        </div>
        <div class="flex gap-1">
            <div class="font-bold">Status:</div>
            <?php echo e($schedule->status->name); ?>

        </div>
        <div class="flex gap-1">
            <div class="font-bold">Other Informations:</div>
            <?php echo e($schedule->other_information); ?>

        </div>
    </div>
    <div class="ml-auto mr-5">
        <label for="edit_program_schedule_modal/<?php echo e($schedule->id); ?>" class="btn btn-success">
            <b>Update</b>
        </label>
    </div>

    <input type="checkbox" id="edit_program_schedule_modal/<?php echo e($schedule->id); ?>" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <form method="POST" action=<?php echo e(route('program-form:edit')); ?> enctype="multipart/form-data"
                wire:key="edit_program_schedule_modal_form">
                <?php echo csrf_field(); ?>
                <h1>
                    <b>Edit Program Schedule</b>
                </h1>
                <div class="py-4">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.program.schedule','data' => ['schedule' => $schedule,'statuses' => $statuses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.program.schedule'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['schedule' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($schedule),'statuses' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statuses)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
                <button class="w-full btn btn-success" type="submit">Edit Program Schedule</button>
            </form>
        </div>
        <label class="modal-backdrop" for="edit_program_schedule_modal/<?php echo e($schedule->id); ?>">Close</label>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/admin/programs/schedules/card.blade.php ENDPATH**/ ?>