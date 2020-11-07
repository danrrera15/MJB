<?php
require_once('nw-admin/php/tcpdf/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$sql = "SELECT * FROM tbl_anuncios INNER JOIN tbl_categorias ON cat_id = an_tipo WHERE an_url = '%s' LIMIT 1;";
$con = mysqli_connect("localhost","netwebpr_gpe","fjs63s++clzd","netwebpr_gpe");
$sql = sprintf($sql,$_GET['an']);
$an = mysqli_query($con,$sql);
$a = mysqli_fetch_assoc($an);
mysqli_close ($con);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Netweb');
$pdf->SetTitle('Espectacular en '.$a['an_avenida'].' CODIGO: '.$a['an_codigo']);
$pdf->SetSubject('Detalles de espectacular');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->SetFont('dejavusans', '',12);
$pdf->AddPage('P', 'A4');

$IMGDIR = '../../img/propiedades/';
$head = '<h1 style="text-align:center;">General Publicidad exterior</h1><img src="../../img/propiedades/Logo.png" width="100">';
$pdf->writeHTML($head, true, false, true, false, 'center');
$left ='<table width="500">
          <tr><td><img src="'.$URLCOD.$a['an_img1'].'" width="500" height="100" ></td></tr>
          <tr><td><img src="'.$URLCOD.$a['an_img2'].'" width="500" height="100" ></td></tr>
          <tr><td><img src="'.$URLCOD.$a['an_img2'].'" width="500" height="100" ></td></tr>
        </table>';
$pdf->writeHTML($left, true, false, true, false, 'left');

$right = '<table width="350">
            <tr><td><span><b>Código: </b>'.$a['an_codigo'].'</span><br/></td></tr>
            <tr><td><span><b>Dirección: </b>'.$a['an_direccion'].'</span><br/></td></tr>
          </table>';
$pdf->writeHTML($right, true, false, true, false, 'right');

$pdf->lastPage();
$pdf->Output('Espectacular en '.$a['an_avenida'].'.pdf', 'I');
?>
