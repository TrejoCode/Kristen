<!-- IMPORTANTE -->
<div class="admin-list justify-center">
    <div class="news-list">
        <div class="column">
            <div class="white-space-16"></div>
            <div class="title">
                <h2>TODOS LOS EVENTOS</h2>
            </div>


            <?php if(!empty($eventos)){
                $count=0;
                $registros=count($eventos);
                for($i=0; $i<count($eventos); $i++)
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
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="right">
                            <div class="column">
                                <a id="title" href="<?php echo base_url().'index.php/evento/ver/'.$eventos[$i]->idPublicacion; ?>"><?php echo $eventos[$i]->titulo; ?></a>
                                <div class="row">
                                    <div class="edit align-center">
                                        <i class="far fa-edit"></i>
                                        <a href="<?php echo base_url().'index.php/administrador/editar/evento/'.$eventos[$i]->idPublicacion; ?>"> EDITAR</a>
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
                echo '<div class="white-space-32"></div><div class="title"><h2>No hay eventos para mostrar</h2></div>';
            } ?>

            <div class="white-space-32"></div>
            <!-- Pagination -->
            <?php if(!empty($eventos)){
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