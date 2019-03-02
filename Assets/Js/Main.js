jQuery(document).ready(function() {
	// Página cargada
});


// Variables públicas
var artyom = new Artyom(); // Inicializamos


// Comment
function startArtiom() {
	artyom.initialize({
        lang:"es-ES",
        debug:true,
        continuous:false,
        listen:true
	}).then(function(){
        /*artyom.getVoices()*/ 
        artyom.say('Iniciando sistema'); artyom.say('¿Qué desea hacer?');
	}).catch(function(){alert('No se puede detectar la voz');});
}


// Comment
function stopArtiom(){
	console.log('Finalizando escuchar');
	artyom.fatality();
}

// Comment 
artyom.addCommands([
	{
        description: 'También te puede hablar a tí',
        indexes:['que puedo hacer', 'no se'],
        action: function(i) {
          	if (i == 0) {
            	artyom.say('a continuación le pressento las siguientes opciones');
          	}else if(i == 1){
            	artyom.say('si necesita ayuda, comuníquese con el administrador de la página, a continuación, en la ventana le muestro un correo de contacto');
          	}
        } 
	},{
        indexes:['CERRRAR SESIÓN'],
        action: function() {
          	artyom.say('SALIENDO DEL SISTEMA');
        }
	},{
        indexes:['INICIAR SESIÓN'],
        action: function() {
          	artyom.say('INICIANDO SESIÓN, ESPERE UN MOMENTO POR FAVOR');
        }
	},{
        indexes:['FINALIZAR'],
        action: function() {
          	artyom.say('FINALIZANDO, HASTA LUEGO');
        }
	}
]);


// Comment
artyom.redirectRecognizedTextOutput(function(text, isFinal) {
	if (isFinal) {
        $('#output').html('Finalizado');
	}else{
		$('#output').html(text + ' escuchando ...');
	}
});

