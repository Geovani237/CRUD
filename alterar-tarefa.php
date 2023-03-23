<?php include_once "header.php";?>
<h3>Alterar tarefa</h3>

<?php 
    $id = $_GET['id'];
    $descricao = "";
    $responsavel = "";
    $status = "";

include_once "conexao.php";

$sqlBusca = "select * from t_tarefas where id = $id";

$todasTarefas = mysqli_query($conexao, $sqlBusca);

while($umaTarefa = mysqli_fetch_assoc($todasTarefas)){
    $descricao = $umaTarefa['descricao'];
    $responsavel = $umaTarefa['responsavel'];
    $status = $umaTarefa['status'];
}
mysqli_close($conexao);
?>
<form action="confirmar-alteracao.php" method = "post">

    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input name="descricao" value="<?php echo $descricao;?>">
    <input name="responsavel" value="<?php echo $responsavel;?>">
    <input name="status" value="<?php echo $status;?>">
    <button type="submit">Salvar</button>

</form>

<?php include_once "footer.php";?>