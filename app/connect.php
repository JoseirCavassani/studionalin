  <?php
   //conexão db
    $host = "localhost";
    $user = "|USER_NAME|";
    $pass = "|PASSWORD|";
    $banco = "|DB_NAME|";
    $conexao = @mysql_connect($host, $user , $pass) or die(mysql_error());
    mysql_set_charset('UTF8', $conexao);
    mysql_select_db($banco) or die(mysql_error());
  ?>

<?php
// definindo a data e hora
	date_default_timezone_set('America/Sao_Paulo');
  $datahora=date('Y-m-d H:i:s');
?>