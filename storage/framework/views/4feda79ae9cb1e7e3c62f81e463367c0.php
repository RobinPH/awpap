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
    <h1 class="text-xl font-bold">Your Appointments</h1>
    <div class="flex flex-col w-full gap-4">
        <?php $__currentLoopData = $user->programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <?php echo e($schedule->breed); ?>

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
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/user/programs.blade.php ENDPATH**/ ?>