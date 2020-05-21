                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Buyday</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                        <li class="breadcrumb-item active">Orders</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Orders</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-lg-8">
                                            <label for="status-select" class="mr-2">
                                                <h3> <i class="dripicons-user m-2"></i><?php echo $seller_add['seller_firstname'] . " " . $seller_add['seller_lastname'] ?></h3>
                                            </label>
                                            <!-- <div class="form-group mx-sm-3 mb-2">
                                                <h3><strong><i class="dripicons-user m-2"></i>
                                                    <label>
                                                        <?php echo $seller_add['seller_firstname'] . " " . $seller_add['seller_lastname'] ?>
                                                    </label></strong> </h3>
                                            </div> -->
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-lg-right">
                                                <a href="<?php echo base_url("main_hci/order_bill/" . $seller_add['seller_id']) ?>" type="button" class="btn btn-info mb-2 mr-1"><i class="mdi mdi-plus-circle mr-2"></i>Add Order</a>
                                            </div>
                                        </div><!-- end col-->
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Seller</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>Order Status</th>
                                                    <th style="width: 125px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($seller_order as $row) { ?>
                                                    <tr>
                                                        <td><?php echo $row['orderNumber'] ?></td>
                                                        <td>
                                                            <?php echo $seller_add['seller_firstname'] . " " . $seller_add['seller_lastname'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo "2020-08-06"; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['total'] ?>
                                                        </td>
                                                        <td>
                                                            <h5><?php echo order_check_status($row['order_status']) ?>
                                                            </h5>
                                                        </td>
                                                        <td>
                                                            <?php echo order_check_action($row['order_status'], $row['_id']) ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

                </div> <!-- content -->
                <?php
                function order_check_status($status)
                {
                    if ($status == "success") {
                        echo '<span class="badge badge-success">Success</span>';
                    } elseif ($status == "unsuccess")
                        echo '<span class="badge badge-danger">Unsuccess</span>';
                    else
                        echo '<span class="badge badge-warning">Processing</span>';
                }

                function order_check_action($status, $id)
                {
                    if ($status == "success")
                        echo "<a href=" . base_url("main_hci/orderdetail/" . $id) . " class='action-icon'> <i class='mdi mdi-eye'></i></a>";
                    else
                        echo "<a href=" . base_url("main_hci/orderdetail/" . $id) . " class='action-icon'> <i class='mdi mdi-eye'></i></a><a href=" . base_url("main_hci/order_bill") . " class='action-icon'> <i class='mdi mdi-square-edit-outline'></i></a>";
                }
                ?>