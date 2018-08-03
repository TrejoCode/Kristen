<!-- IMPORTANTE -->
<div class="admin-add-news justify-center">
    <?php echo form_open_multipart('administrador/agregar/noticia',array('class'=>'flex'));?>
        <div class="left">
            <div class="column">
                <div class="white-space-16"></div>
                <div class="title column">
                    <h2>NUEVA PLANTA</h2>

                    <!-- Campos Ocultos -->
                    <input class="input-text" type="text" hidden name="id" value="<?php echo !empty($plantas[0]->id)?$plantas[0]->id:'';?>">
                    <input class="input-text" type="text" hidden name="codigo" value="<?php echo !empty($plantas[0]->codigo)?$plantas[0]->codigo:'';?>">
                    <input class="input-text" type="text" hidden name="qr" value="<?php echo !empty($plantas[0]->qr)?$plantas[0]->qr:'';?>">
                    <!-- Fin Campos ocultos -->

                    <div class="white-space-16"></div>
                    <h4>NOMBRE</h4>
                    <div class="white-space-8"></div>
                    <input class="input-text" type="text" name="titulo" value="<?php echo !empty($plantas)?$plantas[0]->nombre:'';?>">
                </div>
                <div class="white-space-16"></div>
                <div class="description column">
                    <h4>NOMBRE CIENTÍFICO</h4>
                    <div class="white-space-8"></div>
                    <textarea class="input-textarea" name="descripcion" rows="2"><?php echo !empty($plantas)?$plantas[0]->cientifico:'';?></textarea>
                </div>
                <div class="white-space-32"></div>
                <h4>DESCRIPCIÓN</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"><?php echo !empty($plantas)?$plantas[0]->descripcion:'';?></textarea>
                <div class="white-space-16"></div>
                <h4>TAXONOMÍA</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"><?php echo !empty($plantas)?$plantas[0]->taxonomia:'';?></textarea>
                <div class="white-space-16"></div>
                <h4>APLICACIONES</h4>
                <div class="white-space-8"></div>
                <textarea class="input-textarea" name="p[]" rows="4"><?php echo !empty($plantas)?$plantas[0]->aplicaciones:'';?></textarea>
                <div class="white-space-16"></div>
            </div>
        </div>


        <div class="right justify-center">
            <div class="container">
                <div class="column">
                    <div class="white-space-16"></div>
                    <h4>IMAGEN DE PLANTA</h4>
                    <div class="white-space-16"></div>
                    <div class="featured-img responsive-img">
                        <!-- Susituir por la ruta de la portada actual -->
                        <img src="<?php echo !empty($plantas[0]->imagen)?base_url().'BotaniQR/'.$plantas[0]->imagen:''; ?>" alt="">
                    </div>
                    <div class="white-space-8"></div>
                    <div><a class="btn btn-blue" id="featured-img-click" href="#"><i class="fas fa-file-upload"></i> SUBIR IMAGEN</a></div>
                    <input class="input-file-h" id="featured-img" type="file" name="portada">
                    <div class="white-space-32"></div>
                    <input class="btn btn-blue" type="submit" value="AGREGAR">
                </div>
            </div>
        </div>

    </form>
</div>
<!-- FIN IMPORTANTE -->

</div>

</div>
</div>
