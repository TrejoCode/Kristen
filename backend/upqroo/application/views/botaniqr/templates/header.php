<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> BotaniQR </title>
    <meta name="author" content="Universidad Politécnica de Quitana Roo">
    <meta name="description" content="BotaniQR permite a estudiantes, administrativos e invitados, la visualización de información relacionada con el Huerto de la universidad así como el monitoreo de riego.">
    <meta name="keywords" content="BotaniQR, UPQROO, Huerto, Plantas, Vivero, Riego">
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url(); ?>/BotaniQR/favicon.ico">
    <link rel="stylesheet" href="<?php echo $base_url(); ?>BotaniQR/assets/css/style.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url(); ?>BotaniQR/assets/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="theme-color" content="#33c8a3">
</head>
<body>
<header>

    <div class="header-top flex justify align">
        <div class="container">
            <div class="row university">
                <div class="name">
                    <a href="http://www.upqroo.edu.mx/">Universidad Politécnica de Quintana Roo</a>
                </div>
                <div class="phone">
                    <a href="tel:9982831859"> <i class="fa fa-phone" aria-hidden="true"></i>(998) 283 1859</a>
                </div>
                <div class="email">
                    <a href="mailto:info@upqroo.edu.mx"><i class="fa fa-envelope" aria-hidden="true"></i>info@upqroo.edu.mx</a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-main flex justify">
        <div class="container">
            <div class="row">
                <div class="logo responsive-img">
                    <a href="<?php echo SERVER_URL ?>inicio">
                        <img src="<?php echo SERVER_URL ?>application/assets/img/LogoBotaniQR.png" alt="BotaniQR Logo">
                    </a>
                </div>
                <nav class="flex align">
                    <ul class="flex">
                        <li><a href="<?php echo SERVER_URL ?>inicio">Inicio</a></li>
                        <li><a href="<?php echo SERVER_URL ?>explorar">Explorar</a></li>
                        <li><a href="<?php echo SERVER_URL ?>noticias">Noticias</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>