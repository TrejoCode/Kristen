<!-- IMPORTANTE -->
<div class="admin-list justify-center">
    <div class="news-list">
        <div class="column">
            <div class="white-space-16"></div>
            <div class="title">
                <h2>TODOS LOS TRABAJOS</h2>
            </div>


            <?php if(!empty($trabajos)){
                $count=0;
                $registros=count($trabajos);
                for($i=0; $i<count($trabajos); $i++)
                {
                    $count++;
                    if($i%3==0)
                    {
                        $count=0;
                        echo
                        '<div class="white-space-32"></div>
                         <div class="list row">';
                    } ?>
                    <div class="list-item">
                        <div class="left justify-center align-center">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="right">
                            <div class="column">
                                <a id="title" href="<?php echo base_url().'index.php/evento/ver/'.$trabajos[$i]->idPublicaciones; ?>"><?php echo $trabajos[$i]->titulo; ?></a>
                                <div class="row">
                                    <div class="edit align-center">
                                        <i class="far fa-edit"></i>
                                        <a href="<?php echo base_url().'index.php/administrador/editar/evento/'.$trabajos[$i]->idPublicaciones; ?>"> EDITAR</a>
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
                echo '<div class="white-space-32"></div><div class="title"><h2>No hay trabajos para mostrar</h2></div>';
            } ?>



            <div class="white-space-32"></div>
            <!-- Pagination -->
            <?php if(!empty($trabajos)){
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
