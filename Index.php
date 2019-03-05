<?php require_once 'Assets/Componentes/header.php'; ?>
	<div class="uk-container" style="padding: 4px;">
		<ul class="uk-breadcrumb">
	    	<li><a href="<?=$_SESSION['base_url']?>"><span>Inicio</span></a></li>
		</ul>
	</div>
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
<?php require_once 'Assets/Componentes/Footer.php' ?>
<script type="text/javascript">
	var base_url = "<?=$_SESSION['base_url']?>";
</script>