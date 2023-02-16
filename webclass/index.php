<?php


require 'conexion.php';


$st = $conexion->prepare('SELECT * FROM class ORDER BY id DESC');
$st->execute();

 $resultados = $st->fetchall();


 if(isset($_GET['busquedad'])){

    $busquedad = $_GET['busquedad'];

   $st=$conexion->prepare('SELECT * FROM class WHERE maestro LIKE :busquedad or titulo LIKE :busquedad or materia LIKE :busquedad ');
   $st->execute(array(':busquedad'=> "%$busquedad%")); 
   $busquedas = $st->fetchAll();

  

 }else{
    
 }


require 'page.php';
?>