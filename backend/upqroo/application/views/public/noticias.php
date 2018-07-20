<div class="news flex">
<!-- News Cards -->
        <div class="news justify-center">
            <div class="container">
                <div class="column">
                    <div class="white-space-64"></div>
                    <h2 class="textHuge">Últimas Noticias</h2>
                    <div class="white-space-32"></div>

                    <div class="news-cards">
                        <div class="row-responsive">
                            <?php foreach ($Datos as $d) 
                            {
                                if ($d->idTipos_Publicacion == 2) 
                                {
                                    echo '<div class="new-card">
                                        <div class="column">
                                            <div class="featured-img responsive-img">
                                                <img src='.$d->portada.'>
                                            </div>
                                            <div class="container">
                                                <div class="column">
                                                    <div class="date">
                                                        <p>'.$d->fecha.'</p>
                                                    </div>
                                                    <div class="title">
                                                        <h3>'.$d->titulo.'</h3>
                                                    </div>
                                                    <div class="description">
                                                        <p>'.$d->descripcion.'</p>
                                                    </div>
                                                    <a class="read-more" href='.base_url().'index.php/noticia?id='.$d->idPublicaciones.'>Leer Más</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                else
                                {
                                    redirect(base_url());
                                }
                            } ?>
                           
                        </div>
                    </div>
                    <div class="white-space-32"></div>

                </div>
            </div>
        </div>
   </div>
<!-- End News Cards -->
