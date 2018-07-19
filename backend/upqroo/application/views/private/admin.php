<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/trejocode.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/admin.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>UPQROO - ADMIN</title>
</head>
<body>
    <div class="admin flex">
        <div class="column">
            <div class="admin-header justify-center">
                <div class="container">
                    <div class="left justify-start">
                        <div class="logo responsive-img">
                            <img src="<?php echo base_url();?>assets/img/logo-upqroo.png" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <div class="row justify-end align-center">
                            <div class="current-user justify-end">
                                <h4><?php echo $nombre; ?></h4>
                            </div>
                            <div class="end-session justify-end">
                                <a href="<?php echo base_url().'index.php/logout';?>"><i class="fas fa-sign-out-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="left-panel justify-center">
                <div class="container">
                    <div class="column">
                        <div class="white-space-16"></div>
                        <div class="panel-item align-center">
                            <i class="far fa-newspaper"></i>
                            <a href="#">Noticias</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="#">Ver Noticias</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="#">Agregar Noticia</a>
                        </div>

                        <div class="white-space-16"></div>

                        <div class="panel-item align-center">
                            <i class="far fa-calendar-alt"></i>
                            <a href="#">Eventos</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="#">Ver Eventos</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="#">Agregar Evento</a>
                        </div>

                        <div class="white-space-16"></div>

                        <div class="panel-item align-center">
                            <i class="fas fa-university"></i>
                            <a href="#">Páginas</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="#">Ver Páginas</a>
                        </div>

                        <div class="white-space-16"></div>

                        <div class="panel-item align-center">
                            <i class="fas fa-briefcase"></i>
                            <a href="#">Trabajos</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="#">Ver Trabajos</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="#">Agregar Trabajos</a>
                        </div>

                    </div>
                </div>
            </div>