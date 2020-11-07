<?php include "../php/header.php"; ?>

  <div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <strong class="card-title">Productos</strong>
              <a class="btn btn-primary btn-sm pull-right" href="nuevo.php">
                <i class="fa fa-plus"></i> Nuevo Producto
              </a>
            </div>
            <div class="card-body">
              <table id="tblproductos" class="table table-striped table-bordered align-middle">
                <thead class="thead-dark text-center">
                  <tr>
										<th>ID</th>
										<th>Producto</th>
                    <th>Imagen</th>
                    <th></th>
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

  <script src="<?=$urlBase?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?=$urlBase?>vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
  <script src="js/productos.js"></script>

<?php include "../php/footer.php" ?>
