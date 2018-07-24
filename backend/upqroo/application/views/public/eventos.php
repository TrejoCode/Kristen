<div class= "home flex">
<div class="events justify-center">
        <div class="container">
            <div class="column">
                <div class="white-space-64"></div>
                <h2 class="textHuge">Todos los Eventos</h2>
                <div class="white-space-32"></div>

                    <?php if(!empty($Datos))
                    {
                        $cont = 0;
                        $total = count($Datos);
                        $n = 0;
                        if($total == 1){
                            $n = 0;
                        }elseif ($total == 2) {
                            $n = 1;
                        }elseif ($total == 3) {
                            $n = 2;
                        }elseif ($total > 3) {
                            $n = 3;
                        }
                        while ($cont != $total) 
                        { ?>
                            <div class="events-cards">
                                <div class="row-responsive">
                            <?php for($i = 0; $i <= $n; $i++)
                            {

                                if ($cont != $total) 
                                { ?>
                                <?php $fec = $Datos[$cont]->fecha; 
                                        list($anio, $mes, $dia) = explode("-", $fec);
                                        $rest = substr($dia, 0,2);
                                        $hora = substr($dia, 3,5);

                                        $meses = strftime("%B",$mes);
                                        if ($mes == "01") {$mes = "Enero";}
                                        elseif ($mes == "02") {$mes = "Febrero";}
                                            elseif ($mes == "03") {$mes = "Marzo";}
                                                elseif ($mes == "04") {$mes = "Abril";}
                                                    elseif ($mes == "05") {$mes = "Mayo";}
                                                        elseif ($mes == "06") {$mes = "Junio";}
                                                            elseif ($mes == "07") {$mes = "Julio";}
                                                                elseif ($mes == "08") {$mes = "Agosto";}
                                                                    elseif ($mes == "09") {$mes = "Septiembre";}
                                                                        elseif ($mes == "10") {$mes = "Octubre";}
                                                                            elseif ($mes == "11") {$mes = "Noviembre";}
                                                                                elseif ($mes == "12") {$mes = "Diciembre";}


                                ?>
                                    <div class="event-card">
                                        <div class="column">
                                             <div class="row-responsive">
                                                <div class="date column justify-center">
                                                    
                                                    <div class="day justify-center">
                                                        <p><?php echo $rest; ?></p>
                                                    </div>
                                                    <div class="month justify-center">
                                                        <p><?php echo $mes?></p>
                                                    </div>
                                                    <div class="year justify-center">
                                                        <p><?php echo $anio?></p>
                                                    </div>
                                                </div>
                                                <div class="info justify-center">
                                                    <div class="container">
                                                        <div class="column">
                                                            <div class="title">
                                                                <h3><?php echo $Datos[$cont]->titulo; ?></h3>
                                                            </div>
                                                            <div class="schedule align-center">
                                                                <i class="far fa-clock"></i>
                                                                <p><?php echo $hora?></p>
                                                            </div>
                                                            <a  class="read-more" href="<?php echo base_url().'index.php/evento?id='.$Datos[$cont]->idPublicaciones; ?>">Conocer Más</a>
                                                        </div>
                                                    </div>
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


                <div class="white-space-64"></div>
                <div class="white-space-64"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Events -->
