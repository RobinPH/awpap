<ul class="w-56 h-full menu bg-base-200 rounded-box">
    <li><a>Dashboard</a></li>
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
    <li><a>Programs</a></li>
    <li><a>Adoptions</a></li>
    <li><a>Users</a></li>

    <li class="mt-auto"><a class="font-bold text-red-500 hover:text-red-700">Logout</a></li>
</ul>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/admin/navbar.blade.php ENDPATH**/ ?>