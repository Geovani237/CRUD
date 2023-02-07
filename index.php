<?php include_once "header.php";?>
<?php include_once "mensagens.php"?>
<!-- include_once mesmo que você chame o include mais de uma vez ele não adiciona -->
<!-- inicio conteudo -->
<form class="d-flex justify-content-center align-items-center mb-4" action="inserir-tarefa.php" method="post">
    <div class="form-outline flex-fill">
        <input  id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa">
        <br>
    </div>
    <button type="submit" class="btn btn-info ms-2"><i class="bi bi-plus-circle-fill"></i>ADD</button>
</form>

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Todas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Em execução</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Concluídas<i class="bi bi-0-circle"></i>
        </a>
    </li>
</ul>


<ul class="list-group mb-0">
    <?php
    include "conexao.php";
    $sqlBusca = "select * from t_tarefas";
    $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
    while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
    ?>
        <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">
            <?php echo $umaTarefa['id']; ?> -
            <?php echo $umaTarefa['descricao']; ?> 
            <span>
                <a class='btn btn-lg' href="alterar-tarefa.php?id=<?php echo $umaTarefa['id'] ?>"> <i class="bi bi-pencil-fill"></i></a>
                <a class='btn btn-lg btn-danger' href="excluir-tarefa.php?id=<?php echo $umaTarefa['id'] ?>"><i class="bi bi-trash3-fill"></i></a>
            </span>
        </li>
    <?php
    }
    mysqli_close($conexao);
    ?>
</ul>
<!-- fim conteudo -->
<?php include_once "footer.php";?>