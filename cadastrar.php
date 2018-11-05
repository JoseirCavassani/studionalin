<!-- MetaTags importantes-->
<meta name="description" content="Maquiagem, Penteados e cursos de maquiagem" />
<meta name="keywords" content="maquiagem, penteados, dia da noiva, cursos de automaquiagem, curso maquiagem, studio nalin, nalin, fialho"/>
<meta name="robots" content="index, follow">
<meta name="googlebot" content="all" />
<meta charset="UTF-8" >

<?php
//Definição do horario da região
date_default_timezone_set('America/Sao_Paulo');
//echo date('Y/m/d H:i:s');
//Variáveis
$email = $_POST['email'];
$nome = $_POST['nome'];
$dt_nascimento = $_POST['dt_nascimento'];
$fone = $_POST['fone'];
$date = date("Y-m-d H:i:s");


//connect banco de dados
$dns = "mysql:host=localhost;dbname=|DB_NAME|";
$usuario = "|USER|";
$senha = "|PASSWORD|";

try {
    $conn = new PDO($dns, $usuario, $senha);

    //query para inserir novo registro
    $query = "insert into |TABLE_NAME|(
        nome, email, dt_nascimento, data_cadastro, fone
        ) values ('$nome', '$email', '$dt_nascimento', '$date', '$fone')";

    $retorno = $conn -> exec($query);
    //echo $retorno;

}

catch(PDOException $e) {
        echo 'Error: '.$e -> getCode().' Mensagem: '.$e -> getMessage();
        //registra erro

}

?>

<?php
print "<script> window.location = 'https://studionalin.com/ebook'; </script>\n";
?>
