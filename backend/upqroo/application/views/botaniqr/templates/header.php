<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>UPQROO - BotaniQR </title>
    <meta name="author" content="Universidad Politécnica de Quitana Roo | TrejoCode">
    <meta name="keywords" content="BotaniQR, UPQROO, Huerto, Plantas, Vivero, Riego">
    <meta name="description" content="BotaniQR permite a estudiantes, administrativos e invitados, la visualización de información relacionada con el Huerto de la universidad">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/BotaniQR/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/BotaniQR/assets/css/trejocode.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/BotaniQR/assets/css/style.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<header class="flex">
    <div class="column">
        <div class="header-top justify-center">
            <div class="container">
                <div class="university-name">
                    <a class="color-white textTiny" href="http://www.upqroo.edu.mx/" rel="follow">
                        Universidad Politécnica de Quintana Roo
                    </a>
                </div>
                <div class="university-contact justify-end">
                    <div class="phone auto">
                        <a class="color-white textTiny" href="tel:9982831859">
                            <i class="fas fa-phone"></i>
                            &nbsp (998) 283 1859
                        </a>
                    </div>
                    <div class="email auto">
                        <a class="color-white textTiny" href="mailto:info@upqroo.edu.mx">
                            <i class="fas fa-envelope"></i>
                            &nbsp info@upqroo.edu.mx
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="header-main justify-center">
            <div class="container">
                <div class="logo">
                    <div class="responsive-img">
                        <a href="#"><img src="<?php echo base_url(); ?>assets/BotaniQR/assets/img/logo.png" alt="BotaniQR Logo" title="BotaniQR Logo"></a>
                    </div>
                </div>
                <nav class="justify-end align-center">
                    <div class="nav-item auto">
                        <a href="<?php echo base_url(); ?>botaniqr"> INICIO</a>
                    </div>
                    <div class="nav-item auto">
                        <a href="<?php echo base_url().'botaniqr/'; ?>plantas">&nbsp EXPLORAR</a>
                    </div>
                    <div class="nav-item auto">
                        <a href="<?php echo base_url().'botaniqr/'; ?>noticias">&nbsp NOTICIAS</a>
                    </div>
                    <div class="nav-item auto">
                        <a href="<?php echo base_url().'botaniqr/'; ?>nosotros">&nbsp NOSOTROS</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
