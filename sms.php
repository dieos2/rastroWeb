
<?php
include 'conectphp.php';
/*
This demo shows how to handle requests from SMS Gateway with full UTF-8 support and send reply SMS back
*/

//setup PHP UTF-8 stuff
setlocale(LC_CTYPE, 'en_US.UTF-8');
mb_internal_encoding("UTF-8");
mb_http_output('UTF-8');


//read parameters from HTTP Get URL
$phone = $_GET["phone"];
$smscenter = $_GET["smscenter"];
$text_utf8 = rawurldecode($_GET["text"]);
$lat = substr($text_utf8,5,11);
$long= substr($text_utf8,22,12);
$speed = substr($text_utf8,41,6);
$bat = substr($text_utf8,68,1);
$signal = substr($text_utf8,77,1); 
$imei = substr($text_utf8,85,15);
$data = substr($text_utf8,47,14);
//if parameters are not present in HTTP url, they can be also present in HTTP header
$headers = getallheaders();
if (empty($phone)) {
        $phone = $headers["phone"];
}
if (empty($smscenter)) {
        $smscenter = $headers["smscenter"];
}
if (empty($text_utf8)) {
        $text_utf8 = rawurldecode($headers["text"]);
}

//create reply SMS
//$reply_utf8 = mb_strtoupper($text_utf8); // mare reply message uppercased input message

//write reply to HTTP header
//$reply_header = rawurlencode($reply_utf8);
//header('Content-Type: text/html; charset=utf-8');
//header("text: $reply_header"); //if you don't want reply sms, comment out this this line
$sql = "INSERT INTO tbl_localizacao (numero_equipamento, numeo_central, lat,long,speed,bat,signal,imei,data)
VALUES ('$phone', '$smscenter', '$lat','$long','$speed','$bat','$signal','$imei','$data')

 
					
					
 mysql_query($sql);

 

  mysql_close($conect);


// Debug outputs:


?>