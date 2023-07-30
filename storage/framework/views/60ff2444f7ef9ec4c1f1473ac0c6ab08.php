<?php
?>

<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.admin','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"
        integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="flex flex-col gap-4">
        <div class="w-full shadow-xl card bg-base-100">
            <div class="card-body">
                <h2 class="card-title">Adoption Analytics</h2>
                <canvas id="web-traffic-count-chart"></canvas>
            </div>
        </div>
    </div>

    <script defer>
        const countChartCtx = document.getElementById('web-traffic-count-chart');

        const histories = <?php echo json_encode($history); ?>;

        const counts = {};

        for (let i = 0; i < 25; i++) {
            counts[moment().subtract(i, "days").format('YYYY-MM-DD 00:00:00')] = 0;
        }

        for (const history of histories) {
            counts[moment.utc(history["start_time"]).local().format('YYYY-MM-DD 00:00:00')] = history["count"];
        }

        new Chart(countChartCtx, {
            type: 'line',
            data: {
                labels: Array.from({
                    length: 25
                }).map((_, idx) => `${24 - idx}days ago`),
                datasets: [{
                    label: 'Number of Adoptions',
                    data: Object.values(counts).reverse(),
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/admin/analytics/adoptions.blade.php ENDPATH**/ ?>