<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tv.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <title>UPQROO - TV</title>
</head>

<body>
    <div class="header-tv">
        <div class="left">
            <img src="<?php echo base_url(); ?>assets/img/logo-upqroo.png" alt="">
        </div>
        <div class="right">
            <div class="date-time">
                <p id="date"></p>
                &nbsp
                <p id="time"></p>
            </div>
        </div>
    </div>

    <div class="body-tv">
        <div class="left">
            <div class="main-new">
                <div class="image">
                    
                </div>
                <div class="title"> 

                </div>
                <div class="description"> 

                </div>
            </div>
        </div>
        <div class="right">
            <div class="news">
                <div class="new">
                    <div class="image">
                    </div>
                    <div class="title"> 
                    </div>
                    <div class="description"> 
                    </div>
                </div>
                <div class="new">
                    <div class="image">
                    </div>
                    <div class="title"> 
                    </div>
                    <div class="description"> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            'use strict';

            function getDate() {
                var date = new Date();
                var weekday = date.getDay();
                var month = date.getMonth();
                var day = date.getDate();
                var year = date.getFullYear();
                var hour = date.getHours();
                var minutes = date.getMinutes();
                var seconds = date.getSeconds();

                if (hour < 10) hour = "0" + hour;
                if (minutes < 10) minutes = "0" + minutes;
                if (seconds < 10) seconds = "0" + seconds;

                var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

                var weekdayNames = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

                var ampm = " PM ";

                if (hour < 12) ampm = " AM ";

                if (hour > 12) hour -= 12;

                var showDate = weekdayNames[weekday] + ", " + day + " de " + monthNames[month] + " del " + year;

                var showTime = hour + ":" + minutes + ":" + seconds + ampm;


                document.getElementById('date').innerHTML = showDate;

                document.getElementById('time').innerHTML = showTime;

 
                requestAnimationFrame(getDate);
            }

            <?php 

            $js_array = json_encode($Datos);
            echo "var datos = ". $js_array . ";\n";
            ?>

            var imagenes = document.getElementsByClassName("image");
            var titulo = document.getElementsByClassName("title"); 
            var descripcion = document.getElementsByClassName("description");

            var cantidad = datos.length;
         
            imagenes[0].style.backgroundImage = "url('"+datos[0].portada+"')";  
            imagenes[1].style.backgroundImage = "url('"+datos[1].portada+"')";  
            imagenes[2].style.backgroundImage = "url('"+datos[2].portada+"')";

            titulo[0].innerHTML = "<h3>" + datos[0].titulo + "</h3>";  
            titulo[1].innerHTML = "<h3>" + datos[1].titulo + "</h3>";  
            titulo[2].innerHTML = "<h3>" + datos[2].titulo + "</h3>";  

            descripcion[0].innerHTML = "<p>" + datos[0].descripcion + "</p>";  
            descripcion[1].innerHTML = "<p>" + datos[1].descripcion + "</p>";  
            descripcion[2].innerHTML= "<p>" + datos[2].descripcion + "</p>";    
               
            var posicion = 3; 

            setInterval(function(){ 

               if(posicion === 12){
                    posicion = 0; 
               }  

                imagenes[0].style.backgroundImage = "url('"+datos[posicion].portada+"')";  
                imagenes[1].style.backgroundImage = "url('"+datos[posicion+1].portada+"')";  
                imagenes[2].style.backgroundImage = "url('"+datos[posicion+2].portada+"')";   
                titulo[0].innerHTML = "<h3>" + datos[posicion].titulo + "</h3>";  
                titulo[1].innerHTML = "<h3>" + datos[posicion+1].titulo + "</h3>";  
                titulo[2].innerHTML = "<h3>" + datos[posicion+2].titulo + "</h3>";  

                descripcion[0].innerHTML = "<p>" + datos[posicion].descripcion + "</p>";  
                descripcion[1].innerHTML = "<p>" + datos[posicion+1].descripcion + "</p>";  
                descripcion[2].innerHTML= "<p>" + datos[posicion+2].descripcion + "</p>";    
                posicion = posicion + 3;
                        

            },6000);


            getDate();

        }());
    </script>
</body>
</html>