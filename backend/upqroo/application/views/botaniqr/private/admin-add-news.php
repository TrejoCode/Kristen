<!-- IMPORTANTE -->
<div class="admin-add-news justify-center">
    <?php echo form_open_multipart('administrador/agregar/noticia',array('class'=>'flex'));?>
        <div class="left">
            <div class="column">
                <div class="white-space-16"></div>
                <div class="title column">
                    <h2>NUEVA NOTICIA</h2>

                    <!-- Campos Ocultos -->
                    <input class="input-text" type="text" hidden name="id" value="<?php echo !empty($noticias[0]->id)?$noticias[0]->id:'';?>">
                    <!-- Fin Campos ocultos -->

                    <div class="white-space-16"></div>
                    <h4>TÍTULO</h4>
                    <div class="white-space-8"></div>
                    <input class="input-text" type="text" name="nombre" value="<?php echo !empty($noticias[0])?$noticias[0]->nombre:'';?>">
                </div>
                <div class="white-space-16"></div>
                <div class="description column">
                    <h4>DESCRIPCIÓN CORTA</h4>
                    <div class="white-space-8"></div>
                    <textarea class="input-textarea" name="descripcion" rows="4"><?php echo !empty($noticias[0])?$noticias[0]->descripcion:'';?></textarea>
                </div>
                <div class="white-space-32"></div>
                <h4>CONTENIDO</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="contenido" rows="25"><?php echo !empty($noticias[0])?$noticias[0]->contenido:'';?></textarea>
                <div class="white-space-16"></div>
            </div>
        </div>


        <div class="right justify-center">
            <div class="container">
                <div class="column">
                    <div class="white-space-16"></div>
                    <h4>IMAGEN DE PORTADA</h4>
                    <div class="white-space-16"></div>
                    <div class="featured-img responsive-img">
                        <!-- Susituir por la ruta de la portada actual -->
                        <!-- <img src="<?php echo !empty($noticias[0]->imagen)?base_url().$noticias[0]->imagen:''; ?>" alt=""> -->
                        <img src="<?php echo !empty($noticias[0]->imagen)?$noticias[0]->imagen:''; ?>" alt="">
                    </div>
                    <div class="white-space-8"></div>
                    <div><a class="btn btn-blue" id="featured-img-click" href="#"><i class="fas fa-file-upload"></i> CAMBIAR IMAGEN</a></div>
                    <input class="input-file-h" id="featured-img" type="file" name="portada">
                    <div class="white-space-32"></div>
                    <input class="btn btn-blue" type="submit" value="PUBLICAR">
                </div>
            </div>
        </div>

    </form>
</div>
<!-- FIN IMPORTANTE -->

</div>

</div>
</div>
