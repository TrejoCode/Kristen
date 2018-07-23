<div class="home flex">
    <div class="column">
        <!-- Slider -->
        <div class="slider">
            <div class="slide">
                <a href="#">
                    <img src="<?php echo base_url();?>assets/img/slide1.jpg" alt="">
                </a>
            </div>
            <div class="slide">
                <a href="#">
                    <img src="<?php echo base_url();?>assets/img/slide2.jpg" alt="">
                </a>
            </div>
            <div class="slide">
                <a href="#">
                    <img src="<?php echo base_url();?>assets/img/slide1.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- End Slider -->

        <!-- Quick-Info -->
        <div class="quick-info justify-center">
            <div class="row-responsive">
                <div class="left justify-center">
                    <div class="inner-container">
                        <div class="column">
                            <div class="white-space-64"></div>
                            <h2 class="textHuge">LA OFERTA EDUCATIVA SUPERIOR CON ÁREAS DE OPORTUNIDADES Y CRECIMIENTO</h2>
                            <div class="white-space-16"></div>
                            <p>Somos una Universidad con desarrollo inteligente, sostenible e integrador; efectiva y eficiente.<p>
                            <p>Los caminos hay que construirlos, los horizontes hay que alcanzarlos y el futuro hay que soñarlo. </p>
                            <p>Integrate al progreso continuo, las cosas no ocurren por si mismas, ¡Únete a UPQROO!</p>
                            <div class="white-space-32"></div>
                            <div>
                                <a class="btn btn-blue" href="#">CONOCER MÁS</a>
                            </div>
                            <div class="white-space-64"></div>
                        </div>
                    </div>

                </div>
                <div class="right justify-center">
                    <div class="container">
                        <div class="column">
                            <div class="records column align-center">
                                <div class="white-space-64"></div>
                                <div class="row-responsive">
                                    <div class="group column align-center">
                                        <h2>+100</h2>
                                        <p>Docentes / Investigadores</p>
                                    </div>
                                    <div class="group column align-center">
                                        <h2>+1100</h2>
                                        <p>Estudiantes</p>
                                    </div>
                                </div>
                                <div class="white-space-64"></div>
                                <div class="row-responsive">
                                    <div class="group column align-center">
                                        <h2>6</h2>
                                        <p>Carreras</p>
                                    </div>
                                    <div class="group column align-center">
                                        <h2>8</h2>
                                        <p>Laboratorios</p>
                                    </div>
                                </div>
                                <div class="white-space-32"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Quick-Info -->

        <!-- Carreras -->
        <div class="careers justify-center">
            <div class="container">
                <div class="column">
                    <div class="white-space-64"></div>
                    <div class="title justify-start">
                        <h2 class="textHuge">CARRERAS</h2>
                    </div>
                    <div class="white-space-32"></div>
                    <div class="column">
                        <div class="row-responsive">
                            <div class="career">
                                <div class="responsive-img">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>assets/img/carrera-soft.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="career">
                                <div class="responsive-img">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>assets/img/carrera-biot.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="career">
                                <div class="responsive-img">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>assets/img/carrera-biom.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row-responsive">
                            <div class="career">
                                <div class="responsive-img">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>assets/img/carrera-fina.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="career">
                                <div class="responsive-img">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>assets/img/carrera-pyme.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="career">
                                <div class="responsive-img">
                                    <a href="#">
                                        <img src="<?php echo base_url();?>assets/img/carrera-tera.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="white-space-64"></div>
                </div>
            </div>
        </div>
        <!-- End Carreras -->

        <!-- Call To Action -->

        <div class="call-to-action justify-center align-center" style="background-image: url(<?php echo  base_url();?>assets/img/parallax-uni.jpg);">
            <div class="container">
                <div class="column">
                    <div class="white-space-64"></div>
                    <h2 class="textHuge">FORMANDO EL FUTURO</h2>
                    <div class="white-space-16"></div>
                    <p>Se parte de la Universidad Politécnica de Quintana Roo. <br> Haz la mejor elección para tú futuro</p>
                    <div class="white-space-16"></div>
                    <div class="">
                        <a class="btn btn-blue" href="#">PROCESO DE ADMISIÓN</a>
                    </div>
                    <div class="white-space-64"></div>
                </div>
            </div>
        </div>

        <!-- End Call To Action -->

        <!-- News Cards -->

        <div class="news justify-center">
            <div class="container">
                <div class="column">
                    <div class="white-space-64"></div>
                    <h2 class="textHuge">Últimas Noticias</h2>
                    <div class="white-space-32"></div>
                    <div class="news-cards">
                        <div class="row-responsive">

                            <div class="new-card">
                                <div class="column">
                                    <div class="featured-img responsive-img">
                                        <img src="<?php echo base_url();?>assets/img/noticia.jpg" alt="">
                                    </div>
                                    <div class="container">
                                        <div class="column">
                                         <?php foreach ($noticias as $noticia) {?>
                                                <div class="date">
                                                    <p><?php echo $noticia['fecha']  ?></p>
                                                </div>
                                                <div class="title">
                                                    <h3><?php echo $noticia['titulo']?></h3>
                                                </div>
                                                <div class="description">
                                                    <p><?php echo $noticia['descripcion']?></p>
                                                </div>
                                                <a class="read-more" href="#">Leer Más</a>

                                            

                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new-card">
                                <div class="column">
                                    <div class="featured-img responsive-img">
                                        <img src="<?php echo base_url();?>assets/img/noticia.jpg" alt="">
                                    </div>
                                    <div class="container">
                                        <div class="column">
                                          <?php foreach ($noticias as $noticia) { ?>
                                                <div class="date">
                                                    <p><?php echo $noticia['fecha']  ?></p>
                                                </div>
                                                <div class="title">
                                                    <h3><?php echo $noticia['titulo']?></h3>
                                                </div>
                                                <div class="description">
                                                    <p><?php echo $noticia['descripcion']?></p>
                                                </div>
                                                <a class="read-more" href="#">Leer Más</a>

                                            

                                                <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="new-card">
                                <div class="column">
                                    <div class="featured-img responsive-img">
                                        <img src="<?php echo base_url();?>assets/img/noticia.jpg" alt="">
                                    </div>
                                    <div class="container">
                                        <div class="column">
                                          <?php foreach ($noticias as $noticia) { ?>
                                                <div class="date">
                                                    <p><?php echo $noticia['fecha']  ?></p>
                                                </div>
                                                <div class="title">
                                                    <h3><?php echo $noticia['titulo']?></h3>
                                                </div>
                                                <div class="description">
                                                    <p><?php echo $noticia['descripcion']?></p>
                                                </div>
                                                <a class="read-more" href="#">Leer Más</a>

                                            

                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="white-space-64"></div>
                </div>
            </div>
        </div>

    <!-- End News Cards -->

    <!-- Events -->

    <div class="events justify-center">
        <div class="container">
            <div class="column">
                <div class="white-space-64"></div>
                <h2 class="textHuge">Próximos Eventos</h2>
                <div class="white-space-32"></div>
                <div class="events-cards">
                    <div class="row-responsive">

                        <div class="event-card">
                            <div class="column">
                                <div class="row-responsive">
                                    <div class="date column justify-center">
                                        <div class="day justify-center">
                                            <p>31</p>
                                        </div>
                                        <div class="month justify-center">
                                            <p>AGOSTO</p>
                                        </div>
                                        <div class="year justify-center">
                                            <p>2018</p>
                                        </div>
                                    </div>
                                    <div class="info justify-center">
                                        <div class="container">
                                            <div class="column">
                                                <div class="title">
                                                    <h3>Semana Nacional Ciencia y Tecnología</h3>
                                                </div>
                                                <div class="schedule align-center">
                                                    <i class="far fa-clock"></i>
                                                    <p>13:00</p>
                                                </div>
                                                <a  class="read-more" href="#">Conocer Más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event-card">
                            <div class="column">
                                <div class="row-responsive">
                                    <div class="date column justify-center">
                                        <div class="day justify-center">
                                            <p>31</p>
                                        </div>
                                        <div class="month justify-center">
                                            <p>AGOSTO</p>
                                        </div>
                                        <div class="year justify-center">
                                            <p>2018</p>
                                        </div>
                                    </div>
                                    <div class="info justify-center">
                                        <div class="container">
                                            <div class="column">
                                                <div class="title">
                                                    <h3>Semana Nacional Ciencia y Tecnología</h3>
                                                </div>
                                                <div class="schedule align-center">
                                                    <i class="far fa-clock"></i>
                                                    <p>13:00</p>
                                                </div>
                                                <a  class="read-more" href="#">Conocer Más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event-card">
                            <div class="column">
                                <div class="row-responsive">
                                    <div class="date column justify-center">
                                        <div class="day justify-center">
                                            <p>31</p>
                                        </div>
                                        <div class="month justify-center">
                                            <p>AGOSTO</p>
                                        </div>
                                        <div class="year justify-center">
                                            <p>2018</p>
                                        </div>
                                    </div>
                                    <div class="info justify-center">
                                        <div class="container">
                                            <div class="column">
                                                <div class="title">
                                                    <h3>Semana Nacional Ciencia y Tecnología</h3>
                                                </div>
                                                <div class="schedule align-center">
                                                    <i class="far fa-clock"></i>
                                                    <p>13:00</p>
                                                </div>
                                                <a  class="read-more" href="#">Conocer Más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="white-space-64"></div>
            </div>
        </div>
    </div>

    <!-- End Events -->

    <!-- Aliados -->

    <div class="aliados">

    </div>

    <!-- End Aliados -->

    </div>
</div>
