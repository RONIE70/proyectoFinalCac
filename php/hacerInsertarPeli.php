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
  $foto = $_FILES["subir_archivo"];
  //var_dump($foto);
}
else
{
  die();
}

$directorio = '../archivos';
$subirArchivo = $directorio.$titulo.".jpg";

if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subirArchivo)) 
{
    //echo"<a href='".$subirArchivo."' target='_blank'><img src='".$subirArchivo."' width='150'></a>";
} 
else 
{
    echo "<h1>•Intentelo Nuevamente... Gracias•</h1>";
    echo "La subida ha fallado, solo admite archivo.jpg/png hasta 2gb";
}

if($titulo!="")
			{
				$UltimoId=Pelicula::InsertarUnaPelicula($titulo, $fechaLanz,$duracion, $genero, 
                $director,$reparto,$sinopsis,$foto);	
					
				//header("Location: formPeliculas.php");
			} 
		


?>