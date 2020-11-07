<?php
error_reporting(0);
require_once("conexion.class.php");
$con = new DBManager;
$c = $con->conectar();
$etd = $_GET['estado'];
$sql = "SELECT mnp_id, mnp_nombre FROM tbl_municipios WHERE mnp_etd = %d && mnp_activo = 1 ORDER BY mnp_nombre ASC";
$sqlM = sprintf($sql,$etd);
$result = mysqli_query($c,$sqlM);
$municipios = array();
while ( $row = mysqli_fetch_assoc($result) ) {
  $municipios[] = utf8_encode($row['mnp_nombre']);
}
mysqli_close($c);
echo json_encode($municipios);
?>
