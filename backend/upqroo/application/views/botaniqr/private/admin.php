<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>BotaniQR/assets/css/trejocode.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>BotaniQR/assets/css/admin.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo base_url();?>BotaniQR/favicon.ico">
    <title>UPQROO - <?php echo $title; ?></title>
    
</head>
<body>
    <div class="admin flex">
        <div class="column">
            <div class="admin-header justify-center">
                <div class="container">
                    <div class="left justify-start">
                        <div class="logo responsive-img">
                            <img src="<?php echo base_url();?>BotaniQR/assets/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <div class="row justify-end align-center">
                            <div class="current-user justify-end">
                                <h4><?php echo $nombre; ?></h4>
                            </div>
                            <div class="end-session justify-end">
                                <a href="<?php echo base_url().'index.php/botaniqr/logout';?>"><i class="fas fa-sign-out-alt"></i></a>
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
                            <i class="far fa-calendar-alt"></i>
                            <a href="<?php echo base_url().'index.php/botaniqr/administrador/ver/plantas/0'; ?>">Plantas</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'index.php/botaniqr/administrador/ver/plantas/0'; ?>">Ver Plantas</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'index.php/botaniqr/administrador/agregar/planta'; ?>">Agregar Planta</a>
                        </div>

                        <div class="white-space-16"></div>
                        <div class="panel-item align-center">
                            <i class="far fa-newspaper"></i>
                            <a href="<?php echo base_url().'index.php/botaniqr/administrador/ver/noticias/0'; ?>">Noticias</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'index.php/botaniqr/administrador/ver/noticias/0'; ?>">Ver Noticias</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'index.php/botaniqr/administrador/agregar/noticia'; ?>">Agregar Noticia</a>
                        </div>

                    </div>
                </div>
            </div>
