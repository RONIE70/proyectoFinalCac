<?php
include_once ("../clases/AccesoDatos.php"); 
include_once ("../clases/Pelicula.php");
Pelicula::TraerTodasPeliculas();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | SC-MOVIES</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://kit.fontawesome.com/f7fb471b65.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/img/favicon-16x16.png" type="image/x-icon">
    
</head>
<body class="bodyRegistrarse">
    <header class="headerRegistrarse">
        <a class="anclaLogo" href="../index.html">
            <i class="fas fa-film" aria-hidden="true"></i>
            <span>SC-Movies</span>
        </a>
       
    </header>
    <main  id="main" class="main">
      <section  data-aos="zoom-in"  data-aos-duration="1000" class="seccionRegistrarse">
    <div id="formato">
        <h4 class="tituloInsertPelis"> SUBI TU PELI FAVORITA</h4>
        <div>
            <form  enctype="multipart/form-data" id="formularioPelisFoto" action="../php/hacerInsertarPeli.php" method="post">
                <div class="foto">
                    <h4>FOTO DE PORTADA</h4>
                    <p> <input name="subir_archivo" type="file" /></p>
                </div>
            </form>
        </div>
    
        <div>
            <form  enctype="multipart/form-data" id="formularioPelis" action="../php/hacerInsertarPeli.php" method="post">
        
                <div>
                    <input type="text" placeholder="Título" name="titulo" id="titulo">
                    <span id="nombreError" class="error" ></span>
                </div>
                <div>
                    <input type="date" placeholder="Fecha de Lanzamiento" name="fechaLanz">
                    <span id="emailError" class="error"></span>
                </div>
                <div>
                    <input type="text" placeholder="Género"  name="genero" id="genero">
                    <span id="emailError" class="error"></span>
                </div>
                <div>
                    <input type="text" placeholder="Duración"  name="duracion" id="duracion">
                    <span id="emailError" class="error"></span>
                </div>
                <div>
                    <input type="text" placeholder="Director"  name="director" id="director">
                    <span id="emailError" class="error"></span>
                </div>
                <div>
                    <input type="text" placeholder="Reparto"  name="reparto" id="reparto">
                    <span id="emailError" class="error"></span>
                </div>
                <div>
                    <input type="text" placeholder="Sinopsis"  name="sinopsis" id="sinopsis">
                    <span id="sinopsisError" class="error"></span>
                </div>
                
                <div>
                    <input  id="boton2" type="submit" value="GUARDAR">
                </div>
            
                <div > 
                    <a class="ayuda" href="#">Te podemos ayudar?</a>
                </div>
                
                
            
            </form>
            </div>  
    </div>
      </section>
   
    </main>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="../js/json.js"></script> 
</body>

</html>
