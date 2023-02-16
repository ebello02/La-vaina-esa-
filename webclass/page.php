<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/35a34f7dfa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body >
    
<?php require 'header.php';?>


<?php if(!isset($busquedas)):?>

    <div class="tema" id="particles-js">

         <div class="cont-promo">
    
        <div class="contenedor-pensamos">

        <h1>Estamos aqui para ti !</h1>
         <p>Encuentra tus practicas y parciales al instante, al mismo tiempo puedes publicar tus practicas </p>
        
         </div>
        </div>
        </div>
       

 <?php endif;?>   



<!-- aqui va un subtitulo -->

<?php if(!isset($busquedas)):?>
<p class="subtitulo">Nada es dificil de encontrar</p>

<?php endif; ?> 





<!-- aqui va esta las referencias para las busquedas -->

<section>

<div class="referencia">

<h1>Materias</h1>
<ul>
        <li><a href="index.php?busquedad=matematica">Precalculo <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="index.php?busquedad=historia dominicana">Historia dominicana <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">Prepedeutico <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">base de datos <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">orientacion <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">Fundamentos de  <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">etica <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">diseno <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="index.php?busquedad=ingles">ingles <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">calculo dif... <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">algoritmo <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">fisica general <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">programacion  <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">investigacion <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">electronica <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">electiva <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">ingles tecnico <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">plan negocio <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">laboratorio <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">redes <i class="fa-brands fa-atlassian"></i></a></li>
        <li><a href="#">redes <i class="fa-brands fa-atlassian"></i></a></li>
    </ul>

</div>

   



<!-- aqui van a ser visualizada las practicas -->

<div class="visual-practica">

 <!-- aqui vamos a comprobar si el usuario no ah buscado nada apareceran las nuesvas tareas   -->

  <?php if(!isset($busquedas)):?>

  

    <p class='resultados'> Ultimas practicas y parciales <i class="fa-solid fa-file-circle-check"></i></p>

    <div class="contenedor-pdf">

    <?php for($i=0; $i < count($resultados); $i++):?>

    
        <div class="contenedor-descr">

        <p><?php echo $resultados[$i]['maestro']; ?></p>
            

            <!-- <div class='pdf'></div> -->
            <iframe src="pdf/<?php echo $resultados[$i]['pdf']; ?>" class='pdf' ></iframe>
            
            <p class='titulo'><?php echo $resultados[$i]['titulo']; ?></p>
            
            

        </div>


   
   
    <?php endfor;?>

    </div>
   
    <!-- y si ah buscado algo aparecera los resultados -->

    <?php else:?>


        <p class='resultados'> <?php echo count($busquedas);?> Resultados  <i class="fa-solid fa-file-circle-check"></i></p>

        <div class="contenedor-pdf">

<?php for($i=0; $i < count($busquedas); $i++):?>


    <div class="contenedor-descr">

    <p><?php echo $busquedas[$i]['maestro']; ?></p>
        

        <!-- <div class='pdf'></div> -->
        <iframe src="pdf/<?php echo $busquedas[$i]['pdf']; ?>" class='pdf' ></iframe>
        
        <p class='titulo'><?php echo $busquedas[$i]['titulo']; ?></p>
        
        

    </div>




<?php endfor;?>

</div>

   
    <?php endif;?>

</div>

</section>


<!-- aqui va el footer -->
<?php require 'footer.php'; ?>


<script src="js/particles.min.js"></script>
    <script src="js/ap.js"></script>

</body>
</html>