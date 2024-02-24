<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Usuarios";
    include 'partials/title-meta.php'; ?>

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
                    $page_title = "Gestionar Usuarios";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header">
                                    <div>
                                        <h1>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                data-bs-target="#modalUsuario">
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
                    <div class="modal fade" id="modalUsuario" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header modal-colored-header bg-primary">
                                    <h4 class="modal-title" id="myLargeModalLabel">Nuevo registro</h4>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">

                                        <input type="hidden" name="idUsuario" id="idUsuario" value="">
                                        <p class="text-primary">Todos los campos son obligatorios.</p>

                                        <div class="row">
                                            <div class="form-group col-md-6 mb-3">
                                                <label class="form-label">Ingrese el usuario</label>
                                                <input type="text" class="form-control valid validText" name="usuario"
                                                    id="usuario" required="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 mb-3">
                                                <label class="form-label">Ingrese sus nombres</label>
                                                <input type="text" class="form-control valid validText"
                                                    name="nombreUsuario" id="nombreUsuario" required="">
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <label class="form-label">Ingrese sus apellidos</label>
                                                <input type="text" class="form-control valid validText"
                                                    name="apellidoUsuario" id="apellidoUsuario" required="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="email" class="form-label">Ingrese el correo
                                                    electrónico</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    required="">
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <label class="form-label">Ingrese una contraseña</label>
                                                <input type="password" class="form-control valid validText"
                                                    name="password" id="password" required="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="estado" class="form-label">Estado de usuario</label>
                                                <select name="estado" id="estado" class="form-select">
                                                    <option>Seleccione</option>
                                                    <option>Activo</option>
                                                    <option>Inactivo</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6 mb-3">
                                                <label for="rol" class="form-label">Rol de Usuario</label>
                                                <select name="rol" id="rol" class="form-select">
                                                    <option>Seleccione</option>
                                                    <option>Activo</option>
                                                    <option>Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger rounded-pill"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary rounded-pill">Guardar</button>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
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

    <script src="<?= base_url(); ?>assets/js/pages/funciones/functions_usuarios.js"></script>

    <script src=" <?= base_url(); ?>assets/js/app.min.js"></script>
</body>

</html>