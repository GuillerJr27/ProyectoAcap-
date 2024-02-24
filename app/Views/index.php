<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Iniciar Sesión";
    include 'partials/title-meta.php'; ?>

    <?php include 'partials/head-css.php'; ?>
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="<?= base_url(); ?>assets/images/auth-img.jpg" alt=""
                                    class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="index.php" class="logo-light">
                                            <img src="<?= base_url(); ?>assets/images/logo.png" alt="logo" height="22">
                                        </a>
                                        <a href="index.php" class="logo-dark">
                                            <img src="<?= base_url(); ?>assets/images/logoAcap.png" alt="dark logo"
                                                height="">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">

                                        <h4 class="fs-20">Iniciar Sesión</h4>
                                        <p class="text-muted mb-3">
                                        </p>
                                        <?php if (!empty(session()->getFlashdata('respuesta'))) { ?>
                                        <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show"
                                            role="alert">
                                            <button type="button" class="btn-close btn-close-white"
                                                data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>ERROR - </strong>
                                            <?php echo session()->getFlashdata('respuesta')['msg']; ?>
                                        </div>
                                        <?php } ?>

                                        <!-- form -->
                                        <form method="POST" action="<?= base_url('login'); ?>" autocomplete="off">
                                            <?= csrf_field() ?>
                                            <div class="mb-3">
                                                <label for="usuario" class="form-label">Usuario</label>
                                                <input class="form-control" type="text" name="usuario" id="usuario"
                                                    placeholder="Ingrese su usuario"
                                                    value="<?= set_value('usuario'); ?>">

                                                <?php if (isset($validator)) { ?>
                                                <span
                                                    class="text-danger"><?php echo $validator->getError('usuario'); ?></span>
                                                <?php } ?>

                                            </div>
                                            <div class="mb-3">
                                                <a href="auth-forgotpw.php" class="text-muted float-end"><small>Olvidó
                                                        su contraseña?</small></a>
                                                <label for="password" class="form-label">Contraseña</label>
                                                <input class="form-control" name="password" type="password"
                                                    id="password" placeholder="Ingrese su contraseña">

                                                <?php if (isset($validator)) { ?>
                                                <span
                                                    class="text-danger"><?php echo $validator->getError('password'); ?></span>
                                                <?php } ?>

                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <span
                                                        class="text-danger"><?= session()->getFlashdata('error') ?></span>
                                                </div>
                                            </div>
                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit"><i
                                                        class="ri-login-circle-fill me-1"></i> <span
                                                        class="fw-bold">Ingresar</span> </button>
                                            </div>


                                        </form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-dark-emphasis">¿No tiene cuenta? <a href="auth-register.php"
                            class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Registrarse</b></a>
                    </p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>
            //document.write(new Date().getFullYear())
            </script>
        </span>
    </footer>
    <?php include 'partials/footer-scripts.php'; ?>

    <!-- App js -->
    <script src="<?= base_url(); ?>assets/js/app.min.js"></script>

</body>

</html>