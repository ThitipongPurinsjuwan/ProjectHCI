<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url("public/assets/css/login-2.css") ?>">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url("public/assets/images/buyday.ico") ?>">
    <!-- third party css -->
    <link href="<?php echo base_url("public/assets/css/vendor/jquery-jvectormap-1.2.2.css") ?>" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    <!-- App css -->
    <link href="<?php echo base_url("public/assets/css/icons.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("public/assets/css/app.min.css") ?>" rel="stylesheet" type="text/css" id="light-style" />
    <link href="<?php echo base_url("public/assets/css/app-dark.min.css") ?>" rel="stylesheet" type="text/css" id="dark-style" />
</head>

<body>
    <!-- have to chang src -->
    <div class="container">
        <?php if ($this->session->flashdata('false')) { ?>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <i class="dripicons-checkmark mr-2"></i> username or password <strong>Invadid</strong> .
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="row m-5"></div>
        <div class="d-flex justify-content-center">
            <div class="user_card fadeInDown">
                <div class="d-flex justify-content-center ">
                    <div class="brand_logo_container">
                        <!-- have to chang src -->
                        <img src="<?php echo base_url("public/assets/images/logo_login.png") ?>" class="brand_logo" alt="Logo" width="200px">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container ">
                    <form action="<?php echo base_url("main_hci/check_user") ?>" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-append fadeIn second">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" id="username" class="form-control input_user fadeIn second" value="" placeholder="username">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append fadeIn third">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control input_pass fadeIn third" value="" placeholder="password">
                        </div>
                        <div class="form-group fadeIn fourth">
                            <div class="custom-control custom-checkbox text-white">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" class="btn login_btn fadeIn fourth">Login</button>
                        </div>
                    </form>
                </div>

                <div class="mt-4 fadeIn fiveth">
                    <div class="d-flex justify-content-center links text-white">
                        Forgot your password?
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="#">Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url("public/assets/js/vendor.min.js") ?>"></script>
    <script src="<?php echo base_url("public/assets/js/app.min.js") ?>"></script>

    <!-- third party js -->
    <script src="<?php echo base_url("public/assets/js/vendor/apexcharts.min.js") ?>"></script>
    <script src="<?php echo base_url("public/assets/js/vendor/jquery-jvectormap-1.2.2.min.js") ?>"></script>
    <script src="<?php echo base_url("public/assets/js/vendor/jquery-jvectormap-world-mill-en.js") ?>"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="<?php echo base_url("public/assets/js/pages/demo.dashboard.js") ?>"></script>
</body>

</html>