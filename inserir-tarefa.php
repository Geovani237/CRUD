<?php 
$tarefa = $_POST['tarefa'];
$responsavel = $_POST['responsavel'];
$status = $_POST['status'];

//conexão com Banco de Dados 

include "conexao.php";


$sqlGravar = "insert into t_tarefas(descricao,responsavel,status) values('$tarefa','$responsavel','$status')";

// tentar inserir dois itens de tarefa para fazer ao mesmo tempo ex insert into t_tarefas(descricao, responsavel) values ('$tarefa', '$responsavel');


mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);

header("location: index.php?msgInserir=inserir")
?>