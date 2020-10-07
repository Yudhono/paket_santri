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
                    <?php
                        if (!empty(session()->getFlashdata('success'))) { ?>

                            <div class="alert alert-success">
                                <?php echo session()->getFlashdata('success'); ?>
                            </div>

                        <?php } ?>
                        <?php if (!empty(session()->getFlashdata('info'))) { ?>

                            <div class="alert alert-info">
                                <?php echo session()->getFlashdata('info'); ?>
                            </div>

                        <?php } ?>

                        <?php if (!empty(session()->getFlashdata('warning'))) { ?>

                            <div class="alert alert-warning">
                                <?php echo session()->getFlashdata('warning'); ?>
                            </div>

                    <?php } ?>
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
                        <!-- Datatables Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="fa fa-table"></i>Data Santri<br><small></small>
                                </h1>
                            </div>
                        </div>
                        
                        <!-- END Datatables Header -->
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="<?php echo base_url('santri/create'); ?>" type="button" class="btn btn-primary">Tambah data</a>
                            </div>
                        </div>
                        <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>List Data Santri</h2>
                            </div>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th>NIS</th>
                                            <th>Nama Santri</th>
                                            <th>Alamat</th>
                                            <th>Asrama</th>
                                            <th>Total paket diterima</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($santri as $key => $data) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $key + 1; ?></td>
                                                <td class="text-center"><?php echo $data['NIS']; ?></td>
                                                <td class="text-center"><?php echo $data['nama_santri']; ?></td>
                                                <td class="text-center"><?php echo $data['alamat']; ?></td>
                                                <td class="text-center"><?php echo $data['nama_asrama']; ?></td>
                                                <td class="text-center"><?php echo $data['total_paket_diterima']; ?></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="<?php echo base_url('santri/edit/' . $data['NIS']); ?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?php echo base_url('santri/delete/' . $data['NIS']); ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data <?php echo $data['nama_santri']; ?>')"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Content -->
                        
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

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url('/js/pages/tablesDatatables.js') ?>"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
    </body>
</html>