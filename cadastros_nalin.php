<!DOCTYPE html>
<html>
<head>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <meta http-equiv="refresh" content="30">

</head>
<body>
  <div class="table table-striped">
   <table class="table">
<?php
echo "<tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Aniversário</th>
        <th>Data Cadastro</th>
      </tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "studion4_web";
$password = "cUt#s]Vr2mbb";
$dbname = "studion4_nalin";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT distinct nome, email, fone, dt_nascimento, data_cadastro FROM noticias where email <> '' order by data_cadastro desc");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

</body>
</html>
