<div class="planta flex">
    <div class="column">
        <div class="white-space-32"></div>
        <div class="row justify-center">
            <div class="container">
                <div class="column">
                    <div class="title">
                        <h2><?php echo $nombre; ?></h2>
                    </div>
                    <div class="white-space-8"></div>
                    <div class="cname">
                        <h3><?php echo $cientifico; ?></h3>
                    </div>
                    <div class="white-space-32"></div>
                </div>
            </div>
        </div>

        <div class="justify-center">
            <div class="container row-responsive">
                <div class="imagen-planta">
                    <div class="responsive-img" id="planta-img">
                        <img src="<?php echo base_url().'BotaniQR/'.$imgUrl; ?>" alt="Planta">
                    </div>
                </div>
                <div class="informacion-planta">
                    <div class="column align-center">
                        <div class="container">
                            <div class="column">
                                <div class="descripcion-planta">
                                    <h3>DESCRIPCIÓN</h3>
                                </div>
                                <div class="white-space-8"></div>
                                <div class="descripcion-planta">
                                    <p>
                                        <?php echo $descripcion; ?>
                                    </p>
                                </div>
                                <div class="white-space-24"></div>
                                <div class="descripcion-planta">
                                    <h3>TAXONOMÍA</h3>
                                </div>
                                <div class="white-space-8"></div>
                                <div class="descripcion-planta">
                                    <p>
                                        <?php echo $taxonomia; ?>
                                    </p>
                                </div>
                                <div class="white-space-24"></div>
                                <div class="descripcion-planta">
                                    <h3>APLICACIONES</h3>
                                </div>
                                <div class="white-space-8"></div>
                                <div class="descripcion-planta">
                                    <p>
                                        <?php echo $aplicaciones; ?>
                                    </p>
                                </div>
                                <div class="white-space-32"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
