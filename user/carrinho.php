<?php
    include '../Config/conexao.php';
    session_start();
    $iduser=$_SESSION['id'];
    $sql="SELECT pedido.id AS idp, produto.nome as nome, produto.preco as preco, produto.foto as foto FROM produto INNER JOIN pedido ON pedido.idProduto=produto.id INNER JOIN cliente ON pedido.idCliente=cliente.id WHERE cliente.id=$iduser";
    $res=$cn->query($sql);
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
    <table border="black">
        <tr>
            <th>NOME</th>
            <th>PRECO</th>
            <th>FOTO</th>
        </tr>
        <?php while($dado = $res->fetch_array()){ ?>
            <tr>
                <th><?php echo $dado['nome']; ?></th>
                <th><?php echo $dado['preco']; ?></th>
                <th><img src="<?php echo $dado['foto']; ?>" ></th>
                <th><form action="./processos/remCarrinho.php" method="post"><button name="idp" value="<?php echo $dado['idp'] ?>">DEL</button></form></th>
            </tr>
        <?php } ?>
    </table>
</body>
</html>