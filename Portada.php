<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Portada.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validacionPortada.js"></script>
    <style>
	
	</style>

</head>
<body>

    <img src="img/IMG-20230314-WA0001.jpg" alt="">
    <hr>

 

    <div>
        
        <h3><b><ins>Datos</ins></b></h3>
        <h5>Direccion</h5>
        <h5>Camiño da Devesa,1, 36214 Vigo, Pontevedra</h5>
        <h5>Telefono.:986025415</h5>
        <h5>Horario.:9 a 22 horas, Lunes a Domingo</h5>
        
            
    </div>
    <hr>

    <div id="imi">
        <div class="container">
            <div class="row">
               

                <div class="col-md-12">
                    <div class="row pistas">
                        <div class="col-3">
                            <figure>
                                <img src="img/IMG-20230314-WA0001.jpg" alt="" srcset="">
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <img src="img/IMG-20230314-WA0002.jpg" alt="" srcset="">
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <img src="img/IMG-20230314-WA0003.jpg" alt="" srcset="">
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <img src="img/IMG-20230314-WA0004.jpg" alt="" srcset="">
                            </figure>
                        </div>
                    </div>
                    <form action="" method="post">

                        <input type="hidden" name="idpista">
                        <input type="hidden" name="idturno">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="jugador1" placeholder="Jugador 1">
                                <input type="text" name="jugador2" placeholder="Jugador 2">
                            </div>
                            <div class="col-6">
                                <input type="text" name="jugador3" placeholder="Jugador 3">
                                <input type="text" name="jugador4" placeholder="Jugador 4">
                            </div>
                        </div>
                        <input type="submit" value="Reservar" class="btn btn-primary">
                    </form>
                </div>
    
            </div>
    
        </div>  
    </div>
    
       
          

       
       
     
     
      
  

    
</body>
</html>