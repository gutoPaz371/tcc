
<?php
    include '../../../Config/conexao.php';
    $res=$cn->query("SELECT * FROM produto");
    session_start();
    if(!isset($_SESSION['id'])){
        header('location: ../../');
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editEstoque.css">
    <title>Editar Estoque</title>
</head>
<style>
    img{
        width: 50px;
        height: 50px;
    }
</style>
<body>
<section class="box">
<div class="nome"><h1 style="text-align: center;">Estoque</h1></div>
    <table class="arquivos">
        <table class="conteudo" border="black">
            <tr>
                <th>NOME</th>
                <th>PRECO</th>
                <th>QUANTIDADE</th>
                <th>FOTO</th>
            </tr>
        <?php while($dado = $res->fetch_array()){ ?>    
            <tr>
                <th><?php echo $dado['nome']; ?></th>
                <th>R$<?php echo $dado['preco']; ?></th>
                <th><?php echo $dado['quant']; ?></th>
                <th><img src="../../../img/<?php echo $dado['id']?>.png"></th>
                <form action="./processos/processaRemEstoque.php" method="POST">
                <th><button name="id" value="<?php echo $dado['id'] ?>" type="submit" style="width: 50px;height: 50px;">Deletar</button></th>
                </form>
                <form action="./processos/processarEditEstoque.php" method="POST">
                <th><button name="id" value="<?php echo $dado['id'] ?>" type="submit" style="width: 50px;height: 50px;">Editar</button></th>
                </form>
            </tr>    
        <?php } ?>
    </table>
    </div>
</section>
    <a class="btn-voltar" href="../logado.php">Voltar</a>
</body>
</html>
