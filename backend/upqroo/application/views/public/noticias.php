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
                        $total = count($Datos);
                        $residuo = $total%3;

                        if ($residuo == 0) 
                        {
                            $r = $residuo;
                        }
                        else
                        {
                            $r = 3 - $residuo;
                        }
                        $n = $total + $r;
                        $contador = 0;

                        for ($i=0; $i < $n; $i++) 
                        { 
                            if($contador == 0)
                            { ?>
                                <div class="news-cards">
                                    <div class="row-responsive">
                            <?php } ?>

                            <div class="new-card">
                                <div class="column">
                                    <div class="featured-img responsive-img">
                                        <?php 
                                        if (!empty($Datos[$i]->portada))
                                        { ?>
                                            <img src="<?php echo $Datos[$i]->portada; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="container">
                                        <div class="column">
                                            <div class="date">
                                                <?php 
                                                if (!empty($Datos[$i]->fecha))
                                                { ?>
                                                    <p><?php echo $Datos[$i]->fecha; ?></p>
                                                <?php } ?>
                                            </div>
                                            <div class="title">
                                                <?php 
                                                if (!empty($Datos[$i]->titulo))
                                                { ?>
                                                    <h3><?php echo $Datos[$i]->titulo; ?></h3>
                                                <?php } ?>
                                            </div>
                                            <div class="description">
                                                <?php 
                                                if (!empty($Datos[$i]->descripcion))
                                                { ?>
                                                    <p><?php echo $Datos[$i]->descripcion; ?></p>
                                                <?php } ?>
                                            </div>
                                            <?php if (!empty($Datos[$i]->idPublicaciones)) 
                                            { ?>
                                                <a class="read-more" href="<?php echo base_url().'index.php/noticia/'.$Datos[$i]->idPublicaciones.'/'.$nump?>">Leer Más</a>
                                            <?php } ?>       
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php if($contador == 2)
                            { ?>
                                </div>
                            </div>
                            <?php $contador = 0;
                            }
                            else
                            {
                                $contador++;
                            }
                        }
                    }
                    else
                    {
                        echo '<div class="white-space-32"></div><div class="title"><h2>No hay noticias para mostrar</h2></div>';
                    } ?>

                    <div class="white-space-32"></div>
                    <!-- Pagination -->
                    <?php if(!empty($Datos))
                    { 
                        echo $nump;
                        $num = $nump + 1;
                        $anterior = $nump - 1;
                        if ($nump == 1) 
                        { ?>
                            <div class="pagination justify-between">
                                <a class="next"></a>
                                <a class="next" href="<?php echo base_url().'index.php/pagina/'.$num; ?>">SIGUIENTE</a>
                            </div>
                        <?php }
                        elseif ($nump > 1) 
                        { ?>
                            <div class="pagination justify-between">
                                <a class="next" href="<?php echo base_url().'index.php/pagina/'.$anterior; ?>">ANTERIOR</a>
                                <a class="next" href="<?php echo base_url().'index.php/pagina/'.$num; ?>">SIGUIENTE</a>
                            </div>
                        <?php }
                        elseif ($Anterior == "Anterior") 
                        { ?>
                            <div class="pagination justify-between">
                                <a class="next" href="<?php echo base_url().'index.php/pagina/'.$anterior; ?>">ANTERIOR</a>
                                <a class="next"></a>
                            </div>
                        <?php } 
                    } ?>
                    <div class="white-space-32"></div>
                </div>
            </div>
        </div>
   </div>
<!-- End News Cards -->
