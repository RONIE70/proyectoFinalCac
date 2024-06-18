<?php

include_once ("../clases/AccesoDatos.php"); 
include_once ("../clases/Pelicula.php");


if (isset($_POST ["titulo"],$_POST ["fechaLanz"],$_POST ["duracion"],$_POST ["genero"],
$_POST ["director"],$_POST ["reparto"],$_POST ["sinopsis"])) 
{
  $titulo = $_POST ["titulo"];
  $fechaLanz = $_POST ["fechaLanz"];
  $duracion = $_POST ["duracion"];
  $genero = $_POST ["genero"];
  $director= $_POST ["director"];
  $reparto = $_POST ["reparto"];
  $sinopsis = $_POST ["sinopsis"];
  //var_dump($titulo);
}
else
{
  die();
}

if($titulo!="")
			{
				$UltimoId=Pelicula::InsertarUnaPelicula($titulo, $fechaLanz,$duracion, $genero, 
                $director,$reparto,$sinopsis);	
					
				header("Location: formPeliculas.php");
			} 
		


?>