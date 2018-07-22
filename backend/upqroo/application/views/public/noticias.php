<div class="news flex">
<!-- News Cards -->
        <div class="news justify-center">
            <div class="container">
                <div class="column">
                    <div class="white-space-32"></div>
                    <h2 class="textHuge">Últimas Noticias</h2>
                    <div class="white-space-32"></div>

                    <?php if(!empty($Datos))
                    {
                        $cont = 0;
                        $total = count($Datos);
                        while ($cont != $total) 
                        { ?>
                            <div class="news-cards">
                                <div class="row-responsive">
                            <?php for($i = 0; $i <= 3; $i++)
                            {
                                if ($cont != $total) 
                                { ?>
                                    <div class="new-card">
                                        <div class="column">
                                            <div class="featured-img responsive-img">
                                                <img src="<?php echo $Datos[$cont]->portada; ?>">
                                            </div>
                                            <div class="container">
                                                <div class="column">
                                                    <div class="date">
                                                        <p><?php echo $Datos[$cont]->fecha; ?></p>
                                                    </div>
                                                    <div class="title">
                                                        <h3><?php echo $Datos[$cont]->titulo; ?></h3>
                                                    </div>
                                                    <div class="description">
                                                        <p><?php echo $Datos[$cont]->descripcion; ?></p>
                                                    </div>
                                                    <a class="read-more" href="<?php echo base_url().'index.php/noticia?id='.$Datos[$cont]->idPublicaciones; ?>">Leer Más</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } 
                                $cont++; 
                                } ?>
                                </div>
                            </div>
                        <?php }
                    }
                    else
                    {
                        echo '<div class="white-space-32"></div><div class="title"><h2>No hay noticias para mostrar</h2></div>';
                    } ?>

                    <div class="white-space-32"></div>
                    <!-- Pagination -->
                    <?php if(!empty($Datos))
                    {
                        echo '<div class="pagination justify-between">
                        <a class="prev" href="#">ANTERIOR</a>
                        <a class="next" href="#">SIGUIENTE</a>
                    </div>';
                    } ?>
                    <div class="white-space-32"></div>
                </div>
            </div>
        </div>
   </div>
<!-- End News Cards -->
