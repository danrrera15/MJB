<?php
$con = new DBManager;
$c = $con->conectar();
$sql = "SELECT * FROM tbl_estados ORDER BY etd_nombre ASC";
$estados = array();
$result = mysqli_query($c,$sql);
while ($row = mysqli_fetch_assoc($result)) {
  $estados[] = $row;
}
mysqli_close($c);
?>
