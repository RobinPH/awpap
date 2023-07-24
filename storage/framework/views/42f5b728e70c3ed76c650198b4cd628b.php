<?php if(Auth::user() && Auth::user()->permissionCan($permission)): ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/permission.blade.php ENDPATH**/ ?>