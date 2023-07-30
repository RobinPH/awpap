<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.analytics.adoptions', [])->html();
} elseif ($_instance->childHasBeenRendered('px0mfAZ')) {
    $componentId = $_instance->getRenderedChildComponentId('px0mfAZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('px0mfAZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('px0mfAZ');
} else {
    $response = \Livewire\Livewire::mount('admin.analytics.adoptions', []);
    $html = $response->html();
    $_instance->logRenderedChild('px0mfAZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/admin/analytics/adoptions.blade.php ENDPATH**/ ?>