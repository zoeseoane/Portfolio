
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "head.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>

    <title>Home</title>
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
                <li class="nav-item  active">
                    <a class="nav-link "href="index.php"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="corder.php"><i class="fas fa-laptop-code"></i>Corder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="diseño.php"><i class="fas fa-rocket"></i>desinger</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contacto.php"><i class="fas fa-hands-helping"></i>Contacto</a>
                </li>
               
            </ul>
        </div>
    </nav>
  



     <section id="header">
     <div class="container">
     <div class="row">
        <div class="header__content" >
        <div class="box">
    <div class="infobox">
      <p class="infobox-boldtext">
DISEÑADORA DE INTERFAZ DE USUARIO.
      </p>
     
    </div>
  </div>
                    <div class="cat">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_k86wxpgr.json"  background="transparent" class="svg"  speed="1"  
style="margin-top:-300px;margin-left:700px;width: 500px; height: 500px;object-fit: contain; margin-bottom=50p0x"; loop  autoplay></lottie-player>
            <div class="header__arrow">
            <a class="btn" href="#Cards">Servicios</a> 
            <br>&nbsp&nbsp
                <a class="scroll text-center" href="#about" ><i class="fas fa-angle-double-down" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>  
        </div>               
        </section>
       

        <section id="about">
        <div class="card o-hidden border-0 shadow-lg my-5  bg-secondary">
          <div class="card-body p-0 mt-4">
<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
        <div class="container">
            <h2>Sobre Mi</h2>
            
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" class="zoe"></script>
<lottie-player src="https://assets4.lottiefiles.com/packages/lf20_fo0grcos.json" class="zoe" background="transparent"  speed="1"  style="width: 150px; height: 150px; margin-left: 480px;@media all and (max-width: 480px) {display: none;}"  loop  autoplay></lottie-player>
            <p class="lead">Freelance Designer & Developer</p>
            <p>Una joven  desarrolladora web creativa que cree que el acceso equitativo a la información y la tecnología tiene el poder de crear un mundo más justo e inclusivo. Mi pasión por resolver problemas y asumir nuevos desafíos está equiparada con la sed de conocimiento y búsqueda de soluciones dentro y fuera de la caja. 
        </div>
    </section>
    <div class="container">
    <section id="portfolio">
<div class="row">
   <div id="desing" class="desing">
 <a href="diseño.php">
        <div id="designer" class="columna">
          <div id="designer-desc" class="description">
            <h1>Designer</h1>
            <p> Diseñadora UI/UX apasionada por diseñar experiencias de usuario hermosas y funcionales. </p>
          </div>
        </div>
      </a>

     <div id="img-desing" class="columna">
          <div class="imgZoe">
          <img src="imagenes/imgZoe.jpeg" alt="">
          </div>
        </div>


      <a href="corder.php">
        <div id="coder" class="columna">
          <div id="coder-desc" class="description">
            <h1>&lt;coder&gt;</h1>
            <p>Desarrolladora Full Stack que se enfoca en escribir código limpio, elegante y eficiente. </p>
          </div>
        </div>
        </div>
        </div>
      </a>
      </section>
      </div>
      <br>
      <br>
      <section id="Cards" >
 
<h1  class="text-center text-light">
Servicios
</h1>


        <div class="cards" >
<script src="https://kit.fontawesome.com/95a02bd20d.js"></script>

<div class="container" >
   <div class="card" style="background-color:#0000;">
     <div class="face face1">
       <div class="content">
       <i class="fas fa-network-wired"></i>           
         <h3>Sitios Web</h3>
       </div>
     </div>
     <div class="face face2">
       <div class="content">
         <p> Tener un sitio web te garantiza tener una vitrina digital de tus productos, expandiendo tu alcance y llegando a otras ciudades; incluso a otros países, dado que tus clientes potenciales podrán ver los productos, precios y características a través de tu sitio web, sin necesidad de estar presentes en la tienda.</p>
       </div>
     </div>
  </div>
  
  <div class="card" style="background-color:#0000;">
     <div class="face face1">
       <div class="content">
       <i class="fas fa-lightbulb"></i>            <h3>Diseño UI/UX</h3>
       </div>
     </div>
     <div class="face face2">
       <div class="content">
         <p> lograrás crear esa lealtad entre el cliente y tu negocio. Tener con nosotros la lealtad de un cliente debe ser uno de los principales objetivos para la empresa o negocio.</p>
  
       </div>
     </div>
  </div>
  
  
  <div class="card" style="background-color:#0000;">
     <div class="face face1">
       <div class="content">
       <i class="fas fa-folder-open"></i>
          <h3>Soluciones a medida</h3>
       </div>
     </div>
     <div class="face face2">
       <div class="content">
         <p> recibir un buen servicio al cliente, nos hace sentir escuchados y valorados como consumidores, sentimientos que suelen aumentar la confianza y pueden ser ese último empujoncito que necesitamos para hacer una compra.</p>
       </div>
     </div>
  </div>
</div>



<div class="cards" >
<script src="https://kit.fontawesome.com/95a02bd20d.js"></script>

<div class="container" >
   <div class="card" style="background-color:#0000;">
     <div class="face face1">
       <div class="content">
       <i class="fas fa-bullhorn"></i>           
         <h3>Marketing digital</h3>
       </div>
     </div>
     <div class="face face2">
       <div class="content">
         <p> El marketing digital ayuda a orientar a las empresas hacia un público objetivo. Hoy día no se puede permanecer ajenos al mercado, los especialistas de marketing deben ser capaces de entender qué es lo que dice el mercado o entorno del mercado conocido como macro entorno.</p>
       </div>
     </div>
  </div>
  
  <div class="card" style="background-color:#0000;">
     <div class="face face1">
       <div class="content">
       <i class="fas fa-database"></i>             <h3>Web responsive</h3>
       </div>
     </div>
     <div class="face face2">
       <div class="content">
         <p> Los sitios web responsive son fáciles de navegar y requieren menos tiempo de carga, lo que reduce los porcentajes de rebote y hace que compartir en las redes sociales sea más fácil para el usuario. Además, ofrecen una experiencia de usuario perfecta que se traduce en una percepción más positiva de tu marca</p>
       </div>
     </div>
  </div>
  
  
  <div class="card" style="background-color:#0000;">
     <div class="face face1">
       <div class="content">
       <i class="fas fa-cubes"></i>
          <h3>Branding</h3>
       </div>
     </div>
     <div class="face face2">
       <div class="content">
         <p>Branding es importante porque no solo es lo que permitirá causar una impresión memorable en los consumidores, sino que también les permitirá a tus clientes saber qué esperar de tu empresa. Es una forma de distinguirse de la competencia y aclarar qué es lo que estás ofreciendo lo que te convierte en la mejor opción.</p>
       </div>
     </div>
  </div>
</div>
</section>


<section id="skills"  class="container" >
     <div  class="container-skillbar">
  <h4>SKILLS</h4>
	<div class="skillbar clearfix" data-percent="70%">
		<div class="skillbar-title" style="background: #DD1E2F;"><span>HTML</span></div>
		<div class="skillbar-bar" style="background: #DD1E2F;"></div>
		<div class="skill-bar-percent">70%</div>
	</div>

	<div class="skillbar clearfix " data-percent="55%">
		<div class="skillbar-title" style="background: #EBB035;"><span>CSS</span></div>
		<div class="skillbar-bar" style="background: #EBB035;"></div>
		<div class="skill-bar-percent">55%</div>
	</div>

	<div class="skillbar clearfix " data-percent="60%">
		<div class="skillbar-title" style="background: #06A2CB;"><span>Java Script</span></div>
		<div class="skillbar-bar" style="background: #06A2CB;"></div>
		<div class="skill-bar-percent">60%</div>
	</div>

	<div class="skillbar clearfix " data-percent="55%">
		<div class="skillbar-title" style="background: #218559;"><span>jQuery</span></div>
		<div class="skillbar-bar" style="background: #218559;"></div>
		<div class="skill-bar-percent">55%</div>
	</div>

	<div class="skillbar clearfix " data-percent="80%">
		<div class="skillbar-title" style="background: #D0C6B1;"><span>Bootstrap</span></div>
		<div class="skillbar-bar" style="background: #D0C6B1;"></div>
		<div class="skill-bar-percent">80%</div>
	</div>
  <div class="skillbar clearfix " data-percent="35%">
		<div class="skillbar-title" style="background: #900c3f;"><span>API</span></div>
		<div class="skillbar-bar" style="background: #900c3f;"></div>
		<div class="skill-bar-percent">35%</div>
	</div> 
	<div class="skillbar clearfix " data-percent="25%">
		<div class="skillbar-title" style="background: #192823;"><span>Photoshop</span></div>
		<div class="skillbar-bar" style="background: #454545;"></div>
		<div class="skill-bar-percent">25%</div>
	</div> 
</div>
     </section>

 
      <section id="contact">
      <div class="text-center btn-style double-line">
          
                    <a  href="download/CurriculumZoeSeoane.pdf"  download="CurriculumZoeSeoane.pdf" class="btn btn-lg btn-outline">
                        <i class="fa fa-fw fa-download"></i> Download Resume
                    </a>
                </div>
            </div>
            <br>
 <p class="lead">¿Te gusta lo que ves ?</p>
 <br>
 <p>¿Necesitas un diseñador web?</span></p>
 <a class="btn" href="contacto.php">Contact Me</a>
 
 <div class="contact__social">
 <a href="https://github.com/zoeseoane" ><i class="fab fa-github"></i></a>
				<a href="https://www.linkedin.com/in/zoe-seoane/"><i class="fab fa-linkedin"></i></a>
				<a href="mailto:zorabigailseoane@gmail.com? Subject=Propuesta%20DE%20TRABAJO" ><i class="fas fa-at"></i></a>
 </div>
</div>
</section>

  
</body>
<script  src="./scripthom.js"></script>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./scriptnav.js"></script>

</html>
<style>
  @media all and (max-width: 480px) {
 .box .infobox-boldtext {
    font-size: 32px;
    line-height: 1.4em;
    text-align: center;
  }
   .box .infobox-slimtext {
    text-align: center;
  }
   .box .infobox-btnwrapper {
    justify-content: center;
  }
  
  .header__arrow {
      margin-top: -20px;
      text-align: center;
      margin-right: -10px ;
    }
  .cards{
    display:none;
  }
  .imgZoe {
  height: 70px;
  width: 70px;
  }
  #coder {
    padding: 0px 0px 50px;
  }
  #about{
    padding: 3rem 0;
  }
  .bold{
    font-size: 3rem;
  }
  .svg{
    display: none;
  }
  .zoe{
   display:none;
  }
}
</style>