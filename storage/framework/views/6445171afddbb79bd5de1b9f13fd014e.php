<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.analytics.web-traffic', [])->html();
} elseif ($_instance->childHasBeenRendered('jTdGc4T')) {
    $componentId = $_instance->getRenderedChildComponentId('jTdGc4T');
    $componentTag = $_instance->getRenderedChildComponentTagName('jTdGc4T');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jTdGc4T');
} else {
    $response = \Livewire\Livewire::mount('admin.analytics.web-traffic', []);
    $html = $response->html();
    $_instance->logRenderedChild('jTdGc4T', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/admin/analytics/web-traffic.blade.php ENDPATH**/ ?>