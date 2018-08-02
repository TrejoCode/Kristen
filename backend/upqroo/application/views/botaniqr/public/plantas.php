<div class="plantas flex justify-center">
    <div class="container">
        <div class="column">

            <div class="white-space-64"></div>
            <div class="title">
                <h2>Plantas Nuevas</h2>
            </div>
            <div class="white-space-32"></div>

                <?php if(!empty($plantas)){
                    $count=0;
                    $registros=count($plantas);
                    for($i=0; $i<count($plantas); $i++)
                    {
                        $count++;
                        if($i%3==0)
                        {
                            $count=0;
                            echo
                            '<div class="plantas-contanedor"> <div class="row-responsive">';
                        } ?>

                        <div class="planta-card">
                            <div class="column">
                                <div class="featured-img responsive-img">
                                    <img src="<?php echo base_url().'BotaniQR/'.$plantas[$i]->imagen; ?>" alt="">
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
                                        <a class="read-more" href="<?php echo base_url().'index.php/botaniqr/plantas/'.$plantas[$i]->id; ?>">Leer Más</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Card -->

                        <?php  if($count==2 || ($registros<=3 && $count==$registros-1) )
                    {
                        $registros=$registros-3;
                        echo '</div> </div> <div class="white-space-16"></div> ';
                    }
                    };
                }
                else
                {
                    echo '<h2>No hay plantas para mostrar</h2>';
                } ?>

            <div class="white-space-32"></div>
        </div> <!-- End Main Column -->
    </div> <!-- End Main Container -->
</div>