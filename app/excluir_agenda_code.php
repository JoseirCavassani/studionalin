<?php
  include "connect.php"
?>

<?php
      //recebendo os dados para serem cadastrados
      $id = $_POST["id"];

      //query para inserir novo registro
      $sql = mysql_query ("DELETE FROM agenda WHERE id_agenda = '$id'");
      echo mysql_error();

      print "<script> alert('Informações deletadas!'); window.location = 'cadastrar_agenda'; </script>\n";

?>
