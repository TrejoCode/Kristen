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
                                                <a class="read-more" href="echo base_url().'index.php/noticia?id='.$Datos[$i]->idPublicaciones; ">Leer Más</a>
                                            <?php } ?>       
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <?php


                            if($contador == 2)
                            { ?>
                            </div>
                                </div>
                                <?php 
                                $contador = 0;
                            }else{
                                 $contador++;
                            }

                           
                       }
                        /*$cont = 0;
                        $total = count($Datos);
                        while ($cont != $total) 
                        { ?>
                            <div class="news-cards">
                                <div class="row-responsive">
                                    <?php for($i = 0; $i <= 2; $i++)
                                    { 
                                        if (empty($Datos[$cont]->titulo)) 
                                        { ?>
                                            <div class="new-card">
                                                <div class="column">
                                                    <div class="featured-img responsive-img"></div>
                                                    <div class="container">
                                                        <div class="column">
                                                            <div class="date"></div>
                                                            <div class="title"></div>
                                                            <div class="description"></div>
                                                            <a class="read-more"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } 
                                        else
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
                                        <?php } $cont++;
                                    } ?>
                                </div>
                            </div>
                        <?php }*/
                   }
                    else
                    {
                        echo '<div class="white-space-32"></div><div class="title"><h2>No hay noticias para mostrar</h2></div>';
                    } ?>

                    <div class="white-space-32"></div>
                    <!-- Pagination -->
                    <?php if(!empty($Datos))
                    { 
                        $num = $nump + 1;
                        if ($nump == 1) 
                        { ?>
                            <div class="pagination justify-between">
                                <a class="next"></a>
                                <a class="next" href="<?php echo base_url().'index.php/pagina?num='.$num; ?>">SIGUIENTE</a>
                            </div>
                        <?php }
                        elseif ($nump > 1) 
                        { ?>
                            <div class="pagination justify-between">
                                <a class="next" href="<?php echo base_url().'index.php/pagina?num='.$nump; ?>">ANTERIOR</a>
                                <a class="next" href="<?php echo base_url().'index.php/pagina?num='.$num; ?>">SIGUIENTE</a>
                            </div>
                        <?php }
                    } ?>
                    <div class="white-space-32"></div>
                </div>
            </div>
        </div>
   </div>
<!-- End News Cards -->
