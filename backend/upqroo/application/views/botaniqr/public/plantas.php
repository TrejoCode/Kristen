<div class="white-space-25"></div>
<div class="plants-cards flex justify">
    <div class="container">
        <div class="column">
            <div class="row">
                <div class="title">
                    <h2>Nuevas Plantas</h2>
                </div>
            </div>

            <?php for($i=0; $i<count($plantas); $i++){
               echo $i%3==0?'salto':'no'; if ($i%3==0){ echo
            '<div class="white-space-16"></div>
            <div class="row">
                <div class="cards-container row-responsive">';
              }?>

                    <div class="plant-card">
                        <div class="column">
                            <div class="card-image responsive-img">
                                <img src="<?php echo base_url().'BotaniQR/'.$plantas[$i]->imagen; ?>" alt="" title="">
                            </div>
                            <div class="card-title justify">
                                <h3><?= $plantas[$i]->nombre; ?></h3>
                            </div>
                            <div class="card-details row">
                                <div class="card-status">
                                    <div class="column justify">
                                        <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="column">
                                        <p>
                                            <?= $plantas[$i]->cientifico; ?>
                                        </p>
                                        <a href="<?php echo base_url().'index.php/botaniqr/plantas/'.$plantas[$i]->id;?>" class="read-more">
                                            Conocer Más
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php if($i%3==0)
                {?>
                </div>
            </div>
            <?php } } ?>

            <div class="white-space-16"></div>
            <div class="row">
                <div class="cards-container row-responsive">

                    <?php echo count($plantas); foreach ($plantas as $dataPlant)
                    {?>
                        <div class="plant-card">
                            <div class="column">
                                <div class="card-image responsive-img">
                                    <img src="<?php echo base_url().'BotaniQR/'.$dataPlant->imagen; ?>" alt="" title="">
                                </div>
                                <div class="card-title justify">
                                    <h3><?= $dataPlant->nombre; ?></h3>
                                </div>
                                <div class="card-details row">
                                    <div class="card-status">
                                        <div class="column justify">
                                            <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="column">
                                            <p>
                                                <?= $dataPlant->cientifico; ?>
                                            </p>
                                            <a href="<?php echo base_url().'index.php/botaniqr/plantas/'.$dataPlant->id;?>" class="read-more">
                                                Conocer Más
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="white-space-25">

</div>
