jQuery(document).ready(function($) {
	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});
});

// Funcion sweetalert
function alerta(titulo, texto, tipo, textBtn){
	swal.fire({
		title: titulo,
		text: texto,
		type: tipo,
		confirmButtonText: textBtn,
	});
}

// Validación de Formularios
function Letras(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "áéíóúabcdefghijklmnñopqrstuvwxyz ";
  especiales = [8,46];
  tecla_especial = false
  for(var i in especiales){
  	if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }
  if(letras.indexOf(tecla)==-1 && !tecla_especial) return false;
}

function Numeros(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "1234567890-";
  especiales = [8,46];
  tecla_especial = false;
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }
  if(letras.indexOf(tecla)==-1 && !tecla_especial) return false;
}

function NumerosyLetras(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "áéíóúabcdefghijklmnñopqrstuvwxyz 1234567890,.:-_@/*+|°¬$#%&()=¿?¡!{}[]<>";
  especiales = [8,46];
  tecla_especial = false
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }
  if(letras.indexOf(tecla)==-1 && !tecla_especial) return false;
}

function ValCorreo(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "abcdefghijklmnñopqrstuvwxyz1234567890-_.@";
  especiales = [8,46];
  tecla_especial = false
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }
  if(letras.indexOf(tecla)==-1 && !tecla_especial) return false;
}

function ValTexto(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "abcdeáéíóúfghijklmnñopqrstuvwxyz1234567890,.:-_@/*+|°¬$#%&()=¿?¡!{}[]<> ";
  especiales = [8,46,13];
  tecla_especial = false
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }
  if(letras.indexOf(tecla)==-1 && !tecla_especial) return false;
}

//Formateo de Fechas y horas
function formatTime(hour){
	var hora = hour.split(':');
	var ho = ''; var ampm = '';
	ampm = (hora[0] < '12') ? 'am':'pm';
	switch (hora[0]) {
		case '13': ho = '01'; break;
		case '14': ho = '02'; break;
		case '15': ho = '03'; break;
		case '16': ho = '04'; break;
		case '17': ho = '05'; break;
		case '18': ho = '06'; break;
		case '19': ho = '07'; break;
		case '20': ho = '08'; break;
		case '21': ho = '09'; break;
		case '22': ho = '10'; break;
		case '23': ho = '11'; break;
		default: ho = hora[0];
	}
	return ho+':'+hora[1]+' '+ampm;
}

function formatDate(dat) {
	var me = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
	var di = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
	var da = new Date(dat);
  return di[da.getDay()]+' '+da.getDate()+' de '+me[da.getMonth()]+' de '+da.getFullYear();
}

//Botones de formularios
function DescButtons(a){
	jQuery('#btnsbmt'+a).html('');
	jQuery('#btnsbmt'+a).html('<img width="50px" src="'+url+'images/Ellipsis-1.5s-200px.gif">');
	jQuery('#btnsbmt'+a).attr('disabled','disabled');
	jQuery('#btncncl'+a).attr('disabled','disabled');
}

function ActButtons(a){
	jQuery('#btnsbmt'+a).html('');
	jQuery('#btnsbmt'+a).html('<i class="fa fa-save"></i>&nbsp;Aceptar');
	jQuery('#btnsbmt'+a).prop('disabled',null);
	jQuery('#btncncl'+a).prop('disabled',null);
}

//Obtener estados y municipios
function getMunicipios(estado) {
	$.ajax({
		url:url+'php/getmunicipios.php',
		data:{'estado':estado},
		type:'GET',
		success:function(response) {
			var r = JSON.parse(response);
			var ops = "<option disabled selected>Seleccione...</option>";
			for (mnp of r) {
				ops += '<option value="'+mnp+'">'+mnp+'</option>';
			}
			$("select[name='municipio']").html('');
			$("select[name='municipio']").append(ops);
		},
		error:function(){ console.log('Error al obtener municipios'); }
	});
}
