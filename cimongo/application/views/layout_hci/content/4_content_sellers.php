        <!-- Start Content-->
        <div class="container-fluid">
            <!-- Alert box -->
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <i class="dripicons-checkmark mr-2"></i> your seller detail <strong>success edited</strong> .
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('success_delete')) { ?>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <i class="dripicons-checkmark mr-2"></i> your seller <strong>success deleted</strong> .
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('false')) { ?>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <i class="dripicons-checkmark mr-2"></i> your seller detail <strong>false edited</strong> .
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End alert box -->
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Buyday</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">eCommerce</a>
                                </li>
                                <li class="breadcrumb-item active">Sellers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sellers</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <div class="app-search">
                                        <form>
                                            <div class="text-right">
                                            <a href="<?php echo base_url("main_hci/add_sellers")?>" type="button" class="btn btn-info mb-2 mr-1"><i class="mdi mdi-plus-circle mr-2"></i>Add Seller</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($sellers as $r) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $r['seller_id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $r['seller_firstname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $r['seller_lastname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $r['phone'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $r['address'] ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('main_hci/edit_sellers/' . $r['seller_id']) ?>" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                    <a href="<?php echo base_url('main_hci/delete_seller/' . $r['seller_id']) ?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- ----------------<<>>------------------------- -->

                                <!-- Modal add product -->
                                <div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="width: 30rem;">
                                            <div class="modal-header">
                                                <div class="col-md-5">
                                                    <h4 class="modal-title" id="editLabel">Add Products</h4>
                                                </div>
                                            </div>

                                            <!-- modal-body -->
                                            <div class="modal-body">
                                                <!-- start code -->
                                                <form action="<?php echo base_url('main_hci/save') ?>" method="POST">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="">Product</label>
                                                                    <br />
                                                                    <input type="text" class="form-control" placeholder="Product" name="product_name_stock" id="product_name_stock" />
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label for="">Unit</label>
                                                                    <br />
                                                                    <input type="text" class="form-control" placeholder="unit" name="unit_stock" id="unit_stock" />
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label for="">Price</label>
                                                                    <br />
                                                                    <input type="text" class="form-control" placeholder="ราคาทุน..." name="price_stock" id="price_stock" />
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label for="">Sales</label>
                                                                    <br />
                                                                    <input type="text" class="form-control" placeholder="ราคาขาย..." name="price_sales" id="price_sales" />
                                                                </div>
                                                            </div>
                                                            <!-- button -->
                                                            <!-- end  button -->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md text-right">
                                                                <!-- save -->
                                                                <button type="submit" id="btn_add" class="btn btn-primary" data-toggle="modal">
                                                                    <i href="" id="save_edit" class="nc-icon nc-simple-add">Save</i>
                                                                </button>
                                                                <!-- cancel -->
                                                                <button type="button" id="btn_close" class="btn btn-info" data-dismiss="modal">
                                                                    <i href="" id="cancel_edit" class="nc-icon nc-simple-remove">Cancel</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- end code -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal -->
                                    <!-- ----------------<<>>------------------------- -->

                                    <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>Success </strong> Welcome to home page.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal -->
                                    <!-- ----------------<<>>------------------------- -->
                                </div>
                                <!-- end row -->

                                <!-- ----------------<<>>------------------------- -->
                                <!-- ----------------<<>>------------------------- -->
                            </div>
                            <!-- ----------------<<>>------------------------- -->
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container -->
        </div>
        <!-- content -->