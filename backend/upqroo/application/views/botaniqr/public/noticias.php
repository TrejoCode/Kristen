<div class="noticias flex justify-center">
    <div class="container">
        <div class="column">

            <div class="white-space-64"></div>
            <div class="title">
                <h2>Últimas Noticias</h2>
            </div>
            <div class="white-space-32"></div>

                <?php if(!empty($noticias)){
                    $count=0;
                    $registros=count($noticias);
                    for($i=0; $i<count($noticias); $i++)
                    {
                        $count++;
                        if($i%3==0)
                        {
                            $count=0;
                            echo
                            '<div class="noticias-contanedor"> <div class="row-responsive">';
                        } ?>
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
                                        <a class="read-more" href="<?php echo base_url().'index.php/botaniqr/noticias/'.$noticias[$i]->id; ?>">Leer Más</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Card -->
                        <?php  if($count==2 || ($registros<=3 && $count==$registros-1) )
                    {
                        $registros=$registros-3;
                        echo '</div> </div> <div class="white-space-16"></div>';
                    }
                    };
                }
                else
                {
                    echo '<h2>No hay noticias para mostrar</h2>';
                } ?>

            </div> <!-- End Noticias Contenedor -->
            <div class="white-space-16"></div>
        </div> <!-- End Main Column -->
    </div> <!-- End Main Container -->
</div>