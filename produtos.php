<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include './Config/conexao.php';
    $res=$cn->query("SELECT id, nome, preco, foto FROM produto");
    session_start();
    $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    img{
        width: 50px;
        height: 50px;
    }
</style>
<body>
    <h1 style="text-align: center;">Estoque</h1>
    <table border="black">
        <tr>
            <th>NOME</th>
            <th>PRECO</th>
            <th>FOTO</th>
            <th>CARRINHO</th>
        </tr>
        <?php while($dado = $res->fetch_array()){ ?>    
            <tr>
                <th><?php echo $dado['nome']; ?></th>
                <th>R$<?php echo $dado['preco']; ?></th>
                <th><a href="<?php echo $dado['foto'] ?>"><img src="<?php echo $dado['foto'] ?>"></a></th>
                <form action="./user/processos/addCarrinho.php" method="POST">
                <th><button name="id" value="<?php echo $dado['id'] ?>" type="submit" style="width: 50px;height: 50px;">+</button></th>
                </form>
            </tr>    
        <?php } ?>
    </table>
    <a href="index.php"><button>Voltar</button></a>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->