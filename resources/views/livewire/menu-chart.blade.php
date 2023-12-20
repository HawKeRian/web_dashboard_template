<div class="container">
    <div class="content p-0 m-0">
        @include('nav_bar')

        {{-- Content --}}
        <div class="flex-auto py-4">
            <div class="flex justify-between items-center">
                <h3 class="text-3xl font-extrabold dark:text-white/75 uppercase">Chart Plotting Template</h3>

                @include('theme_menu')
            </div>

            <div class="text-center text-white">
                <h1 class="text-extrabold">For others chart types, please check in CanvasJS website</h1>
                <a target="_blank" href="https://canvasjs.com/">https://canvasjs.com/</a>
            </div>

            <div id="barChart_container" class="mx-2 mt-4"></div>



        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.onload = function () {
            // https://canvasjs.com/php-charts/responsive-chart/
            var barchart = new CanvasJS.Chart("barChart_container", {
                animationEnabled: true,
                theme: "dark2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Bar Chart Template with Dummy Data"
                },
                axisY: {
                    title: "Product Price"
                },
                data: [{
                    type: "column",
                    dataPoints: <?php echo json_encode($barchart_data, JSON_NUMERIC_CHECK); ?>
                }]
            });
            
            barchart.render();
        }
    </script>
@endpush