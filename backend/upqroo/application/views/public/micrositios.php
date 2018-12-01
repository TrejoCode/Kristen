<div class="microsite flex">
        <div class="column">
            <!-- Banner -->
            <div class="banner justify-center align-center" style="background-image: url(<?php echo base_url().$portada ?>);">
                <div class="container">
                    <div class="title">
                        <h2> <?php echo $titulo ?></h2>
                    </div>
                </div>
            </div> <!-- End Banner -->

            <div class="overview justify-center">
                <div class="container">
                    <div class="column">
                        <div class="white-space-64"></div>
                        <div class="row-responsive">
                            <div class="introduction">
                                <div class="column">
                                    <h3>RESUMEN</h3>
                                    <div class="white-space-8"></div>
                                    <p class="text-justify"><?php echo $resumen ?></p>
                                    <div class="white-space-16"></div>
                                </div>
                            </div>
                            <div class="goals">
                                <div class="column">
                                    <h3>OBJETIVO</h3>
                                    <div class="white-space-8"></div>
                                    <p class="text-justify"><?php echo $objetivo ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="white-space-32"></div>
                        <div class="about">
                            <div class="column">
                                <div class="row-responsive">
                                    <div class="modality">
                                        <div class="column">
                                            <h3>MODALIDAD</h3>
                                            <div class="white-space-8"></div>
                                            <p>CUATRIMESTRAL</p>
                                            <div class="white-space-16"></div>
                                        </div>
                                    </div>
                                    <div class="duration">
                                        <div class="column">
                                            <h3>DURACIÓN</h3>
                                            <div class="white-space-8"></div>
                                            <p><?php echo $duracion ?></p>
                                            <div class="white-space-16"></div>
                                        </div>
                                    </div>
                                    <div class="download">
                                        <div class="column">
                                            <h3>PLAN DE ESTUDIO</h3>
                                            <div class="white-space-8"></div>
                                            <div>
                                                <a class="btn btn-blue" href="#"><i class="fas fa-book"></i>DESCARGAR</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset"></div>
                                </div>
                            </div>
                        </div>
                        <div class="white-space-64"></div>
                    </div>
                </div>
            </div> <!-- End Overview -->

            <div class="skills justify-center">
                <div class="container">
                    <div class="column">
                        <div class="white-space-64"></div>
                        <div class="title">
                            <h2>HABILIDADES Y DESTREZAS DEL EGRESADO</h2>
                        </div>
                        <div class="white-space-64"></div>
                        <div class="habilities">
                            <div class="column">
                                <div class="row-responsive">
                                    <div class="hability">
                                        <div class="hability-number auto align-center">
                                            <p>01 </p>
                                        </div>
                                        <div class="hability-description">
                                            <p class="text-justify"> <?php echo $habilidad1 ?></p>
                                        </div>
                                    </div>
                                    <div class="hability">
                                        <div class="hability-number auto align-center">
                                            <p>02 </p>
                                        </div>
                                        <div class="hability-description">
                                            <p class="text-justify"> <?php echo $habilidad2 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="white-space-32"></div>
                                <div class="row-responsive">
                                    <div class="hability">
                                        <div class="hability-number auto align-center">
                                            <p>03 </p>
                                        </div>
                                        <div class="hability-description"">
                                            <p class="text-justify"> <?php echo $habilidad3 ?></p>
                                        </div>
                                    </div>
                                    <div class="hability">
                                        <div class="hability-number auto align-center">
                                            <p>04 </p>
                                        </div>
                                        <div class="hability-description">
                                            <p class="text-justify"> <?php echo $habilidad4 ?></p>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Skill -->

            <!-- News Cards -->

            <div class="news justify-center">
                <div class="container">
                    <div class="column">
                        <div class="white-space-64"></div>
                        <h2 class="textHuge">Últimas Noticias</h2>
                        <div class="white-space-32"></div>
                        <div class="news-cards">
                            <div class="row-responsive">

                            <?php for ($j=0; $j<3; $j++)
                                { ?>

                                    <div class="new-card">
                                    <div class="column">
                                        <div class="featured-img responsive-img">
                                            <img src="<?php 
                                            if(empty($noticias[$j]->portada))
                                            {
                                                echo "";
                                            }else{
                                            echo $noticias[$j]->portada;} ?>" alt="">
                                        </div>
                                        <div class="container">
                                            <div class="column">
                                                <div class="date">
                                                    <p><?php 
                                                    if (empty($noticias[$j]->fecha)) {
                                                        echo "";
                                                    }
                                                    else{
                                                        $date=date_create($noticias[$j]->fecha);
                                                        echo date_format($date,"d M Y");    
                                                    }
                                                    ?></p>
                                                </div>
                                                <div class="title">
                                                    <h3><?php
                                                    if (empty($noticias[$j]->titulo)) {
                                                        echo "";
                                                    }
                                                    else{
                                                        echo $noticias[$j]->titulo;     
                                                    }
                                                     ?></h3>
                                                </div>
                                                <div class="description">
                                                    <p><?php 
                                                    if (empty($noticias[$j]->description)) {
                                                        echo "NO HAY NOTICIAS DE ESTA CARRERA";
                                                    }
                                                    else{
                                                    echo $noticias[$j]->descripcion; }?></p>
                                                </div>
                                                <a class="read-more" href="<?php 
                                                if(empty($noticias[$j]))
                                                {
                                                   echo '#';
                                                }else
                                                {
                                                echo base_url().'ver/noticias/'.$noticias[$j]->idPublicaciones.'/1'; } ?>">Leer Más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <div class="white-space-8"></div>
                        <div class="justify-end">
                            <a class="link" href="<?php  echo base_url().'ver/noticias';?>">VER TODOS LAS NOTICIAS</a>
                        </div>
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

                            <?php for ($i=0;$i<3;$i++)
                                { 
                                ?>

                                    <div class="event-card">
                                    <div class="column">
                                        <div class="row-responsive">
                                            <div class="date column justify-center">
                                                <div class="day justify-center">
                                                    <p><?php 
                                                    if (empty($eventos[$i]->fecha)) {
                                                        echo "";
                                                    }
                                                    else{
                                                        $date=date_create($evento[$i]->fecha);
                                                        echo date_format($date,"d");    
                                                    }
                                                    ?></p>
                                                </div>
                                                <div class="month justify-center">
                                                    <p><?php 
                                                    if (empty($noticias[$i]->fecha)) {
                                                        echo "";
                                                    }
                                                    else{
                                                        $date=date_create($evento[$i]->fecha);
                                                        echo date_format($date,"M");    
                                                    }
                                                    ?></p>
                                                </div>
                                                <div class="year justify-center">
                                                    <p><?php 
                                                    if (empty($noticias[$i]->fecha)) {
                                                        echo "";
                                                    }
                                                    else{
                                                        $date=date_create($evento[$i]->fecha);
                                                        echo date_format($date,"Y");    
                                                    }
                                                    ?></p>
                                                </div>
                                            </div>
                                            <div class="info justify-center">
                                                <div class="container">
                                                    <div class="column">
                                                        <div class="title">
                                                            <h3><?php
                                                    if (empty($evento[$i]->titulo)) {
                                                        echo "NO HAY EVENTOS EN ESTA CARRERA";
                                                    }
                                                    else{
                                                        echo $evento[$i]->titulo;     
                                                    }
                                                     ?></h3>
                                                        </div>
                                                        <div class="schedule align-center">
                                                            <i class="far fa-clock"></i>
                                                            <p><?php
                                                    if (empty($evento[$i]->titulo)) {
                                                        echo "";
                                                    }
                                                    else{
                                                        echo "13:00";     
                                                    }
                                                     ?></p>
                                                        </div>
                                                        <a  class="read-more" href="<?php 
                                                if(empty($evento[$i]->idPublicaciones))
                                                {
                                                   echo '#';
                                                }else
                                                {
                                                echo base_url().'ver/evento/'.$evento[$j]->idPublicaciones.'/1'; } ?>">Conocer Más</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                        </div>
                    </div>
                    <div class="white-space-8"></div>
                    <div class="justify-end">
                        <a class="link" href="<?php echo base_url().'ver/eventos'; ?>">VER TODOS LOS EVENTOS</a>
                    </div>
                    <div class="white-space-32"></div>
                </div>
            </div>
        </div> <!-- End Events -->

        <!-- Jobs -->
        <div class="jobs justify-center">
                <div class="container">
                    <div class="column">
                        <div class="white-space-64"></div>
                        <h2 class="textHuge">Últimas Vacantes</h2>
                        <div class="white-space-32"></div>
                        <!-- New Jobs Row -->
                        <div class="jobs-cards">
                            <div class="row-responsive">

                                <?php for ($k=0;$k<3;$k++)
                                { 
                                ?>
                                <div class="job-card">
                                    <div class="column">
                                        <div class="row-responsive">
                                            <div class="date column justify-center align-center">
                                                <i class="fas fa-briefcase"></i>
                                            </div>
                                            <div class="info justify-center">
                                                <div class="container">
                                                    <div class="column">
                                                        <div class="title">
                                                            <h3><?php
                                                    if (empty($trabajos[$k]->titulo)) {
                                                        echo "";
                                                    }
                                                    else{
                                                        echo $titulot;     
                                                    }
                                                     ?></h3>
                                                        </div>
                                                        <div class="schedule align-center">
                                                            <p><?php
                                                    if (empty($descripciont)) {
                                                        echo "NO HAY TRABAJOS EN ESTA CARRERA";
                                                    }
                                                    else{
                                                        echo $descripciont;     
                                                    }
                                                     ?></p>
                                                        </div>
                                                        <a  class="read-more" href="<?php 
                                                if(empty($trabajos))
                                                {
                                                   echo '#';
                                                }else
                                                {
                                                echo base_url().'ver/vacantes/'.$trabajos[$j]->idPublicaciones.'/1'; } ?>">Ver Vacante</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>  

                            </div>
                        </div>
                        <!-- White Space 32px -->
                        <div class="white-space-32"></div>
                        <div class="justify-end">
                            <a class="link" href="<?php echo base_url().'ver/trabajos'; ?>">VER TODAS LAS VACANTES</a>
                        </div>
                        <!-- White Space 64px -->
                        <div class="white-space-64"></div>
                    </div> <!-- End Main Column -->
                </div> <!-- End Main Container -->
            </div> <!-- End Jobs -->


        <!-- Call To Action -->
        <div class="call-to-action justify-center align-center" style="background-image: url(../assets/img/parallax-uni.jpg);">
            <div class="container">
                <div class="column">
                    <div class="white-space-64"></div>
                    <h2 class="textHuge">FORMANDO EL FUTURO</h2>
                    <div class="white-space-16"></div>
                    <p class="text-justify">Se parte de la Universidad Politécnica de Quintana Roo. <br> Haz la mejor elección para tú futuro</p>
                    <div class="white-space-16"></div>
                    <div class="">
                        <a class="btn btn-blue" href="#">PROCESO DE ADMISIÓN</a>
                    </div>
                    <div class="white-space-64"></div>
                </div>
            </div>
        </div> <!-- End Call To Action -->        

        </div>
</div>
