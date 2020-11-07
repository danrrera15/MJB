	var table = $('#tblmaquinaria').DataTable({
		ajax: "control/maquinaria.lista.php",
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
	});

	$(document).on("click",".pre_eraseFN", function() {
		var id = $(this).data('pro');
		Swal.fire({
			title: '¿Eliminar Maquina?',
			text: "El producto y sus archivos adjuntos se eliminarán completamente",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Aceptar',
			cancelButtonText: 'Cancelar',
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: 'control/maquinaria.delete.php',
					type: 'GET',
					data: { "id" : id},
					success: function( data ){
						Swal.fire('Eliminado!','Producto Eliminado','success');
						table.ajax.reload();
					}
				});
			}
		});
	});
