<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="<?= base_url('admin'); ?>" class="logo logo-light">
        <span class="logo-lg">
            <img src="<?= base_url(); ?>assets/images/logo_dark.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="<?= base_url(); ?>assets/images/Acap.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="<?= base_url('admin'); ?>" class="logo logo-dark">
        <span class="logo-lg">
            <img src="<?= base_url(); ?>assets/images/logo_dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="<?= base_url(); ?>assets/images/Acap.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Principal</li>

            <li class="side-nav-item">
                <a href="<?= base_url(); ?>admin" class="side-nav-link">
                    <i class="ri-home-3-fill"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">

                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                    class="side-nav-link">
                    <i class="ri-team-fill"></i>
                    <span> Usuarios </span>
                    <span class="menu-arrow"></span>
                </a>

                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="<?= base_url('usuarios'); ?>">Usuarios</a>
                        </li>
                        <li>
                            <a href="<?= base_url('roles'); ?>">Roles y Permisos</a>
                        </li>
                        <li>
                            <a href="<?= base_url('bitacora'); ?>">Bitácora</a>
                        </li>
                    </ul>
                </div>

            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false"
                    aria-controls="sidebarMultiLevel" class="side-nav-link">
                    <i class="ri-settings-2-fill"></i>
                    <span> Administración </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMultiLevel">
                    <ul class="side-nav-second-level">

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"
                                aria-controls="sidebarSecondLevel">
                                <span> Clientes </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSecondLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="<?= base_url('personas'); ?>">Personas</a>
                                    </li>
                                    <!-- <li>
                                        <a href="?= base_url('contactos'); ?>">Contactos</a>
                                    </li> -->
                                    <li>
                                        <a href="<?= base_url('gradoacademico'); ?>">Grado Académico</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="<?= base_url('perfilevaluadores'); ?>">Perfil Evaluador</a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false"
                                aria-controls="sidebarThirdLevel">
                                <span> Educación </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThirdLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="<?= base_url('universidades'); ?>">Universidades</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('carreras'); ?>">Carreras</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('paises'); ?>">País</a>
                                    </li>
                                    <!-- <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false"
                                            aria-controls="sidebarFourthLevel">
                                            <span> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarFourthLevel">
                                            <ul class="side-nav-forth-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarFourLevel" aria-expanded="false"
                                aria-controls="sidebarFourLevel">
                                <span> Organigrama </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarFourLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="<?= base_url('areas'); ?>">Área</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('departamentos'); ?>">Departamento</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('cargos'); ?>">Cargo</a>
                                    </li>
                                    <!-- <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false"
                                            aria-controls="sidebarFourthLevel">
                                            <span> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarFourthLevel">
                                            <ul class="side-nav-forth-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarFiveLevel" aria-expanded="false"
                                aria-controls="sidebarFiveLevel">
                                <span>Documentos</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarFiveLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="<?= base_url('estadosolicitud'); ?>">Estado de Solicitudes</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('tiposolicitud'); ?>">Tipos de Solicitudes</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('documento'); ?>">Documentos</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('tipodocumento'); ?>">Tipos de Documentos</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('tipoacreditacion'); ?>">Tipos de Acreditación</a>
                                    </li>
                                    <!-- <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                            <span> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarFourthLevel">
                                            <ul class="side-nav-forth-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                    aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <i class=" ri-hourglass-fill"></i>
                    <span> Procesos </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="<?= base_url('solicitudes'); ?>">Solicitudes</a>
                        </li>
                        <li>
                            <a href="<?= base_url('paresevaluadores'); ?>">Pares Evaluadores</a>
                        </li>
                        <li>
                            <a href="<?= base_url('visitas'); ?>">Visitas</a>
                        </li>
                        <li>
                            <a href="<?= base_url('certificados'); ?>">Certificados</a>
                        </li>
                        <li>
                            <a href="<?= base_url('pagos'); ?>">Pagos</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="index.php" class="side-nav-link">
                    <i class="ri-upload-cloud-2-fill"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Backup </span>
                </a>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->