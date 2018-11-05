
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/favicon.ico" />

    <title>Cadastrar Agenda</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../css/estilo.css" rel="stylesheet">


  </head>

      <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 700px;
        margin: 0 auto;
      }
    </style>

  <?php
    include "connect.php";
  ?>

  <body>

    <nav class="navbar navbar-pink bg-pink texto-branco">
      <a class="navbar-brand texto-branco" href="#">
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
        Cadastrar Agenda
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="painel" class="texto-branco">Voltar</a>
        </li>
      </ul>
    </nav>

<div class="container">    
  <div class="row">

  <div class="card-login">
    <div class="card">
      <div class="card-header text-center">
        Cadastro
      </div>
      <div class="card-body">
      <div>
      	<form class="form-group" action="cadastrar_agenda_code" method="POST">

            <label>Nome da Cliente</label>
            <input type="name" id="name" class="form-control" placeholder="Nome Cliente" required autofocus name="nome">

            <label>Data do Serviço</label>
            <input type="datetime-local" id="data" class="form-control" placeholder="Data" required autofocus name="data">

            <label>Local</label>
            <input type="map" id="local" class="form-control" placeholder="Local onde será prestado o serviço" required autofocus name="local">

            <div class="form-group">
              <label>Tipo de Tarefa</label>
              <select name='tipo' class="form-control" required="">
                <option value="">Selecione o tipo</option>
                <option>Teste</option>
                <option>Evento</option>
              </select>
            </div>

            <div class="form-group">
              <label>Serviço</label>
              <select name='servico' class="form-control" required="">
                <option value="">Selecione o serviço</option>
                <option>Maquiagem</option>
                <option>Penteado</option>
                <option>Cursos</option>
              </select>
            </div>

            <div class="form-group">
              <label>Pacote</label>
              <select name='pacote' class="form-control" required="">
                <option value="">Selecione o pacote</option>
                <option>Safira</option>
                <option>Ruby</option>
                <option>Diamante</option>
              </select>
            </div>

            <label>Valor</label>
            <input type="text" id="valor" class="form-control" placeholder="Valor do serviço utilize ponto" required autofocus name="valor">


            <label>Responsável</label>
            <input type="name" id="responsavel" class="form-control" placeholder="Responsável pelo Serviço" required autofocus name="responsavel">

            <button class="btn btn-rosa completo" type="submit">Cadastrar</button>

      	</form>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- pesqisa -->
<br>
<br>
<br>
<br>
<div>
  <h1 class="h3 mb-3 font-weight-normal">Buscar Agenda</h1>

	<form action="cadastrar_agenda" method="POST">
		<div class="col-md-2">
			<!-- campo de pesquisa -->
			<h4 class="box-title"></h4>
			<input type="number" name="id" required="required" class="form-control" placeholder="Digite ID da Agenda...">
		</div>
		<!-- Botão de pesqisa -->
		<div class="col-md-2">
			<button type="submit" class="btn btn-rosa completo">Buscar</button>
		</div>
	</form>
</div>
      <?php
      //Variável que recebe a busca
      $id = $_POST["id"];
      ?>
<br>
<br>
<br>
<div>
  <h1 class="h3 mb-3 font-weight-normal">Registro</h1>
  <div class="table table-responsive table-bordered table-striped">
    <table class="table">
      <tr>
        <th>Nome Cliente</th>
        <th>Data</th>
        <th>Endereço</th>
        <th>Evento/Tipo</th>
        <th>Responsável</th>
        <th>Data Cadastro</th>
        <th>Cadastrante</th>
        <th>Exluir</th>
      </tr>
      <tbody>
        <?php
          $sql = "SELECT * FROM agenda WHERE id_agenda = '$id' ";
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

              echo "<tr>";
	              echo "<td>$nome</td>";
	              echo "<td>$data</td>";
	              echo "<td>$local</td>";
	              echo "<td>$evento</td>";
	              echo "<td>$responsavel</td>";
	              echo "<td>$data_cadastro</td>";
	              echo "<td>$cadastrante</td>";
		          echo "<form action='excluir_agenda_code' method='POST' class='sidebar-form'>";
		          echo "<input type='hidden' name='id' value='$id'>";
		          echo "<td><button type='submit' id='search-btn' class='btn btn-rosa completo'><i class='fa fa-'></i> Excluir</td>";
              echo "</tr>";

            }
        ?>
      </tbody>
    </table>
  </div>
</div>


  </body>

</html>
