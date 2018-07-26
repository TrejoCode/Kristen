<!-- IMPORTANTE -->
<div class="admin-add-news justify-center">
    <?php echo form_open_multipart('administrador/micrositio',array('class'=>'flex'));?>
        <div class="left">
            <div class="column">
                <div class="white-space-16"></div>
                <div class="title column">
                    <h2><?php echo !empty($carrera->titulo)?$carrera->titulo:'Nuevo Micrositio'; ?></h2>
                    <div class="white-space-16"></div>
                </div>
                <div class="white-space-32"></div>
                <h2>CONTENIDO</h2>

                <!-- Campos Ocultos -->
                <input class="input-text" type="text" hidden name="publicacion" value="<?php echo !empty($carrera->idInformacion_Institucional)?$carrera->idInformacion_Institucional:'';?>">
                <input class="input-text" type="text" hidden name="portadaTxt" value="<?php echo !empty($carrera->portada)?$carrera->portada:'';?>">
                <input class="input-text" type="text" hidden name="planTxt" value="<?php echo !empty($carrera->contenidos[3]->contenido->url)?$carrera->contenidos[3]->contenido->url:'';?>">
                <input class="input-text" type="text" hidden name="titulo" value="<?php echo !empty($carrera->titulo)?$carrera->titulo:'';?>">
                <input class="input-text" type="text" hidden name="descripcion" value="<?php echo !empty($carrera->descripcion)?$carrera->descripcion:'';?>">
                <input class="input-text" type="text" hidden name="tags" value="<?php echo !empty($carrera->categorias)?$carrera->categorias:'';?>">
                <!-- Fin Campos ocultos -->

                <div class="white-space-32"></div>
                <h4>RESUMEN</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"><?php echo !empty($carrera->contenidos[0]->contenido->texto)?$carrera->contenidos[0]->contenido->texto:''; ?></textarea>
                <div class="white-space-16"></div>
                <h4>OBJETIVO</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"><?php echo !empty($carrera->contenidos[1]->contenido->texto)?$carrera->contenidos[1]->contenido->texto:''; ?></textarea>
                <div class="white-space-16"></div>
                <h4>DURACIÓN</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"><?php echo !empty($carrera->contenidos[2]->contenido->texto)?$carrera->contenidos[2]->contenido->texto:''; ?></textarea>
                <div class="white-space-16"></div>
                <h4>PLAN DE ESTUDIO</h4>
                <div class="white-space-8"></div>
                <div><a class="btn btn-blue" id="gallery-img-click" href="#"><i class="fas fa-file-upload"></i> SUBIR PLAN DE ESTUDIO</a></div>
                <input class="input-file-h" id="gallery-img" type="file" name="plan">
                <div class="white-space-32"></div>
                <h2>HABILIDADES DEL EGRESADO</h2>
                <div class="white-space-32"></div>
                <h4>HABILIDAD 1</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="p[]" value="<?php echo !empty($carrera->contenidos[4]->contenido->texto)?$carrera->contenidos[4]->contenido->texto:''; ?>">
                <div class="white-space-8"></div>
                <h4>HABILIDAD 2</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="p[]" value="<?php echo !empty($carrera->contenidos[5]->contenido->texto)?$carrera->contenidos[5]->contenido->texto:''; ?>">
                <div class="white-space-8"></div>
                <h4>HABILIDAD 3</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="p[]" value="<?php echo !empty($carrera->contenidos[6]->contenido->texto)?$carrera->contenidos[6]->contenido->texto:''; ?>">
                <h4>HABILIDAD 4</h4>
                <div class="white-space-8"></div>
                <input class="input-text" type="text" name="p[]" value="<?php echo !empty($carrera->contenidos[7]->contenido->texto)?$carrera->contenidos[7]->contenido->texto:''; ?>">
                <div class="white-space-32"></div>
            </div>
        </div>


        <div class="right justify-center">
            <div class="container">
                <div class="column">
                    <div class="white-space-16"></div>
                    <h4>IMAGEN DE BANNER</h4>
                    <div class="white-space-16"></div>
                    <div class="featured-img responsive-img">
                        <img src="<?php echo !empty($carrera->portada)?base_url().$carrera->portada:''; ?>" alt="">
                    </div>
                    <div class="white-space-8"></div>
                    <div><a class="btn btn-blue" id="featured-img-click" href="#"><i class="fas fa-file-upload"></i> CAMBIAR IMAGEN</a></div>
                    <input class="input-file-h" id="featured-img" type="file" name="portada">
                    <div class="white-space-32"></div>
                    <input class="btn btn-blue" type="submit" value="ACTUALIZAR">
                </div>
            </div>
        </div>

    </form>
</div>
<!-- FIN IMPORTANTE -->