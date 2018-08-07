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
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <title>UPQROO - <?php echo $title; ?></title>
    
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
                                <a href="<?php echo base_url().'logout';?>"><i class="fas fa-sign-out-alt"></i></a>
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
                            <a href="<?php echo base_url().'administrador/ver/noticia/0' ?>">Noticias</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'administrador/ver/noticia/0' ?>">Ver Noticias</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'administrador/agregar/noticia' ?>">Agregar Noticia</a>
                        </div>

                        <div class="white-space-16"></div>

                        <div class="panel-item align-center">
                            <i class="far fa-calendar-alt"></i>
                            <a href="<?php echo base_url().'administrador/ver/evento/0' ?>">Eventos</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'administrador/ver/evento/0' ?>">Ver Eventos</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'administrador/agregar/evento' ?>">Agregar Evento</a>
                        </div>

                        <?php if($tipoUsuario==5)
                        {
                          echo '<div class="white-space-16"></div> <div class="panel-item align-center">
                            <i class="fas fa-university"></i>
                            <a href="#">Páginas</a>
                        </div>

                        <div class="panel-subitem">
                            <a href="'.base_url().'administrador/biotecnologia">Biotecnologia</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="'.base_url().'administrador/software">Software</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="'.base_url().'administrador/biomedica">VBiomedica</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="'.base_url().'administrador/financiera">Financiera</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="'.base_url().'administrador/pymes">Pymes</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="'.base_url().'administrador/terapia-fisica">Terapia Fisica</a>
                        </div>
                        ';
                        }
                        else if($tipoUsuario==1)
                        {
                            switch ($carrera) {
                                case 2:
                                    echo '<div class="panel-subitem">
                                            <a href="'.base_url().'administrador/biotecnologia">Biotecnologia</a>
                                          </div>';
                                    break;
                                case 3:
                                    echo '<div class="panel-subitem">
                                            <a href="'.base_url().'administrador/software">Software</a>
                                          </div>';
                                    break;
                                case 4:
                                    echo '<div class="panel-subitem">
                                            <a href="'.base_url().'administrador/biomedica">Biomedica</a>
                                          </div>';
                                    break;
                                case 5:
                                    echo '<div class="panel-subitem">
                                            <a href="'.base_url().'administrador/pymes">Pymes</a>
                                          </div>';
                                    break;
                                case 6:
                                    echo '<div class="panel-subitem">
                                            <a href="'.base_url().'administrador/financiera">Financiera</a>
                                          </div>';
                                    break;
                                case 7:
                                    echo '<div class="panel-subitem">
                                            <a href="'.base_url().'administrador/terapia-fisica">Terapia Fisica</a>
                                          </div>';
                                    break;
                            }
                        }
                        ?>

                        <div class="white-space-16"></div>

                        <div class="panel-item align-center">
                            <i class="fas fa-briefcase"></i>
                            <a href="<?php echo base_url().'administrador/ver/trabajo/0' ?>">Trabajos</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'administrador/ver/trabajo/0' ?>">Ver Trabajos</a>
                        </div>
                        <div class="panel-subitem">
                            <a href="<?php echo base_url().'administrador/agregar/trabajo/' ?>">Agregar Trabajos</a>
                        </div>

                    </div>
                </div>
            </div>
