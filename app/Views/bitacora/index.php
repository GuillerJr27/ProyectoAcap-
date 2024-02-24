<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Bitácora";
    include 'partials/title-meta.php'; ?>
    <!-- Datatables css -->
    <link href="<?= base_url(); ?>assets/css/vendor/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/vendor/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/vendor/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/vendor/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/vendor/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/vendor/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <?php include 'partials/head-css.php'; ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        <?php include 'partials/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">

                    <?php
                    $sub_title = "Usuarios";
                    $page_title = "Bitácora";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header">
                                    <div>
                                        <h1>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                data-bs-target="#">
                                                <i class="ri-shield-cross-fill"></i>AGREGAR
                                            </button>
                                        </h1>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <table id="tablaUsuarios"
                                        class="table table-striped dt-responsive nowrap table-striped w-100">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Usuario</th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                                <th>Rol</th>
                                                <th>Status</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Puedes agregar más filas cuando conectes a la base de datos -->
                                        </tbody>
                                    </table>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->

                    <!--  Modal content for the Large example -->

                </div> <!-- container -->
            </div> <!-- content -->

            <?php include 'partials/footer.php'; ?>
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <?php include 'partials/right-sidebar.php'; ?>

    <?php include 'partials/footer-scripts.php'; ?>

    <!-- App js -->

    <script src=" <?= base_url(); ?>assets/js/app.min.js"></script>
</body>

</html>