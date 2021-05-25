<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    include '../../../Config/conexao.php';
    $sql="SELECT cliente.nome AS user, produto.nome, produto.preco, pedido.quantidade, pedido.sta as sta, produto.preco*pedido.quantidade AS total
    FROM cliente
    INNER JOIN pedido ON cliente.id=pedido.idCliente
    INNER JOIN produto ON pedido.idProduto=produto.id";
    $res=$cn->query($sql);
    $x=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../../css/Produtos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php while($dado = $res->fetch_array()){ 
        if($x['sta']==1){
            $st='COMFIRMADO';
        }else if($x['sta']==0){
            $st='PENDENTE';
        }
            ?>    
            <div id="raiz">
                <!--<div id="ft"><img src="../../../img/<?php #echo $dado['id'] ?>.png"></div><br>-->
                <div id="inf"><p><?php echo $dado['user'] ?></P></div>
                <p style="text-align: center;"><p>PEDIDO: <?php echo $dado['nome'] ?></p>
                <div id="inf"><p>VALOR R$ <?php echo $dado['preco'] ?></P></div>
                <div id="inf"><p id="st">STATUS: <?php echo $st; ?></p></div>
                <div><form action="./user/processos/addCarrinho.php" method="POST">
                </form></div>
            </div> 
        <?php } ?>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->