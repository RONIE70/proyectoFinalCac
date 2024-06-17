<?php

include_once ("../clases/AccesoDatos.php"); 
include_once ("./clases/Pelicula.php");


if (isset($_POST ["titulo"],$_POST ["fechaLanz"],$_POST ["genero"],
$_POST ["duracion"],$_POST ["director"],$_POST ["reparto"],$_POST ["sinopsis"])) 
{
  $patente = $_POST ["titulo"];
  $color = $_POST ["fechaLanz"];
  $genero = $_POST ["genero"];
  $duracion = $_POST ["duracion"];
  $director= $_POST ["director"];
  $reparto = $_POST ["reparto"];
  $sinopsis = $_POST ["sinopsis"];
}
else
{
  die();
}



?>