jQuery(document).ready(function() {
  $('#form-autenticacion').submit(function(event) {
    event.preventDefault();
    $.ajax({
      url: '/proyectos/Artyom_speech/Assets/Modelo/Usuario_m.php',
      type: 'POST',
      data: {peticion: 'Autenticacion', usuario:''+$('input[name=usuario]').val(), contrasenia: ''+$('input[name=constrasenia]').val()},
      success: function(result) {
            Swal.fire(
              'Excelente',
              result,
              'success'
            )
        if (result.action == 1) {
        }
      },
      error: function(XMLHttpRequest) {
        console.error(XMLHttpRequest);
      }
    })
  });


  // COmmment
  $('#my-id').on({'show.uk.modal': function(){
      console.log("Modal abierto");
    },'hide.uk.modal': function(){
      console.log("Modal cerrado");
    }
  });
}); // End Ready


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
        artyom.say('Iniciando sistema'); 
        artyom.say('¿Qué desea hacer?');
	}).catch(function(){alert('No se puede detectar la voz');});
}


// Comment
function stopArtiom(){
	console.log('Finalizando escuchar');
	artyom.fatality();
}

// Comment 
artyom.addCommands([{
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
    // UIkit.modal('#my-id').show();
    artyom.say('ESPERE UN MOMENTO POR FAVOR');
    setTimeout(function() {
      window.location.href = 'Public/Autenticacion/';
    }, 3500)
  }
},{
  indexes:['FINALIZAR'],
  action: function() {
    	artyom.say('FINALIZANDO, HASTA LUEGO');
      artyom.fatality();
  }
}]);


// Comment
artyom.redirectRecognizedTextOutput(function(text, isFinal) {
	if (isFinal) {
        $('#output').html('Finalizado');
	}else{
		$('#output').html(text + ' escuchando ...');
	}
});

