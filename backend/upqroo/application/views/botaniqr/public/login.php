<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>BotaniQR/assets/css/style.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>BotaniQR/assets/css/login.css" media="screen">
    <title>Inicio de Sesión</title>
</head>
<body>
<div class="cajota flex justify align gradient-primary column">
    <div class="cajita align column " >
        <a href="#" title="BotaniQR" class="logo"><img src="https://i.imgur.com/bBzN3iK.png" alt="logo" ></a>
        <div class="justify align login-top align row">
            <h2>Inicia sesión para administrar el contenido</h2>
        </div>
        <form action="">
            <div class="column justify align">
                <input autofocus="true" class="form-input" id="email" name="email" placeholder="Correo electrónico" tabindex="1" type="email">
                <input autocomplete="off" class="form-input password" id="password" name="password" placeholder="Contraseña" tabindex="2" type="password">
            </div>
        </form>
        <a class="btn btn-white btn-action btn-primary" href="#">Entrar</a>
    </div>
</div>
</body>
</html>