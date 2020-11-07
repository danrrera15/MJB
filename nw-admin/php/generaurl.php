<?php
require_once "conexion.class.php";
$con = new DBManager;
$link = $con->conectar();

$sql_urlP = "UPDATE productostfv SET descripcion = '%s', url = '%s' WHERE idproductos = %d";
$sql_prds = "SELECT idproductos, descripcion,url FROM productostfv WHERE borrado = 0";
$sql_urlC = "UPDATE categoriastfv SET url = '%s' WHERE id_cat = %d";
$sql_cats = "SELECT id_cat, nombre,url FROM categoriastfv";

// $cats = mysqli_query($link,$sql_cats);
// while ($c = mysqli_fetch_assoc($cats)) {
//   print_r($c);
//   echo "<br>";
//   $url = makeURL($c['nombre']);
//   $sql = sprintf($sql_urlC,$url,$c['id_cat']);
//   mysqli_query($link,$sql);
// }
// $cats = mysqli_query($link,$sql_cats);
// while ($c = mysqli_fetch_assoc($cats)) {
//   print_r($c);
//   echo "<br>";
// }

$prds = mysqli_query($link,$sql_prds);
while ($p = mysqli_fetch_assoc($prds)) {
  // $name = utf8_encode($p['descripcion']);
  $name = $p['descripcion'];
  $url = makeURL($name);
  $sql = sprintf($sql_urlP,$name,$url,$p['idproductos']);
  mysqli_query($link,$sql);
  // print_r($p); echo "$name $url";
  // echo "<br>";
}
$prds = mysqli_query($link,$sql_prds);
while ($p = mysqli_fetch_assoc($prds)) {
  print_r($p);
  echo "<br>";
}

mysqli_close($link);

function makeURL($texto) {
  $chr = "/[^a-zA-Z0-9-]+/";
  $acl = ['á','é','í','ó','ú','ñ','Á','É','Í','Ó','Ú','Ñ',' '];
  $vcl = ['a','e','i','o','u','n','A','E','I','O','U','N','-'];
  $url = trim($texto);
  $url = str_replace($acl,$vcl,$url);
  $url = preg_replace($chr,'',$url);
  $url = strtolower($url);
  return $url;
}
?>
