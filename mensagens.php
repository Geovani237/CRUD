<?php 
$msg = $_GET['msg'] ?? "";
$msgExcluir = $_GET['msgExcluir'] ?? "";
$msgInserir = $_GET ['msgInserir'] ?? "";

if($msg =="alteracao"){
    echo "<div class='alert alert-primary alert-info'>Tarefa alterada com sucesso</div>";
} else if($msgExcluir =="excluido"){
    echo "<div class='alert alert-danger alert-info'>Tarefa excluida com sucesso</div>";
} else if($msgInserir == "inserir") {
    echo "<div class='alert alert-success alert-info'>Tarefa inserida com sucesso</div>";

}
?>