<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/trejocode.css" media="screen">
    <link rel="stylesheet" href="../assets/css/admin.css" media="screen">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6"
        crossorigin="anonymous">
    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <title>UPQROO - ADMINISTRADOR</title>
</head>

<body>

    <div class="admin flex">
        <div class="column">
            <!-- Header -->
            <header>
                <div class="column">
                    <div class="header-main justify-center wow fadeInDown">
                        <div class="container">
                            <div class="row">
                                <div class="left auto">
                                    <div class="logo responsive-img">
                                        <a href="#">
                                            <img src="../assets/img/logo-upqroo.png" alt="Logo UPQROO" title="Logo UPQROO">
                                        </a>
                                    </div>
                                </div>
                                <div class="right">
                                    <nav class="row align-center justify-end">
                                        <div class="nav-item auto align-center">
                                            <i class="fas fa-newspaper"></i>
                                            <a href="#">NOTICIAS</a>
                                        </div>

                                        <div class="nav-item auto align-center">
                                            <i class="fas fa-calendar-alt"></i>
                                            <a href="#">EVENTOS</a>
                                        </div>

                                        <div class="nav-item auto align-center">
                                            <i class="fas fa-briefcase"></i>
                                            <a href="#">VACANTES</a>
                                        </div>

                                        <div class="nav-item auto align-center">
                                            <i class="fas fa-university"></i>
                                            <a href="#">PÁGINAS</a>
                                        </div>

                                        <div class="nav-item auto align-center">
                                            <i class="fas fa-users"></i>
                                            <a href="#">USUARIOS</a>
                                        </div>

                                        <div class="nav-item auto align-center">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <a href="#">SALIR</a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header> <!-- End Header -->

            <!-- Admin Content -->
            <div class="admin-content">

                <div class="admin-agregar-noticia justify-center">
                    <div class="container">
                        <div class="column">
                            <div class="white-space-32"></div>
                            <h2>
                                Editar Micrositio - Ingeniería en Software
                            </h2>
                            <div class="white-space-32"></div>
                            <div class="row">                                
                                <div class="sheet sheet-microsite justify-center bordered">
                                    <div class="container">
                                        <form class="admin-form" action="" method="post">
                                            <div class="column">
                                                <!-- Foto Portada -->
                                                <div class="white-space-32"></div>
                                                <div class="banner-img bordered-dotted responsive-img">
                                                    <img id="banner-img" src="" alt="Imagen de Portada" title="Banner Image">
                                                    <input class="hidden" id="banner-input" type="file" name="banner-img">
                                                </div>
                                                <p class="text-center info-sheet"><a id="banner-button" href="#">Click
                                                        para cambiar imagen de portada</a></p>
                                                <!-- // Fin Foto Portada --> 

                                                <!-- Overview -->
                                                <div class="column admin-overview-container">
                                                    <div class="row">
                                                        <!-- Resumen -->
                                                        <div class="microsite-resumen column">
                                                            <div class="white-space-32"></div>
                                                            <div class="title-component align-center">
                                                                <h3>Resumen</h3>
                                                            </div>
                                                            <div class="white-space-8"></div>
                                                            <textarea class="input-ghost input-ghost-parrafo text-justify" id="contenido1" name="micrositio-resumen"
                                                                maxlength="500" rows="7" placeholder="Resumen de carrera (500 carácteres máximo)"></textarea>
                                                        </div> <!-- // End Resumen -->
                                                        <div class="microsite-objetivos column">
                                                            <div class="white-space-32"></div>
                                                            <div class="title-component align-center">
                                                                <h3>Objetivos</h3>
                                                            </div>
                                                            <div class="white-space-8"></div>
                                                            <textarea class="input-ghost input-ghost-parrafo text-justify" id="contenido1" name="micrositio-objetivo"
                                                                maxlength="500" rows="7" placeholder="Objetivos de carrera (500 carácteres máximo)"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- Duración -->
                                                        <div class="microsite-resumen column">
                                                            <div class="white-space-32"></div>
                                                            <div class="title-component align-center">
                                                                <h3>Duración</h3>
                                                            </div>
                                                            <div class="white-space-8"></div>                                                            
                                                            <select name="micrositio-duracion" id="microsite-duration" class="select-ghost">
                                                                <option value="0">
                                                                    3 Años, 4 Meses
                                                                </option>
                                                                <option value="1">
                                                                    4 Años, 4 Meses
                                                                </option>
                                                            </select>
                                                        </div> <!-- // End Duración --> 
                                                        <div class="microsite-plan column">
                                                            <div class="white-space-32"></div>
                                                            <div class="title-component align-center">
                                                                <h3>Plan de estudio</h3>
                                                            </div>
                                                            <div class="white-space-8"></div>
                                                            <div class="auto color-white">
                                                                <a class="btn btn-darkBlue" id="planEstudioClick">
                                                                    <i class="fas fa-file-pdf"></i> Subir PDF
                                                                </a>
                                                            </div>
                                                            <input type="file" id="planEstudio" name="planEstudio" class="hidden">
                                                        </div>
                                                    </div>
                                                </div> <!-- // END Overview -->

                                                <div class="white-space-32"></div>
                                                <h3>HABILIDADES Y DESTREZAS DEL EGRESADO</h3>                                                
                                                <div class="row">
                                                    <!-- Habilidades -->
                                                    <div class="microsite-hability column">
                                                        <div class="white-space-32"></div>
                                                        <div class="title-component align-center">
                                                            <h3>01</h3>
                                                        </div>
                                                        <div class="white-space-8"></div>
                                                        <textarea class="input-ghost input-ghost-parrafo text-justify" id="contenido1" name="micrositio-hability1"
                                                            maxlength="250" rows="4" placeholder="Habilidades o destrezas (250 carácteres máximo)"></textarea>
                                                    </div> <!-- // End Habilidades -->
                                                    <!-- Habilidades -->
                                                    <div class="microsite-hability column">
                                                        <div class="white-space-32"></div>
                                                        <div class="title-component align-center">
                                                            <h3>02</h3>
                                                        </div>
                                                        <div class="white-space-8"></div>
                                                        <textarea class="input-ghost input-ghost-parrafo text-justify" id="contenido1" name="micrositio-hability2" maxlength="250"
                                                            rows="4" placeholder="Habilidades o destrezas (250 carácteres máximo)"></textarea>
                                                    </div> <!-- // End Habilidades -->
                                                </div>
                                            
                                                <div class="row">
                                                    <!-- Habilidades -->
                                                    <div class="microsite-hability column">
                                                        <div class="white-space-32"></div>
                                                        <div class="title-component align-center">
                                                            <h3>03</h3>
                                                        </div>
                                                        <div class="white-space-8"></div>
                                                        <textarea class="input-ghost input-ghost-parrafo text-justify" id="contenido1" name="micrositio-hability3"
                                                            maxlength="250" rows="4" placeholder="Habilidades o destrezas (250 carácteres máximo)"></textarea>
                                                    </div> <!-- // End Habilidades -->
                                                    <!-- Habilidades -->
                                                    <div class="microsite-hability column">
                                                        <div class="white-space-32"></div>
                                                        <div class="title-component align-center">
                                                            <h3>04</h3>
                                                        </div>
                                                        <div class="white-space-8"></div>
                                                        <textarea class="input-ghost input-ghost-parrafo text-justify" id="contenido1" name="micrositio-hability4"
                                                            maxlength="250" rows="4" placeholder="Habilidades o destrezas (250 carácteres máximo)"></textarea>
                                                    </div> <!-- // End Habilidades -->
                                                </div>

                                                <div class="row">
                                                    <!-- Habilidades -->
                                                    <div class="microsite-hability column">
                                                        <div class="white-space-32"></div>
                                                        <div class="title-component align-center">
                                                            <h3>05</h3>
                                                        </div>
                                                        <div class="white-space-8"></div>
                                                        <textarea class="input-ghost input-ghost-parrafo text-justify" id="contenido1" name="micrositio-hability5"
                                                            maxlength="250" rows="4" placeholder="Habilidades o destrezas (250 carácteres máximo)"></textarea>
                                                    </div> <!-- // End Habilidades -->
                                                    <!-- Habilidades -->
                                                    <div class="microsite-hability column">
                                                        <div class="white-space-32"></div>
                                                        <div class="title-component align-center">
                                                            <h3>06</h3>
                                                        </div>
                                                        <div class="white-space-8"></div>
                                                        <textarea class="input-ghost input-ghost-parrafo text-justify" id="contenido1" name="micrositio-hability6"
                                                            maxlength="250" rows="4" placeholder="Habilidades o destrezas (250 carácteres máximo)"></textarea>
                                                    </div> <!-- // End Habilidades -->
                                                </div>
                         

                                                <!-- Contenido Dinámico -->
                                                <div class="contenedor-componentes column" id="contenedor-componentes">    


                                                    <!-- Categorías -->
                                                    <div class="categorias column">
                                                        <div class="white-space-32"></div>
                                                        <h3>Categorías</h3>
                                                        <div class="white-space-8"></div>
                                                        <div class="sheet-text">
                                                            <input class="input-ghost input-ghost-list" type="text"
                                                                name="categorias" placeholder="Añade categorías, sepáralas por coma">
                                                        </div>
                                                    </div>
                                                    <!-- //End Categorías -->                                                    

                                                    <div class="publicar column">
                                                        <div class="white-space-32"></div>
                                                        <div class="auto color-white">
                                                            <input class="btn btn-darkBlue" type="submit" value="ACTUALIZAR INFORMACIÓN">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="white-space-32"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="white-space-32"></div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Admin Content -->

        </div> <!-- End Main Column -->
    </div>
    <script type="text/javascript" src="../assets/js/admin.js" async></script>
    <script>
        document.getElementById("planEstudioClick").addEventListener('click', function(){            
            document.getElementById("planEstudio").click();
        });
    </script>
</body>

</html>