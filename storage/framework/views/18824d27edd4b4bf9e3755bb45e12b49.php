<div>
    <div class="navbar bg-slate-300">
        <div class="flex-1">
            <div class="form-control">
                <input wire:model.debounce.150ms="search" type="search" placeholder="Search"
                    class="w-24 input input-bordered md:w-auto" />
            </div>
        </div>
        <div class="flex-none gap-2">
            <label for="create_animal_sex_modal" class="btn btn-success">Add</label>
        </div>
    </div>

    <input type="checkbox" id="create_animal_sex_modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <form method="POST" action=<?php echo e(route('animal:sex:create')); ?> enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <h1>
                    <b>Create Animal Sex</b>
                </h1>
                <div class="py-4">
                    <?php echo $__env->make('components.forms.animal.sex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <button class="w-full btn btn-success" type="submit">Create Animal Sex</button>
            </form>
        </div>
        <label class="modal-backdrop" for="create_animal_sex_modal">Close</label>
    </div>

    <div wire:loading.delay class="w-full">
        <div class="flex flex-col items-center justify-center w-full m-auto">
            <p>Loading Animal Sexes</p>
            <span class="loading loading-dots loading-lg"></span>
        </div>
    </div>

    <div wire:loading.delay.remove class="flex flex-col gap-4 mt-4">
        <?php $__currentLoopData = $sexes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div :wire:key="$sex->id">
                <?php echo $__env->make($card, ['sex' => $sex, 'keyword' => $search], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/admin/animals/sexes/index.blade.php ENDPATH**/ ?>