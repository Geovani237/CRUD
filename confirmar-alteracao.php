<?php 
include_once "conexao.php";

$id = $_POST['id'];
$descricao = $_POST['descricao'];

$sqlAlterar = "update t_tarefas set descricao = '$descricao' where id = $id";
// aspas simples no descricao, por que na tabela o campo descricao é varchar

mysqli_query($conexao, $sqlAlterar);
mysqli_close($conexao);

header("location: index.php?msg=alteracao")
?>