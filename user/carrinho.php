<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->

<?php
    include '../Config/conexao.php';
    session_start();
    $iduser=$_SESSION['id'];
    $sql="SELECT pedido.quantidade as quant, pedido.idProduto AS idp, produto.nome as nome, produto.preco as preco FROM produto INNER JOIN pedido ON pedido.idProduto=produto.id INNER JOIN cliente ON pedido.idCliente=cliente.id WHERE cliente.id=$iduser";
    $res=$cn->query($sql);
    
?>
<!DOCTYPE html>
<h1 style="text-align: center;">CARRINHO</h1>
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
    button{
        width: 50px;
        height: 50px;
    }
</style>
<body>
    <table border="black">
        <tr>
            <th>NOME</th>
            <th>PRECO</th>
            <th>QUANT</th>
            <th>FOTO</th>
            <th>VALOR TOTAL</th>
        </tr>
        <?php while($dado = $res->fetch_array()){ ?>
            <tr>
                <th><?php echo $dado['nome']; ?></th>
                <th>R$<?php echo $dado['preco']; ?>.00</th>
                <th><?php echo $dado['quant'] ?></th>
                <th><img src="../img/<?php echo $dado['idp']; ?>.png" ></th>
                <th>R$<?php echo $dado['preco']*$dado['quant'];?>.00</th>
                <th><form action="./processos/remCarrinho.php" method="post"><button style="width: 50px;
                height: 50px;" name="idp" value="<?php echo $dado['idp'] ?>">-</button></form>
            </tr>
        <?php } ?>  
    </table>
    <a href="../"><button>Voltar</button></a>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
