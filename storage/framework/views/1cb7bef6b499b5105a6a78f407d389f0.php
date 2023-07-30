<ul class="w-56 h-full menu bg-base-200 rounded-box">
    <li>
        <details open>
            <summary>Analytics</summary>
            <ul class="ml-4">
                <li><a href="<?php echo e(route('admin:analytics:adoptions')); ?>">Adoptions</a></li>
                
                <li><a href="<?php echo e(route('admin:analytics:web-traffic')); ?>">Web Traffic</a></li>
            </ul>
        </details>
    </li>
    <li>
        <details open>
            <summary>Animals</summary>
            <ul class="ml-4">
                <?php if(Auth::user()->permissionCan('animal:profile:read')): ?>
                    <li><a href="<?php echo e(route('animals:profiles')); ?>">Profiles</a></li>
                <?php endif; ?>
                <?php if(Auth::user()->permissionCan('animal:type:read')): ?>
                    <li><a href="<?php echo e(route('animals:types')); ?>">Types</a></li>
                <?php endif; ?>
                <?php if(Auth::user()->permissionCan('animal:sex:read')): ?>
                    <li><a href="<?php echo e(route('animals:sexes')); ?>">Sexes</a></li>
                <?php endif; ?>
            </ul>
        </details>
    </li>
    <?php if(Auth::user()->permissionCan('article:read')): ?>
        <li><a href="<?php echo e(route('articles')); ?>">Articles</a></li>
    <?php endif; ?>
    <?php if(Auth::user()->permissionCan('program:read')): ?>
        <li>
            <details open>
                <summary>Programs</summary>
                <ul class="ml-4">
                    <?php if(Auth::user()->permissionCan('program-form:read')): ?>
                        <li><a href="<?php echo e(route('admin:programs:schedules')); ?>">Schedules</a></li>
                    <?php endif; ?>
                </ul>
                <ul class="ml-4">
                    <?php if(Auth::user()->permissionCan('program:read')): ?>
                        <li><a href="<?php echo e(route('admin:programs:types')); ?>">Types</a></li>
                    <?php endif; ?>
                </ul>
            </details>
        </li>
    <?php endif; ?>
    <?php if(Auth::user()->permissionCan('adoption:read')): ?>
        <li>
            <a href="<?php echo e(route('adoptions')); ?>">Adoptions</a>
        </li>
    <?php endif; ?>
    <?php if(Auth::user()->permissionCan('user:profile:read')): ?>
        <li><a href="<?php echo e(route('admin:users')); ?>">Users</a></li>
    <?php endif; ?>

    <li class="mt-auto"><a class="font-bold text-red-500 hover:text-red-700" href="<?php echo e(route('home')); ?>">Return to
            Furfecto</a></li>
</ul>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/admin/navbar.blade.php ENDPATH**/ ?>