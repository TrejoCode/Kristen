<div class="white-space-25"></div>
<div class="planta flex justify">
    <div class="container">
        <div class="column">
            <div class="title">
                <h2><?php echo $nombre;?></h2>
            </div>
            <div class="cname">
                <h3><?php echo $cientifico;?></h3>
            </div>
            <div class="white-space-8"></div>
            <div class="row-responsive">
                <div class="plant-container">
                    <div class="left">
                        <div class="responsive-img" id="planta-img">
                            <img src="<?php echo base_url().'BotaniQR/'.$imgUrl;?>" alt="Planta">
                        </div>
                    </div>
                    <div class="right justify">
                        <div class="container">
                            <div class="column">
                                <div class="plant-description">
                                    <h3>DESCRIPCIÓN</h3>
                                </div>
                                <div class="white-space-8"></div>
                                <div class="plant-description">
                                    <p><?php echo $descripcion; ?></p>
                                </div>

                                <div class="white-space-16"></div>
                                <div class="plant-description">
                                    <h3>TAXONOMÍA</h3>
                                </div>
                                <div class="white-space-8"></div>
                                <div class="plant-description">
                                    <p><?php echo $taxonomia;?></p>
                                </div>

                                <div class="white-space-16"></div>
                                <div class="plant-description">
                                    <h3>APLICACIONES</h3>
                                </div>
                                <div class="white-space-8"></div>
                                <div class="plant-description">
                                    <p><?php echo $aplicaciones;?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="white-space-25"></div>