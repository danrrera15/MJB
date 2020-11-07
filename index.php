<!DOCTYPE html>
<html lang="esp-MX">
<?php  
	session_start();
	error_reporting(0);
	$urlBase = 'http://127.0.0.1/mjb2/';
	if (isset($_GET['url'])) $actual = $_GET['url'];
	else $actual = 'home'; 
?>
<head>
	<?php  include 'seo.php'; ?>
</head>
<body>
<?php  
	include 'header.php';
	if (file_exists($actual.".php")) include ($actual.".php");
	else $actual ='home';
	include 'footer.php';
?>

<!-- PRELOADER -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>
<!-- PRELOADER -->

<!-- FILE JS REQUIRED -->

<!-- JavaScript Libraries -->
<script src="<?=$urlBase?>lib/jquery/jquery.min.js"></script>
<script src="<?=$urlBase?>lib/jquery/jquery-migrate.min.js"></script>
<script src="<?=$urlBase?>lib/popper/popper.min.js"></script>
<script src="<?=$urlBase?>lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=$urlBase?>lib/easing/easing.min.js"></script>
<script src="<?=$urlBase?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?=$urlBase?>lib/scrollreveal/scrollreveal.min.js"></script>
<script src="<?=$urlBase?>js/enviarform.js" type="text/javascript"></script>

<!-- Contact Form JavaScript File -->
<!-- <script src="contactform/contactform.js"></script> -->

<!-- Template Main Javascript File -->
<script src="<?=$urlBase?>js/main.js"></script>
</body>
</html>