<body>
    <div class="notice flex justify-center">
        <div class="container">
            <div class="row-responsive">
                <div class="left">
                    <div class="column">
                        <div class="white-space-16"></div>
                            <div class="title">
                                <h2>
                                    <?php echo $titulo; ?>
                                </h2>
                            </div>
                            <div class="post-date">
                                <div class="row-responsive">
                                    <div class="date-icon align-center">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="date-text align-center">
                                        <p><?php echo $fecha; ?></p>
                                    </div>
                                    <div class="tags-icon align-center">
                                        <i class="fas fa-tags"></i>
                                    </div>
                                    <div class="notice-tags align-center">
                                        <a href="#">NOTICIAS</a>
                                        <a href="#">ESTUDIANTES</a>
                                        <a href="#">COMUNICADOS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="white-space-8"></div>
                                <div class="notice-banner">
                                    <div class="responsive-img">
                                        <img src="<?php echo $portada; ?>" alt=" Imagen Destacada " title=" Imagen Destacada ">
                                    </div>
                                </div>
                                <div class="white-space-16"></div>
                                <div class="notice-description">
                                    <p>
                                        <?php echo $descripcion; ?>
                                    </p>
                                </div>
                                <div class="white-space-8"></div>
                                <div class="notice-description">

                                </div>
                                <div class="white-space-16"></div>
                                <div class="notice-gallery">
                                <div class="column">
                                    <div class="row-responsive">
                                        <div class="responsive-img">
                                            <img src="../assets/img/noticia.jpg" alt=" Imagen Galería " title=" Imagen Galería ">
                                        </div>
                                        <div class="responsive-img">
                                            <img src="../assets/img/noticia.jpg" alt=" Imagen Galería " title=" Imagen Galería ">
                                        </div>
                                        <div class="responsive-img">
                                            <img src="../assets/img/noticia.jpg" alt=" Imagen Galería " title=" Imagen Galería ">
                                        </div>
                                    </div>
                                    <div class="row-responsive">
                                        <div class="responsive-img">
                                            <img src="../assets/img/noticia.jpg" alt=" Imagen Galería " title=" Imagen Galería ">
                                        </div>
                                        <div class="responsive-img">
                                            <img src="../assets/img/noticia.jpg" alt=" Imagen Galería " title=" Imagen Galería ">
                                        </div>
                                        <div class="responsive-img">
                                            <img src="../assets/img/noticia.jpg" alt=" Imagen Galería " title=" Imagen Galería ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="white-space-8"></div>
                            <div class="notice-files">
                                <div class="row-responsive wrap">

                                    <div class="file-link align-center">
                                        <a class="link" href="#">
                                            <i class="fas fa-external-link-alt"></i>
                                            Convocatoria 2018 - 2019
                                        </a>
                                    </div>

                                    <div class="file-link align-center">
                                        <a class="link" href="#">
                                            <i class="fas fa-external-link-alt"></i>
                                            Convocatoria 2018 - 2019
                                        </a>
                                    </div>

                                    <div class="file-link align-center">
                                        <a class="link" href="#">
                                            <i class="fas fa-external-link-alt"></i>
                                            Convocatoria 2018 - 2019
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="white-space-32"></div>
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="container">
                            <div class="notices-latest">
                                <div class="column">
                                    <div class="white-space-16"></div>
                                    <div class="title">
                                        <h3>ÚLTIMAS NOTICIAS</h3>
                                    </div>
                                    <div class="white-space-16"></div>
                                    <div class="notice-last-card">
                                        <div class="column">

                                            <div class="thumb responsive-img">
                                                <img src="<?php echo $Ultima1->portada; ?>" alt=" Imagen Destacada " title=" Imagen Destacada ">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="title-link">
                                                <h3><a href="<?php echo base_url().'index.php/noticia?id='.$Ultima1->idPublicaciones; ?>"><?php echo $Ultima1->titulo; ?></a></h3>
                                            </div>

                                            <div class="white-space-16"></div>

                                            <div class="thumb responsive-img">
                                                <img src="<?php echo $Ultima2->portada; ?>" alt=" Imagen Destacada " title=" Imagen Destacada ">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="title-link">
                                                <h3><a href="<?php echo base_url().'index.php/noticia?id='.$Ultima2->idPublicaciones; ?>"><?php echo $Ultima2->titulo; ?></a></h3>
                                            </div>

                                            <div class="white-space-16"></div>

                                            <div class="thumb responsive-img">
                                                <img src="<?php echo $Ultima3->portada; ?>" alt=" Imagen Destacada " title=" Imagen Destacada ">
                                            </div>
                                            <div class="white-space-8"></div>
                                            <div class="title-link">
                                                <h3><a href="<?php echo base_url().'index.php/noticia?id='.$Ultima3->idPublicaciones; ?>"><?php echo $Ultima3->titulo; ?></a></h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
