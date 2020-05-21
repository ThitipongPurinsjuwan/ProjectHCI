<!-- Start Content-->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">Hyper</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">eCommerce</a>
                        </li>
                        <li class="breadcrumb-item active">Order Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Order Details</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-10 col-sm-11">
            <div class="horizontal-steps mt-4 mb-4 pb-5">
                <?php step_content($order_status['order_status']) ?>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Items from Order #<?php echo $order_status['orderNumber'] ?></h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Deposit</th>
                                    <th>Witdraw</th>
                                    <th>Sell</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                foreach ($orderdetails as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['product'] ?></td>
                                        <td><?php echo $row['deposit'] ?></td>
                                        <td><?php echo $row['withdraw'] ?></td>
                                        <td><?php echo $row['sell'] ?></td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td><?php echo $row['total'] ?></td>
                                    </tr>
                                <?php
                                $total = $total+$row['total'];
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Order Summary</h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Grand Total :</td>
                                    <td><?php echo $total ?></td>
                                </tr>
                                <tr>
                                    <td>Shipping Charge :</td>
                                    <td><?php echo $sc = 40 ?></td>
                                </tr>
                                <tr>
                                    <td>Estimated Tax :</td>
                                    <td><?php echo $est = 170 ?></td>
                                </tr>
                                <tr>
                                    <th>Total :</th>
                                    <th><?php echo $total = $total+$sc+$est ?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Shipping Information</h4>

                    <h5>Stanley Jones</h5>

                    <address class="mb-0 font-14 address-lg">
                        5/36 Thasala, Thasala road 13<br />
                        Nakhonsrithammarat, Post 80160<br />
                        <abbr title="Phone">P:</abbr> (123) 456-7890 <br />
                        <abbr title="Mobile">M:</abbr> (+01) 12345 67890
                    </address>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Billing Information</h4>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <p class="mb-2">
                                <span class="font-weight-bold mr-2">Payment Type:</span>
                                Money Pay
                            </p>
                            <p class="mb-2">
                                <span class="font-weight-bold mr-2">Bank :</span>
                                1600 Bath
                            </p>
                            <p class="mb-2">
                                <span class="font-weight-bold mr-2">Coin :</span>
                                64 Bath
                            </p>
                            <p class="mb-0">
                                <span class="font-weight-bold mr-2"></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Delivery Info</h4>

                    <div class="text-center">
                        <i class="mdi mdi-truck-fast h2 text-muted"></i>
                        <h5><b>UPS Delivery</b></h5>
                        <p class="mb-1"><b>Order ID :</b> xxxx235</p>
                        <p class="mb-0"><b>Payment Mode :</b> COD</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- container -->
</div>
<!-- content -->
<?php
function step_content($status)
{
    if ($status == "success")
        echo '<div class="horizontal-steps-content">
    <div class="step-item">
        <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="20/08/2018 07:24 PM">Order</span>
    </div>
    <div class="step-item current">
        <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="21/08/2018 11:32 AM">Processing</span>
    </div>
    <div class="step-item">
        <span>Unsuccessful</span>
    </div>
    <div class="step-item">
        <span>Success</span>
    </div>
</div>
<div class="process-line" style="width: 100%;"></div>';
    elseif ($status == "unsuccess")
        echo '<div class="horizontal-steps-content">
    <div class="step-item">
        <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="20/08/2018 07:24 PM">Order</span>
    </div>
    <div class="step-item">
        <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="21/08/2018 11:32 AM">Processing</span>
    </div>
    <div class="step-item current">
        <span>Unsuccessful</span>
    </div>
    <div class="step-item">
        <span>Success</span>
    </div>
</div>
<div class="process-line" style="width: 66%;"></div>';
    else
        echo '<div class="horizontal-steps-content">
    <div class="step-item">
        <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="20/08/2018 07:24 PM">Order</span>
    </div>
    <div class="step-item">
        <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="21/08/2018 11:32 AM">Processing</span>
    </div>
    <div class="step-item">
        <span>Unsuccessful</span>
    </div>
    <div class="step-item current">
        <span>Success</span>
    </div>
</div>
<div class="process-line" style="width: 33%;"></div>';
}
?>