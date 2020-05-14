                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
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
                                            <form class="form-inline">
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <label for="status-select" class="mr-2">Status</label>
                                                    <select class="custom-select" id="status-select">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Success</option>
                                                        <option value="2">Processing</option>
                                                        <option value="3">Unsuccessful</option>
                                                    </select>
                                                    <label for="status-select" class="ml-4">
                                                        <h4>Amon kumpougmit</h4>
                                                    </label>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-lg-right">
                                                <a href="<?php echo base_url("main_hci/order_bill") ?>" type="button" class="btn btn-info mb-2 mr-1"><i class="mdi mdi-plus-circle mr-2"></i>Add Order</a>
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
                                                <tr>

                                                    <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9708</a> </td>
                                                    <td>
                                                    Amon kumpougmit
                                                    </td>
                                                    <td>
                                                        August 05 2018
                                                    </td>
                                                    <td>
                                                        $176.41
                                                    </td>

                                                    <td>
                                                        <h5><span class="badge badge-success-lighten">Success</span>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url("main_hci/orderdetail") ?>" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9709</a> </td>
                                                    <td>
                                                    Amon kumpougmit
                                                    </td>
                                                    <td>
                                                        August 05 2018
                                                    </td>
                                                    <td>
                                                        $176.41
                                                    </td>
                                                    <td>
                                                        <h5><span class="badge badge-warning-lighten">processing</span>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url("main_hci/orderdetail") ?>" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        <a href="<?php echo base_url("main_hci/order_bill") ?>" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9710</a> </td>
                                                    <td>
                                                    Amon kumpougmit
                                                    </td>
                                                    <td>
                                                        August 05 2018
                                                    </td>
                                                    <td>
                                                        $176.41
                                                    </td>

                                                    <td>
                                                        <h5><span class="badge badge-danger-lighten">Unsuccessful</span>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url("main_hci/orderdetail") ?>" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        <a href="<?php echo base_url("main_hci/order_bill") ?>" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9711</a> </td>
                                                    <td>
                                                    Amon kumpougmit
                                                    </td>
                                                    <td>
                                                        August 05 2018
                                                    </td>
                                                    <td>
                                                        $176.41
                                                    </td>

                                                    <td>
                                                        <h5><span class="badge badge-success-lighten">Success</span>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url("main_hci/orderdetail") ?>" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                    </td>
                                                </tr>

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