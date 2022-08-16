<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "head.php";


?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacto</title>
</head>
<body id="contacto">



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
                <li class="nav-item">
                    <a class="nav-link" href="corder.php"><i class="fas fa-laptop-code"></i>Corder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="diseño.php"><i class="fas fa-rocket"></i>desinger</a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="contacto.php"><i class="fas fa-hands-helping"></i>Contacto</a>
                </li>
               
            </ul>
        </div>
    </nav>
  
	<section id="aprendizaje">
   
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form >
			<h2>Tambien me podes encontrar en:</h2>
			<div class="social-container">
				<a href="https://github.com/zoeseoane" class="social"><i class="fab fa-github"></i></a>
				<a href="https://www.linkedin.com/in/zoe-seoane/" class="social"><i class="fab fa-linkedin"></i></a>
				<a href="mailto:zorabigailseoane@gmail.com" class="social"><i class="fas fa-at"></i></a>
			</div>

			
		</form>
	</div>
	<div class="form-container sign-in-container">
	<form action="enviar.php" method="post">
		<br> 
			<h2>Contactame</h2>
			<div class="social-container">
				<a href="https://github.com/zoeseoane" class="social"><i class="fab fa-github"></i></a>
				<a href="https://www.linkedin.com/in/zoe-seoane/" class="social"><i class="fab fa-linkedin"></i></a>
				<a href="mailto:zorabigailseoane@gmail.com? Subject=Propuesta%20DE%20TRABAJO" class="social"><i class="fas fa-at"></i></a>
			</div>
			<span>Escriba a continuacion sus datos y en la brevedad me pondre en contacto</span>
			<input type="text" name="name" placeholder="Name" required="required" />
			<input type="email" name="mail" placeholder="Email" required="required"/>
		<textarea name="menssage" id="" placeholder="Escribe tu mensaje aqui"  required="required"></textarea>
		<br>
		<button  id="signUp">Enviar</button>
		<br>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Vuelve proto!</h1>
				<br>
				<button class="ghost" id="signIn">Atras</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hola!</h1>
				<p>Gracias por llegar hasta este punto de la experiencia espero que te haya sido placido,dejame tu mensaje y estaremos en contacto.</p>
				
			</div>
		</div>
	</div>
</div>  
</section>


</body>

<script  src="./scriptCont.js"></script>
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./scriptnav.js"></script>

</html>
<style>
@media all and (max-width: 480px) {

h1{
	padding-top: 20px;
	font-size: 2rem;
	margin-left: 180px;
}
form{
	padding: 0 7px;
}
textarea {
	width: 328px;
	margin: 11px 0px -17px 191px;
}
input {
	padding: 2px 14px;
	margin: 3px -180px;
	margin-left: 0;
}
.overlay-container{
	display: none;
}
.social-container {
	margin: 12px -144px;
	margin-left: 69px;
}
span {
	margin: 13px -180px;
	margin-left: 0px;
}
#signUp{
	margin: 0px -190px 0px 0px;
}
.fa-github:before, .fa-linkedin:before, .fa-at:before{
	margin-left: 10px;
}
}</style>