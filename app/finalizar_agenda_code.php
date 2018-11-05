<?php
  include "connect.php"
?>

<?php
      //recebendo os dados para serem Atualizados
      $id = $_POST["id"];

      echo $id;

      //query para atualizar agenda
      $sql = mysql_query ("UPDATE agenda SET concluido = 1, data_conclusão = '$datahora' WHERE id_agenda = '$id'");
      echo mysql_error();

      print "<script> alert('Informações Atualizadas!'); window.location = 'agenda'; </script>\n";
?>
