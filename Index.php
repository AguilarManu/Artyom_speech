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
    	<div class="uk-navbar-center">
     	   <a href="" class="uk-navbar-item uk-logo"><img class="logo" src="Assets/Img/Speech.png" width="60" /></a>
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
	        <a href="" class="uk-navbar-item uk-logo"><img class="logo" src="Assets/Img/Speech.png" width="60" /></a>
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
     	   			<a href="" class="uk-navbar-item uk-logo"><img class="logo" src="Assets/Img/Profile_Icon.png" width="60" /></a>
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
	



	<!-- Inciar cuerpo .uk-card-body-->
	<div class="uk-card-small uk-card-body contenedor">
		<div class="uk-container uk-container-expand">
			<div class="uk-card uk-card-default  uk-width-1-1">
				<div class="uk-card-body">
					<h1 class="uk-heading-bullet">ARTYOM SPEECH</h1>
		    		<img class="logo uk-align-center" onclick="startArtiom()" src="Assets/Img/Listening.gif" width="400" />
					<span id="output"></span>
				</div>
			</div>
		</div>
	</div> <!-- End .uk-card-body .contenedor-->


<!-- This is the modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Hola model title</h2>
        <a class="uk-modal-close uk-close">x</a>
			<div class="uk-flex uk-flex-center uk-flex-middle uk-background-muted uk-height-viewport">
				<div class="uk-width-medium uk-padding-small" id="logindiv">
					<form id="form-autenticacion">
						<fieldset class="uk-fieldset">
							<legend class="uk-legend">Login</legend>
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon uk-form-icon-flip uk-icon" data-uk-icon="icon: user"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="user"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4" r="4.4"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"></path></svg></span>
									<input class="uk-input uk-form-large" name="usuario" placeholder="Usuario" type="text">
								</div>
							</div>
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon uk-form-icon-flip uk-icon" data-uk-icon="icon: lock"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="lock"><rect fill="none" stroke="#000" height="10" width="13" y="8.5" x="3.5"></rect><path fill="none" stroke="#000" d="M6.5,8 L6.5,4.88 C6.5,3.01 8.07,1.5 10,1.5 C11.93,1.5 13.5,3.01 13.5,4.88 L13.5,8"></path></svg></span>
									<input class="uk-input uk-form-large" name="constrasenia" placeholder="Password" type="password">
								</div>
							</div>
							
							<div class="uk-margin">
								<label><input class="uk-checkbox" type="checkbox"> Keep me logged in</label>
							</div>
							<div class="uk-margin">
								<button type="submit" class="uk-button uk-button-primary uk-button-primary uk-button-large uk-width-1-1">LOG IN</button>
							</div>
						</fieldset>
					</form>
					<div>
						<div class="uk-text-center">
							<a class="uk-link-reset uk-text-small" data-uk-toggle="target: #recover;animation: uk-animation-slide-top-small">Forgot your password?</a>
						</div>
						<div class="uk-margin-small-top" id="recover" hidden="">
							<form action="login.html">
								
								<div class="uk-margin-small">
									<div class="uk-inline uk-width-1-1">
										<span class="uk-form-icon uk-form-icon-flip uk-icon" data-uk-icon="icon: mail"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="mail"><polyline fill="none" stroke="#000" points="1.4,6.5 10,11 18.6,6.5"></polyline><path d="M 1,4 1,16 19,16 19,4 1,4 Z M 18,15 2,15 2,5 18,5 18,15 Z"></path></svg></span>
										<input class="uk-input" placeholder="E-mail" required="" type="text">
									</div>
								</div>
								<div class="uk-margin-small">
									<button type="submit" class="uk-button uk-button-primary uk-width-1-1">SEND PASSWORD</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
    </div>
</div>





	<!-- Footer -->
	<div class="uk-card-small uk-card-default uk-card-body contenedor">
		<div class="uk-card">
			<!-- <hr class="uk-divider-icon">
			<hr class="uk-divider-vertical"> -->
			<div class="uk-flex-middle" uk-grid>
    <div class="uk-width-2-3@m">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="uk-width-1-3@m uk-flex-first">
        <img src="Assets/Img/Listening.gif" alt="Image" width="100">
    </div>
</div>
			
		</div>
	</div>




	<!-- UIkit JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>

	<!-- Jquery CDN -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>

	<!-- Artyom JS -->
	<script>var exports = {};</script>
	<script type="text/javascript" src="Assets/Plugins/artyom/artyom.js"></script>

	<!-- Sweet Alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<!-- Main Project -->
	<script type="text/javascript" src="Assets/Js/Main.js"></script>
</body>
</html>
