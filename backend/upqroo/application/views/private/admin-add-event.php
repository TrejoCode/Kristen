

<div class="admin flex">
    <div class="column">
        <div class="admin-header justify-center">
            <div class="container">
                <div class="left justify-start">
                    <div class="logo responsive-img">
                        <img src="../assets/img/logo-upqroo.png" alt="">
                    </div>
                </div>
                <div class="right">
                    <div class="row justify-end align-center">
                        <div class="current-user justify-end">
                            <h4>Lorem Ipsum</h4>
                        </div>
                        <div class="end-session justify-end">
                            <a href="#"><i class="fas fa-sign-out-alt"></i></a>
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

            <div class="admin-add-events justify-center">
                <form class="flex" action="" method="post">
                    <div class="left">
                        <div class="column">
                            <div class="white-space-16"></div>
                            <div class="title column">
                                <h2>NUEVO EVENTO</h2>
                                <div class="white-space-16"></div>
                                <h4>TÍTULO</h4>
                                <div class="white-space-8"></div>
                                <input class="input-text" type="text" name="title" required>
                            </div>
                            <div class="white-space-16"></div>
                            <div class="description column">
                                <h4>DESCRIPCIÓN CORTA</h4>
                                <div class="white-space-8"></div>
                                <textarea class="input-textarea" name="description" rows="2" required></textarea>
                            </div>
                            <div class="white-space-32"></div>
                            <h2>CONTENIDO</h2>
                            <div class="white-space-32"></div>
                            <h4>PARRAFO 1</h4>
                            <div class="white-space-8"></div>
                            <textarea class="input-textarea" name="p1" rows="4" required></textarea>
                            <div class="white-space-16"></div>
                            <h4>PARRAFO 2</h4>
                            <div class="white-space-8"></div>
                            <textarea class="input-textarea" name="p2" rows="4"></textarea>
                            <div class="white-space-16"></div>
                            <h4>IMÁGENES</h4>
                            <p><em>SOLO PUEDEN SUBIR 3 IMÁGENES</em></p>
                            <div class="white-space-8"></div>
                            <div><a class="btn btn-blue" id="gallery-img-click" href="#"><i class="fas fa-file-upload"></i> SUBIR IMÁGENES</a></div>
                            <input class="input-file-h" id="gallery-img" type="file" name="gallery-img" multiple>
                            <div class="white-space-32"></div>
                            <h4>ENLACE 1</h4>
                            <div class="white-space-8"></div>
                            <input class="input-text" type="text" name="file1">
                            <div class="white-space-8"></div>
                            <h4>ENLACE 2</h4>
                            <div class="white-space-8"></div>
                            <input class="input-text" type="text" name="file2">
                            <div class="white-space-8"></div>
                            <h4>ENLACE 3</h4>
                            <div class="white-space-8"></div>
                            <input class="input-text" type="text" name="file3">
                            <div class="white-space-16"></div>
                        </div>
                    </div>


                    <div class="right justify-center">
                        <div class="container">
                            <div class="column">
                                <div class="white-space-16"></div>
                                <h4>IMAGEN DE PORTADA</h4>
                                <div class="white-space-16"></div>
                                <div class="featured-img responsive-img">
                                    <img src="../assets/img/featured.jpeg" alt="">
                                </div>
                                <div class="white-space-8"></div>
                                <div><a class="btn btn-blue" id="featured-img-click" href="#"><i class="fas fa-file-upload"></i> CAMBIAR IMAGEN</a></div>
                                <input class="input-file-h" id="featured-img" type="file" name="featured-img">
                                <div class="white-space-32"></div>
                                <h4>ETIQUETAS</h4>
                                <div class="white-space-8"></div>
                                <p>Sepáralas por coma</p>
                                <div class="white-space-16"></div>
                                    <input class="input-text" type="text" name="tags">
                                <div class="white-space-16"></div>
                                <div class="row">
                                    <label><input type="checkbox" name="isNotificable" value="Notificar"><span> ENVIAR NOTIFICACIÓN</span></label>
                                </div>
                                <div class="white-space-32"></div>
                                <input class="btn btn-blue" type="submit" value="PUBLICAR">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>