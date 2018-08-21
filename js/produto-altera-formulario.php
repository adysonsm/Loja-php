<?php 
include( "cabecalho.php");
include("conecta.php");
include("banco-produto.php");
$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
?>

    
    
    <h1>Altera Produto</h1>


    
    <form action="produto-altera-formulario.php" method="post" >
        
        
        <table class="table">
            <tr> 
                <td>Nome :</td>
                <td><input class="form-control" "form"type="text" name= "nome"></td>
            </tr>
            <tr>
                <td>Preco:</td>
                <td><input class="form-control" type = "number" name = "preco"></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea name="descricao" class="form-control"></textarea></td>
            
            </tr>
         <tr>
            <td></td>
              <td><input type="checkbox" name="usado" value="true"> Usado</td>
        </tr>
            <tr>
            <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                <?php foreach($categorias as $categoria) : ?>
                    <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                <?php endforeach ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><button class= "btn btn-primary" type=submit value="cadastrar">Alterar</button><td>
            </tr> 
        
         </table>
    </form>


<?php include("rodape.php") ?>    
