<?php include "../php/header.php" ?>
<link href="<?=$urlBase?>vendors/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>

  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">

            <div class="card-header">
              <strong class="card-title">Diapositivas</strong>
              <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#NwBan">
                <i class="fa fa-plus"></i> Nueva diapositiva
              </button>
            </div>

            <div class="card-body">
              <table id="tbldiap" class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
										<th>Imagen</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div><!-- .animated -->
  </div><!-- .content -->

  <!-- Modal de agregar usuario -->
  <div class="modal fade" id="NwBan" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mediumModalLabel">Agregar nueva dispositiva</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="NwBanner">
          <div class="modal-body">
            <div class="form-group">
              <label class="control-label mb-1">Diapositiva</label>&nbsp;&nbsp;<span class="badge badge-warning">800px X 800px</span>
              <input name="escritorio" class="imagen" type="file" required>
            </div>
          </div>
          <div class="modal-footer">
            <button id="btncncl1" type="reset" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
            <button id="btnsbmt1" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Aceptar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal de editar usuario -->
  <div class="modal fade" id="EdBan" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mediumModalLabel">Editar Diapositiva</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="EdBanner">
          <div class="modal-body">
            <input type="hidden" id="idban" name="id" value="">
            <div class="form-group" id="preveddes">
              <label class="control-label mb-1">Diapositiva</label> <span class="badge badge-warning">800px X 800px</span>
              <input name="escritorio" id="eddesk" type="file" required>
            </div>
          </div>
          <div class="modal-footer">
            <button id="btncncl2" type="reset" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
            <button id="btnsbmt2" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Aceptar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

	<script src="<?=$urlBase?>vendors/fileinput/js/fileinput.js" type="text/javascript"></script>
	<script src="<?=$urlBase?>vendors/fileinput/js/locales/es.js" type="text/javascript"></script>
  <script src="<?=$urlBase?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
  <script src="js/diapositivas.js"></script>

<?php include "../php/footer.php" ?>
