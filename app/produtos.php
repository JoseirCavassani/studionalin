
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/favicon.ico" />

    <title>Produtos</title>

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

    <h1>Produtos</h1>
    <a href="painel">Voltar</a><br>


<div>
  <div class="table table-responsive table-bordered table-striped">
    <table class="table">
      <tr>
        <th>Codigo</th>
        <th>Produto</th>
        <th>Tipo Produto</th>
        <th>Valor</th>
      </tr>
      <tbody>
        <?php
          $sql = "SELECT * FROM produtos order by tipo_produto Asc";
            echo mysql_error();
            $resultado = mysql_query($sql);

            while($dados =  mysql_fetch_array($resultado)) {
            $id_produtos = $dados['id_produto'];
            $produto = $dados['ds_produto'];
            $tipo_produto = $dados['tipo_produto'];
            $valor = $dados['valor'];

              echo "<tr>";
              echo "<td>$id_produtos</td>";
              echo "<td>$produto</td>";
              echo "<td>$tipo_produto</td>";
              echo "<td>$valor</td>";

            }
        ?>
      </tbody>
    </table>
  </div>
</div>

  </body>

</html>
