<div class="admin-add-events justify-center">
    <?php echo form_open_multipart('administrador/agregar/evento',array('class'=>'flex'));?>
        <div class="left">
            <div class="column">
                <div class="white-space-16"></div>
                <div class="title column">
                    <h2>NUEVO EVENTO</h2>

                    <!-- Campos Ocultos -->
                    <input class="input-text" type="text" hidden name="publicacion" value="<?php echo !empty($eventos->idPublicaciones)?$eventos->idPublicaciones:'';?>">
                    <input class="input-text" type="text" name="portadaTxt" value="<?php echo !empty($eventos->portada)?$eventos->portada:'';?>">
                    <input class="input-text" type="text" hidden name="imgTxt[]" value="<?php echo !empty($eventos->contenidos[6]->contenido->imagenes[0])?$eventos->contenidos[6]->contenido->imagenes[0]:'';?>">
                    <input class="input-text" type="text" hidden name="imgTxt[]" value="<?php echo !empty($eventos->contenidos[6]->contenido->imagenes[1])?$eventos->contenidos[6]->contenido->imagenes[1]:'';?>">
                    <input class="input-text" type="text" hidden name="imgTxt[]" value="<?php echo !empty($eventos->contenidos[6]->contenido->imagenes[2])?$eventos->contenidos[6]->contenido->imagenes[2]:'';?>">
                    <!-- Fin Campos ocultos -->

                    <div class="white-space-16"></div>
                    <h4>TÍTULO</h4>
                    <div class="white-space-8"></div>
                    <input class="input-text" type="text" name="titulo" value="<?php echo !empty($eventos)?$eventos->titulo:'';?>">
                </div>
                <div class="white-space-16"></div>
                <div class="description column">
                    <h4>DESCRIPCIÓN CORTA</h4>
                    <div class="white-space-8"></div>
                    <textarea class="input-textarea" name="descripcion" rows="2"><?php echo !empty($eventos)?$eventos->descripcion:'';?></textarea>
                </div>
                <div class="white-space-32"></div>
                <h2>CONTENIDO</h2>
                <div class="white-space-32"></div>
                <h4>PARRAFO 1</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"><?php echo !empty($eventos->contenidos[0]->contenido->texto)?$eventos->contenidos[0]->contenido->texto:'';?></textarea>
                <div class="white-space-16"></div>
                <h4>PARRAFO 2</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"><?php echo !empty($eventos->contenidos[1]->contenido->texto)?$eventos->contenidos[1]->contenido->texto:'';?></textarea>
                <div class="white-space-16"></div>
                <h4>IMÁGENES</h4>
                <p><em>SOLO PUEDEN SUBIR 3 IMÁGENES</em></p>
                <div class="white-space-8"></div>
                <div><a class="btn btn-blue" id="gallery-img-click" href="#"><i class="fas fa-file-upload"></i> SUBIR IMÁGENES</a></div>
                <input class="input-file-h" id="gallery-img" type="file" name="gallery-img[]" multiple>
                <div class="white-space-32"></div>
                <h4>ENLACE 1</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url-name[]" placeholder="Título" value="<?php echo !empty($eventos->contenidos[2]->contenido->texto)?$eventos->contenidos[2]->contenido->texto:'';?>">
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url[]" placeholder="Url" value="<?php echo !empty($eventos->contenidos[2]->contenido->texto)?$eventos->contenidos[2]->contenido->url:'';?>">
                <div class="white-space-8"></div>
                <h4>ENLACE 2</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url-name[]" placeholder="Título" value="<?php echo !empty($eventos->contenidos[3]->contenido->texto)?$eventos->contenidos[3]->contenido->texto:'';?>">
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url[]" placeholder="Url" value="<?php echo !empty($eventos->contenidos[3]->contenido->texto)?$eventos->contenidos[3]->contenido->url:'';?>">
                <h4>ENLACE 3</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url-name[]" placeholder="Título" value="<?php echo !empty($eventos->contenidos[4]->contenido->texto)?$eventos->contenidos[4]->contenido->texto:'';?>">
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url[]" placeholder="Url" value="<?php echo !empty($eventos->contenidos[4]->contenido->texto)?$eventos->contenidos[4]->contenido->url:'';?>">
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
                        <img src="<?php echo !empty($eventos->portada)?base_url().$eventos->portada:''; ?>" alt="">
                    </div>
                    <div class="white-space-8"></div>
                    <div><a class="btn btn-blue" id="featured-img-click" href="#"><i class="fas fa-file-upload"></i> CAMBIAR IMAGEN</a></div>
                    <input class="input-file-h" id="featured-img" type="file" name="portada">
                    <div class="white-space-32"></div>
                    <h4>FECHA</h4>
                    <div class="white-space-8"></div>
                    <input class="input-date" type="date" name="fecha" value="<?php echo !empty($eventos->contenidos[5]->contenido->fecha)?$eventos->contenidos[5]->contenido->fecha:'';?>">
                    <div class="white-space-32"></div>
                    <h4>HORA</h4>
                    <div class="white-space-8"></div>
                    <input class="input-date" type="time" name="hora" value="<?php echo !empty($eventos->contenidos[5]->contenido->hora)?$eventos->contenidos[5]->contenido->hora:'';?>">
                    <div class="white-space-32"></div>
                    <h4>ETIQUETAS</h4>
                    <div class="white-space-8"></div>
                    <p>Sepáralas por coma</p>
                    <div class="white-space-16"></div>
                        <input class="input-text" type="text" name="tags" value="<?php echo !empty($eventos)?$eventos->categorias:'';?>">
                    <div class="white-space-16"></div>
                    <div class="row">
                        <label><input type="checkbox" name="notificacion"><span> ENVIAR NOTIFICACIÓN</span></label>
                    </div>
                    <div class="white-space-32"></div>
                    <input class="btn btn-blue" type="submit" value="PUBLICAR">
                </div>
            </div>
        </div>
    </form>
</div>
