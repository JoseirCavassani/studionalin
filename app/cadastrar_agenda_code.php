<?php
  include "connect.php"
?>

<?php
      //recebendo os dados para serem cadastrados		
      $nome = $_POST["nome"];
      $data = $_POST["data"];
      $local = $_POST["local"];
      $evento = $_POST["evento"];
      $cadastrante = $_POST["cadastrante"];
      $responsavel = $_POST["responsavel"];
      $servico = $_POST["servico"];
      $pacote = $_POST["pacote"];
      $valor = $_POST["valor"];
      $tipo = $_POST["tipo"];

      //query para inserir novo registro
      $sql = mysql_query ("INSERT INTO agenda (nome, data, local, evento, data_cadastro, cadastrante, responsavel, servico, pacote, valor) 
      VALUES ('$nome', '$data', '$local', '$tipo', '$datahora', '$cadastrante', '$responsavel', '$servico', '$pacote', '$valor')");
      echo mysql_error();

      print "<script> alert('Informações registradas.'); window.location = 'cadastrar_agenda'; </script>\n";

?>