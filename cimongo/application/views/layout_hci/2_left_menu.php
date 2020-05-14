<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <!-- LOGO -->
            <a href="<?php echo base_url("main_hci/home") ?>" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="<?php echo base_url("public/assets/images/logo.png") ?>" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="<?php echo base_url("public/assets/images/logo_sm.png") ?>" alt="" height="16">
                </span>
            </a>
            <div class="h-100" id="left-side-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="metismenu side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="<?php echo base_url("main_hci/home") ?>" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Home </span>
                        </a>
                    </li>

                    <li class="side-nav-title side-nav-item">Apps</li>

                    <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Ecommerce </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?php echo base_url("main_hci/orders") ?>">Orders</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("main_hci/sellers") ?>">Sellers</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("main_hci/bonus_sellers") ?>">Bonus Sellers</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("main_hci/stock") ?>">Stock</a>
                            </li>
                        </ul>
                    </li>


                </ul>

                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->