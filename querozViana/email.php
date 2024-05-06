<?php
// Parametros -- Armazenamento de dados informados pelo usuario

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
//enviar
  //enviar para queirozVIanna
  $emailenviar = "queirozvianna@dominio.com.br";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
  //formato do email -> html
  $headers = 'MINE-version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $nome <$email>';
  $enviarEmail = mail($destino, $assunto, $arquivo, $headers);
  if($enviarEmail){
    $feedback = "E-mail enviado com sucesso!";
    echo "<meta http-equiv='refresh' content'10;URL=index.php'>";
  }else {
    $feedback = "ERRO AO ENVIAR O EMAIL!retornou 1";
    echo "";
  }


?>