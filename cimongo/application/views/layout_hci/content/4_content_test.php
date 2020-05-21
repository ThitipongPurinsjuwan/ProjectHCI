<!-- Start Content-->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="form-inline">

                    <a href="javascript: void(0);" class="btn btn-primary ml-2">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-primary ml-1">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">Home</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="row">
            <div class="col-lg-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="mdi mdi-account-multiple widget-icon"></i>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">
                            Sellers</h5>
                        <h3 class="mt-3 mb-3">5</h3>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-lg-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="mdi mdi-cart-plus widget-icon"></i>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">
                            Orders</h5>
                        <h3 class="mt-3 mb-3">5,543</h3>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
            <div class="col-lg-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="mdi mdi-currency-usd widget-icon"></i>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Order
                            Complete</h5>
                        <h3 class="mt-3 mb-3">5,492</h3>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-lg-3">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-right">
                            <i class="mdi mdi-pulse widget-icon"></i>
                        </div>
                        <h5 class="text-muted font-weight-normal mt-0" title="Growth">Order Continue
                        </h5>
                        <h3 class="mt-3 mb-3">50</h3>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row -->


    </div> <!-- end col -->
</div>

<!-- row bonus sellers -->
<div class="row">
    <div class="col-xl-12  col-lg-12">
        <div class="card text-center">
            <div class="card-body">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>
                <h2 class="header-title mb-3">Bonus Of Sellers</h2>
                <?php

                $dataPoints = array(
                    array("label" => "Jytte Petersen", "y" => 5000),
                    array("label" => "Christina Berglund", "y" => 3000),
                    array("label" => "Wendy Victorino", "y" => 5000),
                    array("label" => "Keith Franco", "y" => 5000),
                    array("label" => "Marie Bertrand", "y" => 4000),
                    array("label" => "Leslie Taylor", "y" => 5000)
                );

                ?>

                <script>
                    window.onload = function() {

                        var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            exportEnabled: true,

                            data: [{
                                type: "pie",
                                showInLegend: "true",
                                legendText: "{label}",
                                indexLabelFontSize: 16,
                                indexLabel: "{label} - #percent%",
                                yValueFormatString: "฿#,##0",
                                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                            }]
                        });
                        chart.render();

                    }
                </script>


                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


            </div>

            <!-- <div style="height: 263px;" class="chartjs-chart">
                        <canvas id="high-performing-product"></canvas>
                    </div> -->
        </div> <!-- end card-body-->
    </div> <!-- end card-->

</div> <!-- end col -->
</div>

<!-- row sellers -->
<div class="row">
<div class="col-xl-12  col-lg-12">
    <div class="card text-center">
        <div class="card-body">
            <h4 class="header-title mb-3">Sellers</h4>
            <div class="row">

                <div class="col">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <img class="fluid" style="width: 30%; height: 30%;" src="assets/images/products/product-1.jpg" alt="" srcset="">
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">
                                Kanya Pankong</h5>
                            <h4 class="mt-3 mb-3">Status <span class="badge badge-success-lighten">Success</span></h4>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <img class="fluid" style="width: 30%; height: 30%;" src="assets/images/products/product-2.jpg" alt="" srcset="">
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">
                                Amon kumpougmit</h5>
                            <h4 class="mt-3 mb-3">Status <span class="badge badge-success-lighten">Success</span></h4>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <img class="fluid" style="width: 30%; height: 30%;" src="assets/images/products/product-3.jpg" alt="" srcset="">
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">
                                wilawan soisman</h5>
                            <h4 class="mt-3 mb-3">Status <span class="badge badge-success-lighten">Success</span></h4>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <img class="fluid" style="width: 30%; height: 30%;" src="assets/images/products/product-4.jpg" alt="" srcset="">
                            <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">
                                kapa</h5>
                            <h4 class="mt-3 mb-3">Status <span class="badge badge-danger-lighten">Unsuccessful</span></h4>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <img class="fluid" style="width: 30%; height: 30%;" src="assets/images/products/product-5.jpg" alt="" srcset="">
                            <h5 class="text-muted font-weight-normal mt-0" title="Growth">
                                Pinsuwan
                            </h5>
                            <h4 class="mt-3 mb-3">Status <span class="badge badge-warning-lighten">Processing</span></h4>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <!-- <div style="height: 263px;" class="chartjs-chart">
                        <canvas id="high-performing-product"></canvas>
                    </div> -->
        </div> <!-- end card-body-->
    </div> <!-- end card-->

</div> <!-- end col -->
</div>

<!-- end row -->
</div>
<!-- container -->

</div>
<!-- content -->