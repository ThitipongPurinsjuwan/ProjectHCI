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
                        <li class="breadcrumb-item active">Stock</li>
                    </ol>
                </div>
                <h4 class="page-title">Stock</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="row mb-2">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="row ml-3">
                            <h3>Add quntity</h3>
                        </div>
                        <div class="row ml-3">
                            <div class="card-body">

                                <form action="<?php echo base_url("main_hci/add_quntity_product_stock") ?>" method="post">
                                    <div class="row m-2">
                                        <div class="col-md-12">
                                            <input type="number" class="form-control" placeholder="จำนวน..." name="product_add_quntity" id="product_add_quntity" />
                                            <input style="display:none;" type="text" name="product_id" id="product_id" value="<?php echo $id ?>">
                                            <input style="display:none;" type="text" name="product_quntity_old" id="product_quntity_old" value="<?php echo $qun ?>">
                                        </div>
                                    </div>
                                    <div class="row m-2 text-right">
                                        <div class="col-md-12">
                                            <button type="submit" id="btn_add" class="btn btn-primary">
                                                <i href="" id="save_edit" class="nc-icon nc-simple-add">Save</i>
                                            </button>
                                            <!-- cancel -->
                                            <a href="<?php echo base_url("main_hci/stock") ?>" type="button" id="btn_close" class="btn btn-info">
                                                <i href="" id="cancel_edit" class="nc-icon nc-simple-remove">Cancel</i>
                                            </a>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div> <!-- container -->

</div> <!-- content -->