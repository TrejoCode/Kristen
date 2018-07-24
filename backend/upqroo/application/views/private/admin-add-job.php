<!-- Importante -->
<div class="admin-add-events justify-center">
    <?php echo form_open_multipart('administrador/agregar/trabajo',array('class'=>'flex'));?>
        <div class="left">
            <div class="column">
                <div class="white-space-16"></div>
                <div class="title column">
                    <h2>NUEVA VACANTE</h2>
                    <div class="white-space-16"></div>
                    <h4>TÍTULO</h4>
                    <div class="white-space-8"></div>
                    <input class="input-text" type="text" name="titulo" value="<?php echo !empty($trabajos)?$trabajos[0]->titulo:'';?>">
                </div>
                <div class="white-space-16"></div>
                <div class="description column">
                    <h4>DESCRIPCIÓN CORTA</h4>
                    <div class="white-space-8"></div>
                    <textarea class="input-textarea" name="descripcion" rows="2" value="<?php echo !empty($trabajos)?$trabajos[0]->descripcion:'';?>"></textarea>
                </div>
                <div class="white-space-32"></div>
                <h2>CONTENIDO</h2>
                <div class="white-space-32"></div>
                <h4>DATOS DE LA EMPRESA</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4" required></textarea>
                <div class="white-space-16"></div>
                <h4>DESCRIPCIÓN</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"></textarea>
                <div class="white-space-16"></div>
                <h4>REQUERIMIENTOS</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"></textarea>
                <div class="white-space-16"></div>
                <h4>ENLACE 1</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url-name[]" placeholder="Título">
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url[]" placeholder="Url">
                <div class="white-space-8"></div>
                <h4>ENLACE 2</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url-name[]" placeholder="Título">
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url[]" placeholder="Url">
                <div class="white-space-8"></div>
                <h4>ENLACE 3</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url-name[]" placeholder="Título">
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="url[]" placeholder="Url">
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
                        <img src="../assets/img/featured.jpeg" alt="">
                    </div>
                    <div class="white-space-8"></div>
                    <div><a class="btn btn-blue" id="featured-img-click" href="#"><i class="fas fa-file-upload"></i> CAMBIAR IMAGEN</a></div>
                    <input class="input-file-h" id="featured-img" type="file" name="portada">
                    <div class="white-space-32"></div>
                    <h4>ETIQUETAS</h4>
                    <div class="white-space-8"></div>
                    <p>Sepáralas por coma</p>
                    <div class="white-space-16"></div>
                        <input class="input-text" type="text" name="tags" value="<?php echo !empty($noticias)?$noticias[0]->categorias:'';?>">
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
<!-- Importante -->