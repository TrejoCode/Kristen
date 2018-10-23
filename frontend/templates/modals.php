<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/trejocode.css" media="screen">
    <link rel="stylesheet" href="../assets/css/modals.css" media="screen">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6"
        crossorigin="anonymous">
    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <!-- Animate -->
    <link rel="stylesheet" href="../assets/css/animate.min.css" media="screen">
    <title>UPQROO - MODALES</title>
</head>
<body>

    <button id="myBtn">ACTIVAR MODAL CONFIRMACIÓN</button>
    <div class="flex modal justify-center hidden" id="modal">
        <div class="container column">
            <div class="modal-content column">
                <div class="modal-header justify-center">
                    <h2 class="color-white">
                        CONFIRMACIÓN
                    </h2>
                </div>
                <div class="modal-body column">
                    <div class="white-space-32"></div>
                    <div class="justify-center">
                        <h4>
                            ¿DESEA REALIZAR LA ACCIÓN?
                        </h4>
                    </div>
                    <div class="white-space-16"></div>
                    <div class="btn-container-accept justify-center">
                        <button class="btn btn-modal-accept">
                            ACEPTAR
                        </button>
                    </div>
                    <div class="white-space-16"></div>
                    <div class="btn-container-cancel justify-center color-red">
                        <a href="#" class="textTiny" id="close-modal">
                            CANCELAR
                        </a>
                    </div>
                    <div class="white-space-32"></div>
                </div>
            </div>
        </div>        
    </div>

    <script>        
                
        var modal = document.getElementById('modal');

        //Trigger the Modal
        let btn = document.getElementById("myBtn");

        btn.onclick = function () {
            modal.classList.remove('hidden');
        }

        let closeModal = document.getElementById('close-modal');
        closeModal.onclick = function(){
            modal.classList.add('hidden');
        }
        
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.classList.add('hidden');
            }
        }
    </script>
    
</body>
</html>