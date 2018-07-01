<?php

include "phpqrcode/qrlib.php";
//include "config.php"; 


	$str = $_POST['str'];
// // create a QR Code with this text and display it
// QRcode::png($str);
// QRcode::png($str,QR_ECLEVEL_L);
// QRcode::png($str,QR_ECLEVEL_M);
// QRcode::png($str,QR_ECLEVEL_Q);
QRcode::png($str);

?>
