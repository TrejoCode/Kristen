<!-- IMPORTANTE -->
<div class="admin-list justify-center">
    <div class="news-list">
        <div class="column">
            <div class="white-space-16"></div>
            <div class="title">
                <h2>TODAS LAS PLANTAS</h2>
            </div>

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
                        '<div class="white-space-16"></div>
                         <div class="list row">';
                    } ?>
                    <div class="list-item">
                        <div class="left justify-center align-center">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="right">
                            <div class="column">
                                <a id="title" href="<?php echo base_url().'index.php/botaniqr/planta/'.$plantas[$i]->id; ?>"><?php echo $plantas[$i]->nombre; ?></a>
                                <div class="row">
                                    <div class="edit align-center">
                                        <i class="far fa-edit"></i>
                                        <a href="<?php echo base_url().'index.php/botaniqr/administrador/editar/planta/'.$plantas[$i]->id; ?>"> EDITAR</a>
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
                echo '<div class="white-space-16"></div><div class="title"><h2>No hay plantas para mostrar</h2></div>';
            } ?>


            <div class="white-space-32"></div>
            <!-- Pagination -->
            <?php if(!empty($plantas)){
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
