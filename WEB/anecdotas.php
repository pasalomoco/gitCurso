<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "generalHTML/headLinksMeta.html"; ?> 
    <link rel="stylesheet" href="css/formularios.css">
</head>
<body>

<?php include "header.html"; ?> 

    <main id="containerPrincipal" class="container">

    <?php include "nav/nav.html"; ?> 

      <!-- 
 AQUÍ PONDRÁ NARRADOR O JUGADOR EN FUNCIÓN DE QUIÉN HAYA INICIADO SESIÓN      -->
      <p class="h1 text-center separador"> NARRADOR </p>
      <div class="container">
       
          <div class="row">
            <div class="col-sm">
              <p class="h2 text-left">  ANÉCDOTAS: </p> 
            </div>
            <div class="col-sm">
                  <!-- TODOS TIENEN ACCESO A ESTA FUNCIONALIDAD.   -->
              <button id="botonIncluirAnecdota" class="text-left"> Añadir anécdota </button>
            </div>
            <div class="col-sm">
              <!-- TODOS PUEDEN VER LAS ANÉCDOTAS CREADAS. PUEDES BORRAR TU ANÉCDOTA AÑADIDA  EN FUNCIÓN DE QUIÉN HAYA INICIADO SESIÓN-->
              <button id="botonMostrarAnecdotas" class="text-left"> Mostrar anécdotas  </button>
            </div>
          </div>
       
      </div>

 <!--  LOS DATOS DE LA BBDD SOBRE LAS ANÉCDOTAS   -->
     
   <?php include "anecdotas/tablaAnecdotas.php"; ?>  
   
    <!--  EL FORMULARIO QUE PERMITE INCLUIR ANÉCDOTAS A LA BASE DE DATOS
          ÚNICAMENTE TENDRÁ ACCESO A ESTA FUNCIONALIDAD EL MÁSTER   -->

   <?php include "anecdotas/formularioIncluirAnecdota.php"; ?>  
     
  </div>


  <?php include "generalHTML/footer.html"; ?>   
    
      </main>

<!--  BOTONES MOSTRAR / OCULTAR LA TABLA DE LOS DATOS  -->

  <?php include "jquery/jqueryAnecdotas.html" ?>
    
</body>
</html>