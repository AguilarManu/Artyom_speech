<?php 
	session_start();
	$_SESSION['base_url'] = 'http://localhost:8085/proyectos/Artyom_speech/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artyom</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
</head>
<body>
	<nav class="uk-navbar uk-navbar-container uk-box-shadow-medium uk-hidden@m" id="menu" uk-navbar>
    	<div class="uk-navbar-left">
        	<a class="uk-navbar-toggle" href="#" uk-toggle="target: #menu-mobile">
        	    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">MENÚ</span>
        	</a>
    	</div>
    	
	</nav>
	<div class="uk-offcanvas-content">
	    <div id="menu-mobile" uk-offcanvas="mode: push; overlay: true">
	        <div class="uk-offcanvas-bar">
	            <button class="uk-offcanvas-close" type="button" uk-close></button>
	            <ul class="uk-nav uk-nav-default">
	                <li><a href="#">Opción 1</a></li>
	                <li><a href="#">Opción 2</a></li>
	            </ul>
	        </div>
	    </div>
	</div> <!-- End menu mobile -->

	<!-- Menu desktop -->
	<nav class="uk-navbar uk-navbar-container uk-box-shadow-medium uk-visible@l" id="menu" uk-navbar>
		<div class="uk-navbar-left">
	        <a href="" class="uk-navbar-item uk-logo"><img class="logo" src="<?php echo $_SESSION['base_url']?>Assets/Img/Speech.png" width="60" /></a>
        	<ul class="uk-navbar-nav">
            	<li>
            		<a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>DESTACADO</a>
            	</li>
            	<li>
            		<a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: bell"></span>NOTIFICACIONES</a>
            	</li>
        	</ul>
        	<div class="uk-navbar-item">
        	    <form action="javascript:void(0)">
        	        <input class="uk-input uk-form-width-small" type="text" placeholder="Buscar">
        	        <button class="uk-button uk-button-default"><span class="uk-icon" uk-icon="icon: search"></span></button>
        	    </form>
        	</div>
    	</div>
    	<div class="uk-navbar-right">
        	<ul class="uk-navbar-nav">
            	<li>
     	   			<a href="" class="uk-navbar-item uk-logo"><img class="logo" src="<?php echo $_SESSION['base_url']?>Assets/Img/Speech.png" width="60" /></a>
                	<div class="uk-navbar-dropdown">
                	    <ul class="uk-nav uk-navbar-dropdown-nav">
                	        <li class="uk-active"><a href="#">MANUEL AGUILAR</a></li>
                	        <li class="uk-nav-divider"></li>
                	        <li><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: user"></span>PERFIL</a></li>
                	        <li><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: lock"></span>CERRAR SESIÓN</a></li>
                	    </ul>
                	</div>
            	</li>
        	</ul>
    	</div>
	</nav><!-- Fin menu -->