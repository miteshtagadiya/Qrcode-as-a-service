<?php

include "phpqrcode/qrlib.php";
$backColor = "green";
$foreColor = "blue";


	$str = $_POST['str'];
// create a QR Code with this text and display it
QRcode::png($str,$backColor,$foreColor);

}
?>
