<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inicio</title>
    <link href="<?php echo base_url; ?>Assets/css/style.min.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/css/styles.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/DataTables/datatables.min.css" rel="stylesheet" crossorigin="anonymous"/>
    <script src="<?php echo base_url; ?>Assets/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar navbar-light py-md-3" style="background-color: #409A13;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 " href="<?php echo base_url ?>Inicio">
            <img src="<?php echo base_url ?>Assets/img/23.png" alt="" width="190" height="60">
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user-circle fa-fw fa-3x "></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" onclick="InfoUsuario();">Informacion</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?php echo base_url ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Modal-->
    <div id="info_usuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold" id="my-modal-title">Datos del usuario</h4>
                </div>
                <div class="modal-body">
                    <p class="fs-5 ">Codigo de empleado:
                        <?php echo $_SESSION['cod_emp']; ?>
                    </p>
                    <p class="fs-5 ">Nombre completo:
                        <?php echo $_SESSION['nom_emp'] . " " . $_SESSION['app_emp'] . " " . $_SESSION['apm_emp']; ?>
                    </p>
                    <p class="fs-5 ">Cargo:
                        <?php echo $_SESSION['cargo']; ?>
                    </p>
                    <p class="fs-5 ">Fecha de nacimiento:
                        <?php echo $_SESSION['fecnac_emp']; ?>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!-- Sidenav-->
    <div id="layoutSidenav">

        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseAdministracion" aria-expanded="false"
                            aria-controls="collapseAdministracion">
                            <div class="sb-nav-link-icon"><i class="fas fa-user fa-2x "></i></div>
                            Administracion
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseAdministracion" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseGestion" aria-expanded="false"
                                    aria-controls="pagesCollapseGestion">
                                    Registros
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseGestion" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">

                                        <?php if ($_SESSION['cargo'] != "gerente") { ?>
                                            <a class="nav-link" href="">Funcion bloqueada</a>
                                        <?php } ?>
                                        <?php if ($_SESSION['cargo'] == "gerente") { ?>
                                            <a class="nav-link" href="<?php echo base_url ?>Empleados">Empleados</a>
                                        <?php } ?>

                                        <?php if ($_SESSION['cargo'] != "gerente") { ?>
                                            <a class="nav-link" href="">Funcion bloqueada</a>
                                        <?php } ?>
                                        <?php if ($_SESSION['cargo'] == "gerente") { ?>
                                            <a class="nav-link" href="<?php echo base_url ?>Surubies">Surubies</a>
                                        <?php } ?>

                                        <?php if ($_SESSION['cargo'] != "gerente") { ?>
                                            <a class="nav-link" href="">Funcion bloqueada</a>
                                        <?php } ?>
                                        <?php if ($_SESSION['cargo'] == "gerente") { ?>
                                            <a class="nav-link" href="<?php echo base_url ?>Pasajes">Pasajes</a>
                                        <?php } ?>

                                        <?php if ($_SESSION['cargo'] != "gerente") { ?>
                                            <a class="nav-link" href="">Funcion bloqueada</a>
                                        <?php } ?>
                                        <?php if ($_SESSION['cargo'] == "gerente") { ?>
                                            <a class="nav-link" href="<?php echo base_url ?>Pasajeros">Pasajeros</a>
                                        <?php } ?>

                                        <?php if ($_SESSION['cargo'] != "gerente") { ?>
                                            <a class="nav-link" href="">Funcion bloqueada</a>
                                        <?php } ?>
                                        <?php if ($_SESSION['cargo'] == "gerente") { ?>
                                            <a class="nav-link" href="<?php echo base_url ?>Viajes">Viajes</a>
                                        <?php } ?>

                                    </nav>
                                </div>

                                <?php if ($_SESSION['cargo'] != "gerente") { ?>
                                    <a class="nav-link" href="">Funcion bloqueada</a>
                                <?php } ?>
                                <?php if ($_SESSION['cargo'] == "gerente") { ?>
                                    <a class="nav-link" href="<?php echo base_url ?>Rutas">Gestionar Rutas</a>
                                <?php } ?>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDatos"
                            aria-expanded="false" aria-controls="collapseDatos">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-bar fa-2x "></i></div>
                            Datos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDatos" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionDatos">
                                <a class="nav-link" href="<?php echo base_url ?>Estadisticas">Estadisticas y Graficos</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVenta"
                            aria-expanded="false" aria-controls="collapseVenta">
                            <div class="sb-nav-link-icon"><i class="fas fa-car fa-2x"></i></div>
                            Venta
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseVenta" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionVenta">

                                <a class="nav-link" href="<?php echo base_url ?>Ventas">Venta de pasajes</a>
                            </nav>
                        </div>

                    </div>
                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Usuario actual:</div>
                    <?php echo $_SESSION['nom_emp'] . " " . $_SESSION['app_emp']; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-3">