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
                                EDITAR - SERVICIOS ESCOLARES
                            </h2>
                            <div class="white-space-8"></div>
                            <p>
                                NOTA: Puedes actualizar los enlaces descargables, más no los títulos de la navegación.
                            </p>
                            <div class="white-space-32"></div>
                            <div class="row">
                                <div class="sheet sheet-microsite justify-center bordered">
                                    <div class="container">
                                        <form class="admin-form" action="" method="post">
                                            <div class="column"> 
                                                <!-- Overview -->
                                                <div class="column admin-overview-container">
                                                    <div class="row">
                                                        <!-- Resumen -->
                                                        <div class="microsite-resumen column">
                                                            <div class="white-space-32"></div>
                                                            <div class="title-component align-center">
                                                                <h3>
                                                                    MENÚS NAVEGACIÓN
                                                                </h3>
                                                            </div>
                                                            <div class="white-space-16"></div>
                                                            <h4>
                                                                CALENDARIO
                                                            </h4>
                                                            <div class="white-space-8"></div>
                                                            <div class="auto color-white">
                                                                <a class="btn btn-lightBlue" id="calendarioClick">
                                                                    <i class="fas fa-file-pdf"></i> ACTUALIZAR DOCUMENTO
                                                                </a>
                                                            </div>
                                                            <input type="file" id="calendariofile" name="calendario" class="hidden">

                                                           <!-- --> 
                                                           <div class="white-space-24"></div>
                                                            <h4>
                                                                REINSCRIPCIÓN
                                                            </h4>
                                                            <div class="white-space-8"></div>
                                                            <div class="auto color-white">
                                                                <a class="btn btn-lightBlue" id="reinscripcionClick">
                                                                    <i class="fas fa-file-pdf"></i> ACTUALIZAR DOCUMENTO
                                                                </a>
                                                            </div>
                                                            <input type="file" id="reinscripcionfile" name="reinscripcion" class="hidden">

                                                            <!-- -->
                                                            <div class="white-space-24"></div>
                                                            <h4>
                                                                TITULACIÓN
                                                            </h4>
                                                            <div class="white-space-8"></div>
                                                            <div class="auto color-white">
                                                                <a class="btn btn-lightBlue" id="titulacionClick">
                                                                    <i class="fas fa-file-pdf"></i> ACTUALIZAR DOCUMENTO
                                                                </a>
                                                            </div>
                                                            <input type="file" id="titulacionfile" name="titulacion" class="hidden">
                                                            
                                                        </div> <!-- // End Resumen -->
                                                        <div class="microsite-objetivos column">
                                                            <div class="white-space-32"></div>
                                                            <div class="title-component align-center">
                                                                <h3>
                                                                    ADMISIÓN
                                                                </h3>                                                                
                                                            </div>
                                                            <div class="white-space-16"></div>
                                                            <h4>
                                                                PROCESO DE ADMISIÓN
                                                            </h4>
                                                            <div class="white-space-8"></div>
                                                            <div class="auto color-white">
                                                                <a class="btn btn-lightBlue" id="admisionClick">
                                                                    <i class="fas fa-file-pdf"></i> ACTUALIZAR DOCUMENTO
                                                                </a>
                                                            </div>
                                                            <input type="file" id="admisionfile" name="admision" class="hidden">
                                                            
                                                            <!-- -->
                                                            <div class="white-space-24"></div>
                                                            <h4>
                                                                EXANI II
                                                            </h4>
                                                            <div class="white-space-8"></div>
                                                            <div class="auto color-white">
                                                                <a class="btn btn-lightBlue" id="exaniClick">
                                                                    <i class="fas fa-file-pdf"></i> ACTUALIZAR DOCUMENTO
                                                                </a>
                                                            </div>
                                                            <input type="file" id="exanifile" name="exani" class="hidden">
                                                            
                                                            <!-- -->
                                                            <div class="white-space-24"></div>
                                                            <h4>
                                                                RESULTADOS MARZO
                                                            </h4>
                                                            <div class="white-space-8"></div>
                                                            <div class="auto color-white">
                                                                <a class="btn btn-lightBlue" id="resultados1Click">
                                                                    <i class="fas fa-file-pdf"></i> ACTUALIZAR DOCUMENTO
                                                                </a>
                                                            </div>
                                                            <input type="file" id="resultados1file" name="resultados1" class="hidden">

                                                            <!-- -->
                                                            <div class="white-space-24"></div>
                                                            <h4>
                                                                RESULTADOS MAYO
                                                            </h4>
                                                            <div class="white-space-8"></div>
                                                            <div class="auto color-white">
                                                                <a class="btn btn-lightBlue" id="resultados2Click">
                                                                    <i class="fas fa-file-pdf"></i> ACTUALIZAR DOCUMENTO
                                                                </a>
                                                            </div>
                                                            <input type="file" id="resultados2file" name="resultados2" class="hidden">
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div> <!-- // END Overview -->
                                                

                                                <!-- Contenido Dinámico -->
                                                <div class="contenedor-componentes column" id="contenedor-componentes">
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
        document.getElementById('calendarioClick').onclick = function() {
            document.getElementById('calendariofile').click();
        };
        document.getElementById('reinscripcionClick').onclick = function () {
            document.getElementById('reinscripcionfile').click();
        };
        document.getElementById('titulacionClick').onclick = function () {
            document.getElementById('titulacionfile').click();
        };
        document.getElementById('admisionClick').onclick = function () {
            document.getElementById('admisionfile').click();
        };
        document.getElementById('exaniClick').onclick = function () {
            document.getElementById('exanifile').click();
        };
        document.getElementById('resultados1Click').onclick = function () {
            document.getElementById('resultados1file').click();
        };
        document.getElementById('resultados2Click').onclick = function () {
            document.getElementById('resultados2file').click();
        };
    </script>
</body>

</html>