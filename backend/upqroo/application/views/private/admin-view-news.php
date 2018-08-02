<!-- IMPORTANTE -->
<div class="admin-list justify-center">
    <div class="news-list">
        <div class="column">
            <div class="white-space-16"></div>
            <div class="title">
                <h2>TODAS LAS NOTICIAS</h2>
            </div>

            <?php if(!empty($noticias)){
                $count=0;
                $registros=count($noticias);
                for($i=0; $i<count($noticias); $i++)
                {
                    $count++;
                    if($i%3==0)
                    {
                        $count=0;
                        echo
                        '<div class="white-space-16"></div>
                         <div class="list row">';
                    } ?>
                    <div class="list-item">
                        <div class="left justify-center align-center">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="right">
                            <div class="column">
                                <a id="title" href="<?php echo base_url().'index.php/noticia/'.$noticias[$i]->idPublicaciones; ?>"><?php echo $noticias[$i]->titulo; ?></a>
                                <div class="row">
                                    <div class="edit align-center">
                                        <i class="far fa-edit"></i>
                                        <a href="<?php echo base_url().'index.php/administrador/editar/noticia/'.$noticias[$i]->idPublicaciones; ?>"> EDITAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             <?php  if($count==2 || ($registros<=3 && $count==$registros-1) )
                    {
                        $registros=$registros-3;
                        echo '</div>';
                    }
                };
            }
            else
            {
                echo '<div class="white-space-16"></div><div class="title"><h2>No hay eventos para mostrar</h2></div>';
            } ?>


            <div class="white-space-32"></div>
            <!-- Pagination -->
            <?php if(!empty($noticias)){
                echo '<div class="pagination justify-between">
                <a class="prev" href="#">ANTERIOR</a>
                <a class="next" href="#">SIGUIENTE</a>
            </div>';
            } ?>
            <div class="white-space-16"></div>

        </div>

    </div>
</div>
<!-- FIN IMPORTANTE -->
