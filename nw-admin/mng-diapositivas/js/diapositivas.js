	var table = $('#tbldiap').DataTable( {
		ajax: "control/diapositivas.lista.php",
		responsive: true,
		language:  {
      sProcessing:     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ registros",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar:",
      "sUrl":            "",
      "sInfoThousands":  ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
    }
	} );

	$('.imagen').fileinput({
		language: 'es',
		showUpload:false,
		showCaption: false,
		browseClass: "btn btn-primary btn-block",
    allowedFileExtensions: ['jpg','png','gif']
  });

	$('#eddesk').fileinput({
		language: 'es',
		showUpload:false,
		showRemove:false,
		showCaption: false,
		initialPreviewAsData: true,
		browseClass: "btn btn-primary btn-block",
		initialPreview: ['../images/placeholder.png'],
    allowedFileExtensions: ['jpg','png','gif'],
  });

	$(document).on("click",".pre_eraseFN",function() {
    var id = $(this).data('pro');
    Swal.fire({
      title: '¿Eliminar Diapositiva?',
      text: "La diapositiva se eliminará completamente",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar',
      cancelButtonText: 'Cancelar',
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: 'control/diapositivas.delete.php',
          type: 'GET',
          data: { "id" : id},
          success: function( data ){
            Swal.fire('Eliminado!','Diapositiva Eliminada', 'success' );
            table.ajax.reload();
          }
        });
      }
    });
	});

	$(document).on('click','.pre_edit-sm', function() {
		var id = $(this).data('pro');
		var desk = $(this).data('desk');
		$('#idban').val(id);
		$('#preveddes img').attr('src','../../img/diapositivas/'+desk);
		$('#EdBan').modal('show');
	});

  $('#NwBanner').submit( function (event) {
    event.preventDefault(); DescButtons(1);
    var datos = new FormData($(this)[0]);
    $.ajax({
      url:'control/diapositivas.insert.php',
      type:'POST',
      data:datos,
      cache:false,
      contentType:false,
      processData:false,
      success:function( response ) {
        var r = JSON.parse(response);
        alerta(r.tit,r.msg,r.tipo,'Aceptar');
        if (r.success) table.ajax.reload();
				setTimeout(function () { swal.close(); $('#NwBan').modal('hide'); ActButtons(1); /*$('#NwBanner')[0].reset(); */}, 2000);
      },
      error: function(){ alerta('Error!','No se pudo conectar con el servidor','error','Aceptar'); }
    });
  });

  $('#EdBanner').submit( function (event) {
    event.preventDefault(); DescButtons(2);
    var datos = new FormData($(this)[0]);
    $.ajax({
      url:'control/diapositivas.update.php',
      type:'POST',
      data:datos,
      cache:false,
      contentType:false,
      processData:false,
      success:function( response ) {
        var r = JSON.parse(response);
        alerta(r.tit,r.msg,r.tipo,'Aceptar');
        if (r.success) table.ajax.reload();
				setTimeout(function () { swal.close(); $('#EdBan').modal('hide'); ActButtons(2); /*$('#EdBanner')[0].reset(); */}, 2000);
      },
      error: function(){ alerta('Error!','No se pudo conectar con el servidor','error','Aceptar'); }
    });
  });
