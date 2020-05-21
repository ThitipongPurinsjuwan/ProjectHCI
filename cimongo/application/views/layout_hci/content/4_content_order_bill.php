<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">BUYDAY</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                        <li class="breadcrumb-item active">Bill</li>
                    </ol>
                </div>
                <h4 class="page-title">Bill</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url("main_hci/add_order") ?>" method="post">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="status-select" class="mr-2">
                                    <h3> <i class="dripicons-user m-2"></i><?php echo $seller_add['seller_firstname'] . " " . $seller_add['seller_lastname'] ?></h3>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label for="status-select" class="mr-2">
                                    <h3><i class="uil uil-schedule"></i> <?php echo date("Y/m/d") ?></h3>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <div class="text-lg-right">
                                    <button type="submit" class="btn btn-success mb-2 mr-3"><i class="mdi mdi-content-save-all-outline"></i> Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Product</th>
                                        <th>Withdraw :</th>
                                        <th>Deposit :</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $r) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $r['product_name'] ?>
                                            </td>
                                            <td>
                                                <input style="width: 100px;" class="form-control" type="input" id="w_<?php echo $r['product_id'] ?>" name="w_<?php echo $r['product_id'] ?>" />
                                            </td>
                                            <td>
                                                <input style="width: 100px;" class="form-control" type="input" id="d_<?php echo $r['product_id'] ?>" name="d_<?php echo $r['product_id'] ?>" />
                                            </td>
                                            <td>
                                                <?php echo $r['selas'] ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div> <!-- container -->

</div> <!-- content -->


?>