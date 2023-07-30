<?php
    function slice($arr, $label_cb, $count, $other_label = '*OTHERS')
    {
        $to_show = array_slice($arr, 0, $count);
        $other = array_slice($arr, $count);
    
        $labels = array_map($label_cb, $to_show);
    
        $labels = array_values($labels);
    
        $data = array_map(function ($traffic) {
            return $traffic->count;
        }, $to_show);
    
        $data = array_values($data);
    
        $others_count = array_sum(array_map(fn($traffic) => $traffic->count, $other));
    
        if ($others_count > 0) {
            array_push($labels, $other_label);
            array_push($data, $others_count);
        }
    
        return [
            'data' => $data,
            'labels' => $labels,
        ];
    }
    
    $traffics = slice(
        $traffics,
        function ($traffic) {
            return $traffic->url;
        },
        10,
    );
    $ref_traffics = slice(
        $ref_traffics,
        function ($traffic) {
            return $traffic->ref;
        },
        10,
    );
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
                <h2 class="card-title">Web Traffic Analytics</h2>
            </div>
        </div>

        <div class="flex flex-col gap-4 lg:flex-row">
            <div class="card w-full lg:w-[42rem] bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Requests per Path</h2>
                    <canvas id="web-traffic-path-chart" class="m-auto"></canvas>
                </div>
            </div>

            <div class="card w-full lg:w-[42rem] bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Reference of Incoming Requests</h2>
                    <canvas id="web-traffic-ref-chart" class="m-auto"></canvas>
                </div>
            </div>

        </div>
        <div class="w-full shadow-xl card bg-base-100">
            <div class="card-body">
                <h2 class="card-title">Number of Requests across the AWPAP</h2>
                <canvas id="web-traffic-count-chart"></canvas>
            </div>
        </div>
        <div>
            <div class="w-full shadow-xl card bg-base-100">
                <div class="card-body">
                    <h2 class="card-title">Latest Requests</h2>
                    <div class="space-y-4 overflow-x-auto">
                        <table class="table table-xs table-zebra">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>IP Address</th>
                                    <th>URL</th>
                                    <th>Country</th>
                                    <th>Ref</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $recents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($recent['ip']); ?></td>
                                        <td><?php echo e($recent['url'] . (isset($recent['query']) ? '?' . $recent['query'] : '')); ?>

                                        </td>
                                        <td><?php echo e($recent['country']); ?></td>
                                        <td><?php echo e($recent['ref']); ?></td>
                                        <td class="recent-timestamp tooltip" data-tip="<?php echo e($recent['created_at']); ?>">
                                            <?php echo e($recent['created_at']); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script defer>
        const timestamps = document.querySelectorAll("table .recent-timestamp");

        for (const timestamp of timestamps) {
            timestamp.dataset.tip = moment.utc(timestamp.dataset.tip).local().format('YYYY-MM-DD HH:mm:ss');
            timestamp.innerText = moment.utc(timestamp.innerText).local().startOf('minutes').fromNow();
        }



        const pathChartCtx = document.getElementById('web-traffic-path-chart');


        new Chart(pathChartCtx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($traffics['labels']); ?>,
                datasets: [{
                    data: <?php echo e(json_encode($traffics['data'])); ?>,
                    hoverOffset: 4
                }]
            },
        });

        const refChartCtx = document.getElementById('web-traffic-ref-chart');


        new Chart(refChartCtx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($ref_traffics['labels']); ?>,
                datasets: [{
                    data: <?php echo e(json_encode($ref_traffics['data'])); ?>,
                    hoverOffset: 4
                }]
            },
        });

        const countChartCtx = document.getElementById('web-traffic-count-chart');

        const histories = <?php echo json_encode($history); ?>;

        const counts = {};

        for (let i = 0; i < 25; i++) {
            counts[moment().subtract(i, "hours").format('YYYY-MM-DD HH:00:00')] = 0;
        }

        for (const history of histories) {
            counts[moment.utc(history["start_time"]).local().format('YYYY-MM-DD HH:00:00')] = history["count"];
        }

        new Chart(countChartCtx, {
            type: 'line',
            data: {
                labels: Array.from({
                    length: 25
                }).map((_, idx) => `${24 - idx}hrs ago`),
                datasets: [{
                    label: 'Number of Requests',
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
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/admin/analytics/web-traffic.blade.php ENDPATH**/ ?>