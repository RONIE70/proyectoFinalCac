<?php
class Pelicula
{
	public $id;
 	public $titulo;  
    public $duracion;
  	public $fechLanz;    
  	public $genero;
  	public $dierctor;
    public $reparto;
    public $sinopsis;


    public static function RetornaArrayPeliculas()
    {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM peliculas");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "Pelicula");     
    }

    public static function InsertarUnaPelicula($pfecha, $pid_usuario, $pmensaje,$pestado)
  	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into peliculas (fecha, id_usuario, mensaje, estado) values ('$pfecha', '$pid_usuario', '$pmensaje', '$pestado')");
		
		$consulta->execute();		
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}


}