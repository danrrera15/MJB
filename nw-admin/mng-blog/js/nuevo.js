CKEDITOR.replace( 'contenido', {
  filebrowserBrowseUrl: 		 url+'vendors/ckfinder/ckfinder.html',
  filebrowserImageBrowseUrl: url+'vendors/ckfinder/ckfinder.html?type=Images',
  filebrowserUploadUrl: 		 url+'vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
  filebrowserImageUploadUrl: url+'vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
});

$("input[type='file']").fileinput({
  language: 'es',
  showUpload:false,
  showCaption: false,
  browseLabel: "Subir imagen",
  browseClass: "btn btn-info btn-block",
  allowedFileExtensions: ['jpg','png','gif','jpeg']
});

$('#btnlista').click( function(){
  input = '<div class="input-group"><input type="text" class="form-control" name="lista[]" value="" required><span class="input-group-addon" style="padding:0"><button type="button" class="btn btn-danger quitar"><i class="fa fa-times"></i></button></span></div>';
  $('#items-lista').append(input);
});

$(document).on("click",'.quitar',function(){
  $(this).parent().parent().remove();
});

$('#NwProd').submit( function (event) {
  event.preventDefault(); DescButtons(1);
  CKEDITOR.instances['contenido'].updateElement();
  var datos = new FormData($(this)[0]);
  $.ajax({
    url:'control/blog.insert.php',
    type:'POST',
    data:datos,
    cache:false,
    contentType:false,
    processData:false,
    success:function( response ) {
      var r = JSON.parse(response);
      alerta(r.tit,r.msg,r.tipo,'Aceptar');
    },
    error: function(){ alerta('Error!','No se pudo conectar con el servidor','error','Aceptar'); }
  });
  setTimeout(function () {swal.close();ActButtons(1);location.href=url+'mng-blog';}, 2000);
});
