
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/favicon.ico" />

    <title>Agenda</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../css/estilo.css" rel="stylesheet">

    <meta http-equiv="refresh" content="300">

  </head>

  <?php
    include "connect.php";
  ?>

  <body>

    <nav class="navbar navbar-pink bg-pink texto-branco">
      <a class="navbar-brand texto-branco" href="#">
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
          Agenda
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="painel" class="texto-branco">Voltar</a>
        </li>
      </ul>
    </nav>


<div>
  <div class="table table-responsive table-bordered table-striped">
    <table class="table">
      <tr>
        <th>Codigo</th>
        <th>Tipo Tarefa</th>
        <th>Data</th>
        <th>Nome Cliente</th>
        <th>Endereço</th>
        <th>Serviço</th>
        <th>Pacote</th>
        <th>Valor</th>
        <th>Responsável</th>
        <th>Data Cadastro</th>
        <th>Cadastrante</th>
        <th>#</th>
      </tr>
      <tbody>
        <?php
          $sql = "SELECT * FROM agenda WHERE nome is not null and concluido = 0 order by data asc";
            echo mysql_error();
            $resultado = mysql_query($sql);

            while($dados =  mysql_fetch_array($resultado)) {
            $nome = $dados['nome'];
            $data = $dados['data'];
            $local = $dados['local'];
            $evento = $dados['evento'];
            $data_cadastro = $dados['data_cadastro'];
            $cadastrante = $dados['cadastrante'];
            $responsavel = $dados['responsavel'];
            $id = $dados['id_agenda'];
            $servico = $dados['servico'];
            $valor = $dados['valor'];
            $pacote = $dados['pacote'];

              echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$evento</td>";
                echo "<td>$data</td>";
                echo "<td>$nome</td>";
                echo "<td>$local</td>";
                echo "<td>$servico</td>";
                echo "<td>$pacote</td>";
                echo "<td>$valor</td>";
                echo "<td>$responsavel</td>";
                echo "<td>$data_cadastro</td>";
                echo "<td>$cadastrante</td>";
                echo "<td>
                        <form action='finalizar_agenda_code' method='POST' class='sidebar-form' onClick=\"javascript:return confirm('Deseja realmente concluir?');\">
            		          <input type='hidden' name='id' value=$id>
                          <input type='submit' class = 'btn btn-rosa completo' value='Concluir'>
                        </form>
                      </td>";
              echo "</tr>";
            }
        ?>
      </tbody>
    </table>
  </div>
</div>

  </body>

</html>
