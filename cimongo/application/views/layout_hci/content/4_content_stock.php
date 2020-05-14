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
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a class="btn btn-danger mb-2 text-white" data-toggle="modal" data-target="#add_product"><i class="mdi mdi-plus-circle mr-2"></i> Add Products</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered w-100 dt-responsive nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th style="width: 125px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        72001451
                                    </td>
                                    <td>
                                        Wooden Chairs
                                    </td>
                                    <td>
                                        $8.99
                                    </td>
                                    <td>
                                        1,874
                                    </td>
                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        72001452
                                    </td>
                                    <td>
                                        Aooden Chairs
                                    </td>
                                    <td>
                                        $8.99
                                    </td>
                                    <td>
                                        1,874
                                    </td>
                                    <td class="table-action">
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
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

    <!-- Modal -->
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
                    <div class="card-body">
                        <div class="row">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Product</label>
                                        <br />
                                        <input type="text" class="form-control" placeholder="Product" id="prod" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Price</label>
                                        <br />
                                        <input type="text" class="form-control" placeholder="Price" id="pri" />
                                    </div>
                                </div>
                            </form>
                            <!-- button -->
                            <!-- end  button -->
                        </div>
                        <div class="row">
                            <div class="col-md text-right">
                                <!-- save -->
                                <button type="button" id="btn_add" class="btn btn-primary" data-toggle="modal" data-target="#alert">
                                    <i href="" id="save_edit" class="nc-icon nc-simple-add">Save</i>
                                </button>
                                <!-- cancel -->
                                <button type="button" id="btn_close" class="btn btn-info" >
                                    <i href="" id="cancel_edit" class="nc-icon nc-simple-remove">Cancel</i>
                                </button>
                            </div>
                        </div>
                        <!-- end code -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
        <!-- ----------------<<>>------------------------- -->
        <!-- Modal -->
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

</div> <!-- container -->

</div> <!-- content -->