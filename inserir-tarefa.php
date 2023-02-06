<?php 
$tarefa = $_POST['tarefa'];


//conexão com Banco de Dados 

include "conexao.php";


$sqlGravar = "insert into t_tarefas(descricao) values('$tarefa')";


mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);
?>