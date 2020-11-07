<?php 
require_once "nw-admin/php/conexion.class.php";
require_once "nw-admin/mng-banner/model/banner.class.php";
require_once "nw-admin/mng-diapositivas/model/diapositivas.class.php";
require_once "nw-admin/mng-productos/model/productos.class.php";
require_once "nw-admin/mng-blog/model/blog.class.php";
require_once "nw-admin/mng-maquinaria/model/maquinaria.class.php";


/*=============================================*/
/*     INICIA SECCION DE SLIDER EN HOME	       */
/*=============================================*/

$BannerClass = new banner();
$banner = $BannerClass->get();



/*=============================================*/
/*     INICIA SECCION DE DIÁPOSITIVAS EN HOME  */
/*=============================================*/

$DiaposClass = new diapositivas();
$diapos = $DiaposClass->get();



/*=============================================*/
/*     INICIA SECCION DE SOMOS  			   */
/*=============================================*/

#somos
$file = file_get_contents("somos.json");
$somos = json_decode($file, true);
$contenido = $somos['contenido'];
#Mision
$file_mision = file_get_contents("mision.json");
$mision = json_decode($file_mision,true);
$contenido_mision = $mision['mision'];
#Vision
$file_vision = file_get_contents("vision.json");
$vision = json_decode($file_vision,true);
$contenido_vision = $vision['vision'];


/*=============================================*/
/*     INICIA SECCION DE PRODUCTOS  		   */
/*=============================================*/

#Carga de internas en dropdown de catalogo
$ProdsClass = new productos();
$prods = $ProdsClass->get();	 

#Obtener datos de cada producto
$producto = $ProdsClass->getByUrl($_GET['prod']); //ver .htaccess 'prod'
$lista = explode(',',$producto['prod_lista']);


/*=============================================*/
/*     INICIA SECCION DE BLOG  				   */
/*=============================================*/
$BlogClass = new blog();
$blogs = $BlogClass->get();

#Obtener contenido de cada blog
$blog_contenido = $BlogClass->getByUrl($_GET['prod']);


/*=============================================*/
/*     INICIA SECCION DE MAQUINARIA  	       */
/*=============================================*/
$MaqClass = new maquinaria();
$maquinaria = $MaqClass->get();
?>