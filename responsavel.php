<?php 
$responsavel = $_POST['responsavel'];

include_once "conexao.php";

$sqlGravar = "insert into t_tarefas(responsavel) values('$responsavel')";

mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);

header("location: index.php?msgInserir=inserir")
?>