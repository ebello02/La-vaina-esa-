<?php

require 'conexion.php';

if(isset($_POST['submit'])){

$tema= $_POST['tema'];   
$maestro= $_POST['profesor'];   
$categoria= $_POST['categoria'];   
  

if(empty($tema) or empty($maestro) ){
    echo  'todo vacio';
  

}else{

    // aqui se va a comprobar si el archivo esta vacio o no

  if($_FILES['pdf']['name'] == ''){
     
    echo' El archivo esta vacio';
  }else{

     // aqui se va a comprobar si el archivo es pdf

    var_dump($_FILES['pdf']['type']);
    if($_FILES['pdf']['type'] == 'application/pdf'){
          
        
        $carpeta_destino = 'pdf/';
        $archivo_subido= $carpeta_destino . $_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'],$archivo_subido);
    

        $st = $conexion->prepare('INSERT INTO class (pdf, maestro, titulo, materia) VALUES(:pdf, :maestro, :titulo, :materia)');
        $st->execute(array(':pdf'=>$_FILES['pdf']['name'], ':maestro'=>$maestro, ':titulo'=>$tema, ':materia'=>$categoria));
        header('Location:index.php');

    }else{

        echo 'Tu archivo no es PDF';
    }


  }
    
}



}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/subir.css">
    <title>Subir</title>
</head>

<body>

<a href="index.php"><h1>DarkRoad</h1></a>

<form action="subir.php" method='post' class="formulario" enctype='multipart/form-data'>

<input type="file" class='file' name="pdf" id="">
<!-- categoria-->

<label for="categoria">Selecciona la materia</label>

<select  id="categoria" class='categoria' name='categoria'>
    <option value="ingles">Ingles</option>
    <option value="matematica">Matematica</option>
    <option value="software">Software</option>
    <option value="historia">Historia</option>
    <option value="base de datos">Base de datos</option>
   
</select>

<label for="profesor">Escriba el nombre del maestro</label>
<input type="text" id='profesor' placeholder='Nombre del maestro' name="profesor" id="">


<label for="tema">Escriba el tema de la clase</label>
<input type="text" id='tema' placeholder='Titulo de la clase' name="tema" id="">


<input type="submit" id='boton' name='submit' value="Publicar">

<br>

<p id='error' class='error'></p>

</form>



<!-- aqui va el js para la condicion del formulario -->

<script src="js/subir.js"></script>

    
</body>
</html>