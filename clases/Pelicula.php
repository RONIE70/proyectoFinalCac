<?php
class Pelicula
{
	public $id;
 	public $titulo;  
    public $duracion;
  	public $fechLanz;    
  	public $genero;
  	public $director;
    public $reparto;
    public $sinopsis;
    public $foto;

	public function __construct($titulo,$genero,$fechaLanz,$foto,$duracion=null,$director=null,$reparto=null,$sinopsis=null,$id=null)
    {
      $this->id=$id;  
      $this->titulo=$titulo;  
      $this->genero=$genero; 
      $this->fechLanz=$fechaLanz; 
      $this->duracion=$duracion;   
      $this->director=$director; 
      $this->reparto=$reparto;  
      $this->sinopsis=$sinopsis;  
	  $this->foto=$foto;
    }

	public static function fromArray($data)
    {
        return new self
        (
            $data['titulo'] ?? null,
            $data['genero'] ?? null,
            $data['fechLanz'] ?? null,
            $data['duracion'] ?? null,
            $data['director'] ?? null,
            $data['reparto'] ?? null,
            $data['sinopsis'] ?? null,
            $data['id'] ?? null,
        );
	}

	public function toArray()
    {
        return get_object_vars($this);
    }
	

    public static function RetornaArrayPeliculas()
    {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM peliculas");
            $consulta->execute();           
            return $consulta->fetchAll(PDO::FETCH_CLASS, "Pelicula");    
    }

    public static function InsertarUnaPelicula($titulo, $fechaLanz, $duracion,$genero,$director, $reparto, $sinopsis,$foto)                            
  	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into peliculaingresada (titulo, fechaLanz, duracion, genero,director,reparto,sinopsis,foto) 
        values ('$titulo', '$fechaLanz', '$duracion','$genero','$director','$reparto', '$sinopsis','$foto')");
		
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
		
	}

    public static function TraerTodasPeliculas()
		{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT id, titulo,fechaLanz,duracion, genero,director,reparto,sinopsis,foto from peliculaingresada");
			$consulta->execute();			
			return $consulta->fetchAll();		
		}


	public static function CrearTablaUsuarios($nombreArchivo,$usuario)
		{

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	        $listado =Pelicula::TraerTodasPeliculas();
	        $tablaHTML="";
			switch ($nombreArchivo) 
			{
				case 'peliculas':

					$tablaHTML="<h4>USUARIOS</h4><table  cellspacing=2 cellpadding=2>";
					$tablaHTML.="<th>ID</th>";
					$tablaHTML.="<th>NOMBRE</th>";
					$tablaHTML.="<th>EMAIL</th>";
					$tablaHTML.="<th>PASSWORD</th>";
					$tablaHTML.="<th>FECHA INSCRIPCION</th>";
					//$tablaHTML.="<th>FOTO</th>";
				
					foreach($listado as $dato)      //</td><td>$auto[1]
						{
							if($usuario == "TODOS")
							{
								$tablaHTML.="<tr>";
						       	$tablaHTML.="<td>".$dato["id"]."</td>";
						       	$tablaHTML.="<td>".$dato["nombre"]."</td>";
						       	$tablaHTML.="<td>".$dato["email"]."</td>";
						       	$tablaHTML.="<td>".$dato["fechaInscrip"]."</td>";
						       	$tablaHTML.="<td>".$dato["importe"]."</td>";
						       	$tablaHTML.="<td>".$dato["email"]."</td>";
					
					}
			}
			$tablaHTML.="</table>";
			$archivo=fopen("tabla".$nombreArchivo.".php","w");
			fwrite($archivo,$tablaHTML);
			fclose($archivo);
		}
}

}