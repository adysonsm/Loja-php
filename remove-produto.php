<?php
include "conecta.php";
include "banco-produtos.php";

$id = $_POST['id'];
removeProduto($conexao, $id);

header("Location: produto-lista.php");
die();

if (array_key_exists("removido", $_GET) && $_GET['removido'] == 'true') {?>
    <p class="alert-success">Produto apagado com sucesso.</p>
    <?php }?>

<?php
include "rodape.php";
?>
