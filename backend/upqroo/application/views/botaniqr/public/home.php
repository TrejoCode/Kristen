<div class="white-space-25"></div>
<div class="notices-cards flex justify">
    <div class="container">
        <div class="column">
            <div class="row">
                <div class="title">
                    <h2>Últimas Noticias</h2>
                </div>
            </div>
            <div class="white-space-16"></div>
            <div class="row">
                <div class="cards-container row-responsive">
                    <div class="notice-card">
                        <div class="column">
                            <div class="card-image responsive-img">
                                <img src="<?php echo base_url(); ?>BotaniQR/assets/img/notice1.jpg" alt="" title="">
                            </div>
                            <div class="card-title justify">
                                <h3>Nullam ullamcorper nisl quis ornare molestie</h3>
                            </div>
                            <div class="card-details row">
                                <div class="card-date">
                                    <div class="column justify">
                                        <p>
                                            <time>
                                                ABR
                                            </time>
                                        </p>
                                        <p>
                                            <time>
                                                26
                                            </time>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="column">
                                        <p>
                                            Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit
                                        </p>
                                        <a href="<?php echo base_url();?>index.php/botaniqr/noticias/1" class="read-more">
                                            Leer Noticia
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="notice-card">
                        <div class="column">
                            <div class="card-image responsive-img">
                                <img src="<?php echo base_url(); ?>BotaniQR/assets/img/notice2.jpg" alt="" title="">
                            </div>
                            <div class="card-title justify">
                                <h3>Nullam ullamcorper nisl quis ornare molestie</h3>
                            </div>
                            <div class="card-details row">
                                <div class="card-date">
                                    <div class="column justify">
                                        <p>
                                            <time>
                                                ABR
                                            </time>
                                        </p>
                                        <p>
                                            <time>
                                                26
                                            </time>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="column">
                                        <p>
                                            Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit
                                        </p>
                                        <a href="<?php echo base_url();?>index.php/botaniqr/noticias/1" class="read-more">
                                            Leer Noticia
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="notice-card">
                        <div class="column">
                            <div class="card-image responsive-img">
                                <img src="<?php echo base_url(); ?>BotaniQR/assets/img/notice1.jpg" alt="" title="">
                            </div>
                            <div class="card-title justify">
                                <h3>Nullam ullamcorper nisl quis ornare molestie</h3>
                            </div>
                            <div class="card-details row">
                                <div class="card-date">
                                    <div class="column justify">
                                        <p>
                                            <time>
                                                ABR
                                            </time>
                                        </p>
                                        <p>
                                            <time>
                                                26
                                            </time>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="column">
                                        <p>
                                            Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit
                                        </p>
                                        <a href="<?php echo base_url();?>index.php/botaniqr/noticias/1" class="read-more">
                                            Leer Noticia
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="white-space-16"></div>
<div class="call flex justify">
    <div class="container">
        <div class="call-container justify">
            <div class="container row-responsive space-between">
                <div class="title-call align">
                    <i class="fa fa-pagelines fa-2x" aria-hidden="true"></i><h2>Aún puedes adoptar una planta o árbol</h2>
                </div>
                <div class="btn-action align">
                    <a class="btn btn-white" href="#">ADOPTAR</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="white-space-25"></div>
<div class="plants-cards flex justify">
    <div class="container">
        <div class="column">
            <div class="row">
                <div class="title">
                    <h2>Nuevas Plantas</h2>
                </div>
            </div>
            <div class="white-space-16"></div>
            <div class="row">
                <div class="cards-container row-responsive">

                    <?php foreach ($plantas as $dataPlant)
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