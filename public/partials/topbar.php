<!-- ========== Topbar Start ========== -->
<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-1">

            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a href="index.php" class="logo-light">
                    <span class="logo-lg">
                        <img src="<?= base_url(); ?>assets/images/logo.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="<?= base_url(); ?>assets/images/logo-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="index.php" class="logo-dark">
                    <span class="logo-lg">
                        <img src="<?= base_url(); ?>assets/images/logo-dark.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="<?= base_url(); ?>assets/images/logo-sm.png" alt="small logo">
                    </span>
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="ri-menu-line"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">


            <li class="d-none d-sm-inline-block">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                    <i class="ri-settings-3-line fs-22"></i>
                </a>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link" id="light-dark-mode">
                    <i class="ri-moon-line fs-22"></i>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="<?= base_url(); ?>assets/images/users/avatar-1.jpg" alt="user-image" width="32"
                            class="rounded-circle">
                    </span>
                    <span class="d-lg-block d-none">
                        <h5 class="my-0 fw-normal">Administrador<i
                                class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Bienvenido!</h6>
                    </div>

                    <!-- item-->
                    <a href="<?= base_url('profile'); ?>" class="dropdown-item">
                        <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                        <span>Mi cuenta</span>
                    </a>
                    <!-- item-->
                    <a href="auth-logout-2.php" class="dropdown-item">
                        <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                        <span>Cerrar sesión</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- ========== Topbar End ========== -->