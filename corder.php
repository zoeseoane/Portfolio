<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "head.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Corder</title>
</head>
<body>
<nav class="navbar navbar-expand-custom navbar-mainbg">
<a class="navbar-brand navbar-logo"  href="download/CurriculumZoeSeoane.pdf"  download="CurriculumZoeSeoane.pdf">Zoe Seoane</a>

        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item ">
                    <a class="nav-link "href="index.php"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="corder.php"><i class="fas fa-laptop-code"></i>Corder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="diseño.php"><i class="fas fa-rocket"></i>desinger</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php"><i class="fas fa-hands-helping"></i>Contacto</a>
                </li>
               
            </ul>
        </div>
    </nav>
  
<section id="headCorder">
   <div class="parent-container two-column-grid"></div>
<div class="container2">
  <div class="row">
  <div class="col-6 text-white">
<article>
<div class="box ">
      <p class="infobox-boldtext">
Desarrolladora Full Stack.
      </p>
    <p  class="started-slimtext">Me caracterizo por escribir código moderno, eficaz y fácil de mantener para una  gama de proyectos los cuales tendran la misma linea de orden y limpieza en el mismo.</p>
    <p  class="started-slimtext">Trabaje con una variedad de diferentes lenguajes, plataformas, marcos y sistemas de administración de contenido, como JavaScript, Php, Laravel, React, jQuery, WordPress, Git y Apache.</p>

  </article>
  </div>

    
<div class="col-6">
  <div class="hexagone animate">
    
    <div class="top">
      <div class="face"></div>
      <div class="face"></div>
      <div class="face">Php</div>
    </div>
    
    <div class="bottom">
      <div class="face"></div>
      <div class="face"></div>
      <div class="face">javascript</div>
    </div>

    <div class="side-faces">
      <div class="side">Laravel</div>
      <div class="side">React.js</div>
      <div class="side">MySql</div>
      <div class="side">Git</div>
      <div class="side">Apache</div>
      <div class="side">jQuery</div>
    </div>

  </div>
</div>
</div>
</div>
</div>
</section>


<div class="imgCorder" style="margin-left:64rem; margin-top:-12rem; ">
                        <img src="imagenes/imgCorder.jpeg" alt="">
                    </div>


<div class="container">
 
<section id="aprendizajecorder">
  <div class="container">
  <div class="started">
    <p class="started-boldtext">Aprendisaje en Desarrollo</p>
    <p class="started-slimtext">Considero de suma importancia estar en constante aprendizaje para  de esta manera poder alcanzar de forma mas eficiente y rapida nuevos desafios. </p>
    <div class="started-items">
      <div class="itemwrapper">
        <div class="started-items-item">
        <i class="fab fa-python" style="color:white;font-size:40px;"></i>
        </div>
        <p>Paython </p>
      </div>
      <div class="itemwrapper">
        <div class="started-items-item">
        <i class="fab fa-php" style="color:white;font-size:40px;"></i>
        </div>
        <p>Php Avanzado</p>
      </div>
      <div class="itemwrapper">
        <div class="started-items-item">
        <i class="fab fa-git"  style="color:white;font-size:40px;"></i>
        </div>
        <p>Perfeccionandome en Git</p>
      </div>
	 
       

  </section>
</body>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./scriptnav.js"></script>
<style>
   @media all and (max-width: 480px) {
 
    img{
      display:none;
    }
    .started  p{
      margin-top:50px;
     margin-left:20px;
    }
    .hexagone {
  display:none;
   }
   }

</style>




</html>