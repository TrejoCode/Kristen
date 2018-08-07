<div class="noticias flex justify-center">
    <div class="container">
        <div class="column">

            <div class="white-space-64"></div>
            <div class="title">
                <h2>Últimas Noticias</h2>
            </div>
            <div class="white-space-32"></div>

            <div class="noticias-contanedor">

                <div class="row-responsive">

                <?php if(!empty($noticias))
                {
                    for($i=0; $i<(count($noticias)<3?count($noticias):3);$i++)
                    {?>

                        <div class="noticia-card">
                        <div class="column">
                            <div class="featured-img responsive-img">
                                <img src="<?php echo $noticias[$i]->imagen; ?>" alt="">
                            </div>
                            <div class="container">
                                <div class="column">
                                    <div class="date">
                                        <p><?php echo $noticias[$i]->fecha; ?></p>
                                    </div>
                                    <div class="title">
                                        <h3><?php echo $noticias[$i]->nombre; ?></h3>
                                    </div>
                                    <div class="description">
                                        <p class="text-justify"><?php echo $noticias[$i]->descripcion; ?></p>
                                    </div>
                                    <a class="read-more" href="<?php echo base_url().'botaniqr/noticias/'.$noticias[$i]->id; ?>">Leer Más</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Card -->

                    <?php }
                }
                else {
                    echo '<h2>No hay noticias para mostrar</h2>';
                }
                ?>

                </div> <!-- End Row-responsive -->
            </div> <!-- End Noticias Contenedor -->
        </div> <!-- End Main Column -->
    </div> <!-- End Main Container -->
</div>

<div class="white-space-64"></div>

<div class="call-to-action flex">
    <div class="column">
        <div class="adoptar justify-center">
            <div class="container">
                <div class="row">
                    <div class="legend color-white align-center">
                        <i class="fab fa-pagelines fa-2x"></i>
                        <h3 class="color-white">&nbsp Aún puedes adoptar una planta o árbol</h3>
                    </div>
                    <div class="call-button justify-end align-center">
                        <a class="btn btn-lightgreen" href="#">ADOPTAR PLANTAS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="plantas flex justify-center">
    <div class="container">
        <div class="column">

            <div class="white-space-64"></div>
            <div class="title">
                <h2>Plantas Nuevas</h2>
            </div>
            <div class="white-space-32"></div>

            <div class="plantas-contanedor">

                <div class="row-responsive">

                    <?php if(!empty($plantas))
                    {
                        for($i=0; $i<(count($plantas)<3?count($plantas):3);$i++)
                        {?>

                            <div class="planta-card">
                                <div class="column">
                                    <div class="featured-img responsive-img">
                                        <img src="<?php echo base_url().'assets/BotaniQR/'.$plantas[$i]->imagen; ?>" alt="">
                                    </div>
                                    <div class="container">
                                        <div class="column">
                                            <div class="date"></div>
                                            <div class="title">
                                                <h3><?php echo $plantas[$i]->nombre.' '.$plantas[$i]->cientifico; ?></h3>
                                            </div>
                                            <div class="description">
                                                <p class="text-justify"><?php echo $plantas[$i]->descripcion; ?></p>
                                            </div>
                                            <a class="read-more" href="<?php echo base_url().'botaniqr/plantas/'.$plantas[$i]->id; ?>">Leer Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Card -->

                        <?php }
                    }
                    else {
                        echo '<h2>No hay plantas para mostrar</h2>';
                    }
                    ?>

                </div> <!-- End Row-responsive -->
            </div> <!-- End Plantas Contenedor -->
            <div class="white-space-32"></div>
        </div> <!-- End Main Column -->
    </div> <!-- End Main Container -->
</div>