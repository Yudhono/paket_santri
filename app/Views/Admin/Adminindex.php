<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
    <!--ini head-->
    <?php echo view("_partials/head.php") ?>
    <!--ini head end-->
    <body>
        
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                <?php echo view("_partials/alternativesidebar.php") ?>
                <!-- END Alternative Sidebar -->

                <!-- Main Sidebar -->
                <?php echo view("_partials/mainsidebar.php") ?>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="gi gi-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-options">
                                    <li class="dropdown-header text-center">Header Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                        </div>
                                    </li>
                                    <li class="dropdown-header text-center">Page Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <div class="form-group">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                            </div>
                        </form>
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- Alternative Sidebar Toggle Button -->
                            <li>
                                <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                                    <i class="gi gi-share_alt"></i>
                                    <span class="label label-primary label-indicator animation-floating">4</span>
                                </a>
                            </li>
                            <!-- END Alternative Sidebar Toggle Button -->

                            <!-- User Dropdown -->
                            <?php echo view("_partials/userdropdown.php") ?>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Dashboard Header -->
                        <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
                        <div class="content-header content-header-media">
                            <div class="header-section">
                                <div class="row">
                                    <!-- Main Title (hidden on small devices for the statistics to fit) -->
                                    <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                                        <h1>Welcome <strong>Admin</strong><br><small>You Look Awesome!</small></h1>
                                    </div>
                                    <!-- END Main Title -->

                                    
                                </div>
                            </div>
                            <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
                            <img src="<?php echo base_url('/img/placeholders/headers/tazkia.jpg') ?>" alt="header image">
                        </div>
                        <!-- END Dashboard Header -->

                        <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>List Data Paket</h2>
                            </div>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th>Nama Paket</th>
                                            <th>Tanggal diterima</th>
                                            <th>Kategori Paket</th>
                                            <th>Penerima Paket</th>
                                            <th>Asrama</th>
                                            <th>Pengirim Paket</th>
                                            <th>Isi Paket yg Disita</th>
                                            <th>Status Paket</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($paket as $key => $data) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $key + 1; ?></td>
                                                <td class="text-center"><?php echo $data['nama_paket']; ?></td>
                                                <td class="text-center"><?php echo $data['tanggal_diterima']; ?></td>
                                                <td class="text-center"><?php echo $data['nama_kategori']; ?></td>
                                                <td class="text-center"><?php echo $data['nama_santri']; ?></td>
                                                <td class="text-center"><?php echo $data['nama_asrama']; ?></td>
                                                <td class="text-center"><?php echo $data['pengirim_paket']; ?></td>
                                                <td class="text-center"><?php echo $data['isi_paket_yg_disita']; ?></td>
                                                <td class="text-center"><?php echo $data['status_paket']; ?></td>                                                
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Content -->
                        
                        <!-- END Widgets Row -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <?php echo view("_partials/footer.php") ?>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <?php echo view("_partials/usersetting.php") ?>
        <!-- END User Settings -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url('/js/vendor/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('/js/vendor/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('/js/plugins.js') ?>"></script>
        <script src="<?php echo base_url('/js/app.js') ?>"></script>

        <!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
        <!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
        <script src="https://maps.googleapis.com/maps/api/js?key="></script>
        <script src="<?php echo base_url('/js/helpers/gmaps.min.js') ?>"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url('/js/pages/index.js') ?>"></script>
        <script>$(function(){ Index.init(); });</script>
    </body>
</html>