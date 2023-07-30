<div>
    <div class="navbar bg-slate-300">
        <div class="flex-1">
            <div class="form-control">
                <input wire:model.debounce.150ms="search" type="search" placeholder="Search"
                    class="w-24 input input-bordered md:w-auto" />
            </div>
        </div>
    </div>

    <div class="flex flex-row items-center gap-4 p-2 bg-slate-100">
        <div class="font-bold">
            Filter by Program:
        </div>
        <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <input type="checkbox" wire:model.debounce.150ms="types" className="checkbox checkbox-success"
                    value="<?php echo e($program->id); ?>" />
                <?php echo e($program->name); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div wire:loading.delay class="w-full">
        <div class="flex flex-col items-center justify-center w-full m-auto">
            <p>Loading Schedules</p>
            <span class="loading loading-dots loading-lg"></span>
        </div>
    </div>

    <div wire:loading.delay.remove class="flex flex-col gap-4 mt-4">
        <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div :wire:key="$schedule->id">
                <?php echo $__env->make($card, ['schedule' => $schedule, 'keyword' => $search], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/admin/programs/schedules/index.blade.php ENDPATH**/ ?>