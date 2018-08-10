<div class="login flex">
    <div class="row-responsive">
        <div class="left"></div>
        <div class="right">
            <div class="justify-center align-center">
                <div class="container">
                    <div class="column">
                        <div class="white-space-32"></div>
                        <div class="logo">
                            <div class="responsive-img justify-center">
                                <img src="<?php echo base_url(); ?>assets/BotaniQR/assets/img/logo-aguila.png" alt="Login Background">
                            </div>
                        </div>
                        <div class="white-space-32"></div>
                        <h2 class="text-center">ADMINISTRADOR WEB</h2>
                        <div class="white-space-32"></div>
                        <div class="login-form justify-center">
                            <div class="container">
                                <form  <?= form_open('botaniqr/login'); ?>
                                    <div class="column">
                                        <label for="email">CORREO:</label>
                                        <div class="white-space-8"></div>
                                        <input class="input-text" type="email" name="email">
                                        <div class="white-space-16"></div>
                                        <label for="">CONTRASEÑA:</label>
                                        <div class="white-space-8"></div>
                                        <input class="input-text" type="password" name="password">
                                        <div class="white-space-32"></div>
                                        <input class="btn btn-darkgreen" type="submit" value="INGRESAR">
                                        <div class="white-space-32"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>