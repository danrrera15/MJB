<?php
	session_start();
	if(empty($_SESSION['user'])) echo '<script>location.href = "../../index.php";</script>';
  include "../../functions/header.php";
	require_once '../../functions/conexion.class.php';
	require_once '../model/slider.class.php';
	$slide = new slider();
  $s = $slide->getById($_GET['p']);
  $desk = '../../../img/'.$s['slide_desk'];
  $movi = '../../../img/'.$s['slide_movil'];
?>
<style>
  .kv-file-zoom {
    display: none;
    visibility: hidden;
  }
  .alert-success {
    color: #155724 !important;
    background-color: #d4edda !important;
    border-color: #c3e6cb !important;
  }
  .alert-danger {
    color: #721c24 !important;
    background-color: #f8d7da !important;
    border-color: #f5c6cb !important;
  }
  /* .file-preview-image {
    width: 100% !important;
  } */
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.3/css/fileinput.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.3/js/fileinput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.3/js/locales/es.js"></script>
<div class="box box-info" id="from-view">
	<section class="content-header">
		<h1> Editar Slider <small></small></h1><hr>
		<ol class="breadcrumb">
			<li><a href="../../inicio.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li class="active">Editar Slider</li>
		</ol>
	</section>

  <form id="frm-nslider">
    <input type="hidden" name="id" value="<?=$_GET['p']?>">
  	<section>
      <div class="row">
        <div class="col-md-6" style="padding:20px;">
          <div class="alert"></div>
        </div>
        <div class="col-md-6 text-right" style="padding:20px;">
          <button type="reset" class="btn btn-danger" onclick="history.back();"><i class="fa fa-close"></i>&nbsp;Cancelar</button>
          <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>&nbsp;Actualizar Slider</button>
        </div>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="titulo" value="<?=$s['slide_titulo']?>" placeholder="Titulo corto" required><br>
        <textarea name="texto" class="form-control" rows="8" placeholder="Pequeño resumen"><?=$s['slide_texto']?></textarea>
  		</div>
      <div class="col-md-6">
        <h4>Imagen para escritorio</h4>
        <label class="label labe-warning"></label>
        <input type="file" class="file" name="desk" id="desk" value="">
        <h4>Imagen para movil</h4>
        <label class="label labe-warning"></label>
        <input type="file" class="file" name="movil" id="movil" value="">
      </div>
  	</section>
  </form>
</div>

<script type="text/javascript">
  $("#desk").fileinput({
    language: "es",
    showCaption: false,
    showUpload: false,
    browseLabel: "Imagen...",
    browseIcon: " <i class=\"fa fa-image\" style=\"color:#fff;\"></i>",
    browseClass: "btn btn-primary",
    showRemove: false,
    uploadAsync: true,
    overwriteInitial: true,
    initialPreviewAsData: true,
    allowedFileExtensions:['jpg','jpeg','png'],
    initialPreview: ['<?=$desk?>']
	});

  $("#movil").fileinput({
    language: "es",
    showCaption: false,
    showUpload: false,
    browseLabel: "Imagen...",
    browseIcon: " <i class=\"fa fa-image\" style=\"color:#fff;\"></i>",
    browseClass: "btn btn-primary",
    showRemove: false,
    uploadAsync: true,
    overwriteInitial: true,
    initialPreviewAsData: true,
    allowedFileExtensions:['jpg','jpeg','png'],
    initialPreview: ['<?=$movi?>']
	});

  $('#frm-nslider').submit(function (event) {
    event.preventDefault();
    $('.btn').attr('disabled','disabled');
    var form = new FormData($(this)[0]);
    $.ajax({
      url:'../control/slider.update.php',
      type:'POST',
      data:form,
      cache:false,
      processData:false,
      contentType:false,
      success:function(data){
        if (data == 1) {
          $('.alert').html('Datos guardados correctamente');
          $('.alert').addClass('alert-success');
        } else {
          $('.alert').html('Hubo un error al guardar slider, inténtelo más tarde');
          $('.alert').addClass('alert-danger');
        }
        setTimeout(function () { history.back(); }, 2000);
      },
      error:function(){ console.log('Error al conectar con el servidor'); }
    });
  });
</script>

<?php include "../../functions/footer.php"; ?>
