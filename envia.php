<?php
 include "conectphp.php";
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$remetente     = $_POST['from'];
$destinatario    = $_POST['to'];
$corpo = $_POST['body'];

 $sql = "INSERT INTO sms (remetente, destinatario, corpo) VALUES ('$remetente', '$destinatario', '$corpo')";
    mysql_query($sql) or die(error());
    $response = array("success" => true);
    echo json_encode($response);



?>
