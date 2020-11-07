	var table = $('#tblusers').DataTable( {
		ajax: "control/users.lista.php",
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

	$(document).on("click",".pre_eraseFN",function() {
    var id = $(this).data('pro');
    Swal.fire({
      title: '¿Eliminar usuario?',
      text: "El usuario se eliminará completamente",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar',
      cancelButtonText: 'Cancelar',
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: 'control/user.delete.php',
          type: 'GET',
          data: { "id" : id},
          success: function( data ){
            Swal.fire('Eliminado!','Ususario Eliminado', 'success' );
            table.ajax.reload();
          }
        });
      }
    });
	});
// table.row( $(this).parents('tr') ).remove().draw();

  function editar(id){
    $.ajax({
      url:  'control/user.get.php',
      data:{'id':id},
      type:'GET',
      success:function (response) {
        var r = JSON.parse(response);
        $('#edus').val(r.user_id);
        $('#edusname').val(r.user_sesion);
        $('#edname').val(r.user_name);
        $('#edcontra').val('');
        $('#EdUs').modal('show');
      },
      error:function () { alerta('Error!','No se pudo conectar al servidor','error','Aceptar'); }
    });
  }

  $('#NwUser').submit( function (event) {
    event.preventDefault(); DescButtons(1);
    var datos = new FormData($(this)[0]);
    $.ajax({
      url:'control/user.insert.php',
      type:'POST',
      data:datos,
      cache:false,
      contentType:false,
      processData:false,
      success:function( response ) {
        var r = JSON.parse(response);
        alerta(r.tit,r.msg,r.tipo,'Aceptar');
        if (r.success) table.ajax.reload();
      },
      error: function(){ alerta('Error!','No se pudo conectar con el servidor','error','Aceptar'); }
    });
    setTimeout(function () { swal.close(); $('#NwUs').modal('hide'); ActButtons(1); $('#NwUser')[0].reset(); }, 2000);
  });

  $('#EdUser').submit( function (event) {
    event.preventDefault(); DescButtons(2);
    var datos = new FormData($(this)[0]);
    $.ajax({
      url:'control/user.update.php',
      type:'POST',
      data:datos,
      cache:false,
      contentType:false,
      processData:false,
      success:function( response ) {
        var r = JSON.parse(response);
        alerta(r.tit,r.msg,r.tipo,'Aceptar');
        if (r.success) table.ajax.reload();
      },
      error: function(){ alerta('Error!','No se pudo conectar con el servidor','error','Aceptar'); }
    });
    setTimeout(function () { swal.close(); $('#EdUs').modal('hide'); ActButtons(2); $('#EdUser')[0].reset(); }, 2000);
  });
