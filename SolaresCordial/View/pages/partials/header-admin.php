<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intitmidade Confecções - Estoque</title>

    <!--Estilos-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>css/grid.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>css/aos.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>css/slick.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>css/admin-style.css">
</head>
<body>
<section class="topbar d-flex flex-wrap align-items-center align-content-center">
    <div class="container-fluid">
        <div class="row d-flex flex-wrap align-items-center">
            <div class="col-8">
                <h1 class="dash-title">Solares Cordial - Painel de Controle</h1>
            </div>
            <div class="col-4">
                <h1 class="w-100 top-info">
                        <span class="avatar">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="">
                        </span>
                    <span>
                            <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/arrow-down.svg" alt="">
                        </span>
                </h1>
            </div>
        </div><!--row-->
    </div><!--container-->
</section><!--topbar-->

<section class="sidebar">
    <div class="navigation">
        <div class="nav-toggle">
                <span>
                    <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/toggle.svg" alt="">
                </span>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="<?php echo INCLUDE_PATH; ?>admin">
                    <span class="nav-icon">
                        <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/home.svg" alt="">
                    </span>
                <span class="nav-title">
                        Dashboard
                    </span>
            </a>
        </div><!--nav-item-->
        <div class="nav-item">
            <a class="nav-link" href="#">
                    <span class="nav-icon">
                        <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/list.svg" alt="">
                    </span>
                <span class="nav-title">
                        Propostas
                    </span>
            </a>
        </div><!--nav-item-->
        <div class="nav-item">
            <a class="nav-link" href="#">
                    <span class="nav-icon">
                        <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/users.svg" alt="">
                    </span>
                <span class="nav-title">
                        Clientes
                    </span>
            </a>
        </div><!--nav-item-->
        <div class="nav-item">
            <a class="nav-link" href="#">
                    <span class="nav-icon">
                        <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/sell.svg" alt="">
                    </span>
                <span class="nav-title">
                        Vendedores
                    </span>
            </a>
        </div><!--nav-item-->
        <div class="nav-item">
            <a class="nav-link" href="#">
                    <span class="nav-icon">
                        <i class="fa-solid fa-solar-panel"></i>
                    </span>
                <span class="nav-title">
                        Fornecedores
                    </span>
            </a>
        </div><!--nav-item-->
        <div class="nav-item">
            <a class="nav-link" href="#">
                    <span class="nav-icon">
                        <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/money.svg" alt="">
                    </span>
                <span class="nav-title">
                        Financeiro
                    </span>
            </a>
        </div><!--nav-item-->
        <div class="nav-item">
            <a class="nav-link" href="#">
                    <span class="nav-icon">
                        <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/business.svg" alt="">
                    </span>
                <span class="nav-title">
                        Empresa
                    </span>
            </a>
        </div><!--nav-item-->
    </div><!--nav-item-->
    <div class="nav-item up-last">
        <a class="nav-link" href="<?php echo INCLUDE_PATH ?>configuracoes">
                <span class="nav-icon">
                    <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/settings.svg" alt="">
                </span>
            <span class="nav-title">
                    Configurações
            </span>
        </a>
    </div><!--nav-item-->
    <div class="nav-item last-item">
        <a class="nav-link" href="?logout">
                    <span class="nav-icon">
                        <img src="<?php echo INCLUDE_PATH_FULL; ?>icons/out.svg" alt="">
                    </span>
            <span class="nav-title">
                        Sair
                    </span>
        </a>
    </div><!--nav-item-->
</section><!--sidebar-->
