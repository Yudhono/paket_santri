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
                        <!-- Forms General Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="gi gi-notes_2"></i>Form General Elements<br><small>Clean and professional forms for your UI!</small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Forms</li>
                            <li><a href="">General</a></li>
                        </ul>
                        <!-- END Forms General Header -->

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Title -->
                                    <div class="block-title">
                                        <h2><strong>Input Data Paket</h2>
                                    </div>
                                    <!-- END Form Elements Title -->

                                    <!-- Basic Form Elements Content -->
                                    <form action="<?php echo base_url('paket/update/' . $paket['id_paket']); ?>); ?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Nama Paket</label>
                                            <div class="col-md-9">
                                                <input type="text" id="example-text-input" name="nama_paket" value="<?php echo $paket['nama_paket']; ?>" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-email-input">Tanggal Diterima</label>
                                            <div class="col-md-9">
                                                <input type="text" id="example-text-input" name="tanggal_diterima" value="<?php echo $paket['tanggal_diterima']; ?>" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Kategori Paket</label>
                                            <div class="col-md-9">
                                                <select id="example-select" name="id_kategori" class="form-control" size="1">
                                                    <option value="<?php echo $paket['id_kategori']; ?>"><?php echo $paket['nama_kategori']; ?></option>
                                                <?php
                                                foreach ($asrama as $key => $data) { ?>
                                                    <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Nama Santri</label>
                                            <div class="col-md-9">
                                                <select id="example-select" name="NIS" class="form-control" size="1">
                                                    <option value="<?php echo $paket['NIS']; ?>"><?php echo $paket['nama_santri']; ?></option>
                                                <?php
                                                foreach ($santri as $key => $data) { ?>
                                                    <option value="<?php echo $data['NIS']; ?>"><?php echo $data['nama_santri']; ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Asrama</label>
                                            <div class="col-md-9">
                                                <select id="example-select" name="id_asrama" class="form-control" size="1">
                                                    <option value="<?php echo $paket['id_asrama']; ?>"><?php echo $paket['nama_asrama']; ?></option>
                                                <?php
                                                foreach ($asrama as $key => $data) { ?>
                                                    <option value="<?php echo $data['id_asrama']; ?>"><?php echo $data['nama_asrama']; ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-email-input">Pengirim Paket</label>
                                            <div class="col-md-9">
                                                <input type="text" id="example-text-input" name="pengirim_paket" value="<?php echo $paket['pengirim_paket']; ?>" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-textarea-input">Isi Paket yg Disita</label>
                                            <div class="col-md-9">
                                                <textarea id="example-textarea-input" name="isi_paket_yg_disita" rows="9" class="form-control" placeholder=""><?php echo $paket['isi_paket_yg_disita']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Status Paket</label>
                                            <div class="col-md-9">
                                                <select id="example-select" name="status_paket" class="form-control" size="1">
                                                    <option ><?php echo $paket['status_paket']; ?></option>
                                                    <option value="diambil">diambil</option>
                                                    <option value="belum diambil">belum diambil</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Basic Form Elements Content -->
                                </div>
                                <!-- END Basic Form Elements Block -->
                            </div>
                        </div>
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

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url('/js/pages/formsGeneral.js') ?>"></script>
        <script>$(function(){ FormsGeneral.init(); });</script>
    </body>
</html>