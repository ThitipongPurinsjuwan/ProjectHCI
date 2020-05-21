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
                        <div class="col-lg-3">
                            <div class="app-search">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="mdi mdi-magnify"></span>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>

                    <div class="table">
                        <table class="table table-centered mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Bonus</th>
                                    <th>Target</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sellers as $r) { ?>
                                    <tr>
                                        <td>
                                        <?php echo $r['seller_firstname'] ?>
                                        </td>
                                        <td>
                                        <?php echo $r['seller_lastname'] ?>
                                        </td>
                                        <td>
                                        <?php echo $r['bonus'] ?>
                                        </td>
                                        <td>
                                        <?php echo $r['target'] ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
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