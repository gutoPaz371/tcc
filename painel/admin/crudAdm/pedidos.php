<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    include '../../../Config/conexao.php';
    $sql="SELECT pedido.prod as prod, pedido.id as idp, produto.id as id, cliente.nome AS user, produto.nome, produto.preco, pedido.quantidade, pedido.sta as sta, produto.preco*pedido.quantidade AS total
    FROM cliente
    INNER JOIN pedido ON cliente.id=pedido.idCliente
    INNER JOIN produto ON pedido.idProduto=produto.id";
    $res=$cn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../../css/Produtos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/../Projeto1/tcc/css/edit_pedidos.css">
</head>
<body>

<!-- inicio menu -->
<nav id="menu-1">
        <ul>
            <li><a href="/../Projeto1/tcc/index.php">Home</a></li>
        </ul>
</nav>
<!--  final menu -->

    <?php while($dado = $res->fetch_array()){ 
        if($dado['prod']==1){
            $corp='green';
            $texto='PRODUZINDO';
        }else{
            $corp='red';
            $texto='PENDENTE';
        }
        if($dado['sta']==1){
            $st='CONFIRMADO';
        }else{
            $st='PENDENTE';
        }
            ?>    
            <div id="raiz">
                <!--<div id="ft"><img src="../../../img/<?php #echo $dado['id'] ?>.png"></div><br>-->
                <div id="inf"><p>CLIENTE: <?php echo $dado['user'] ?></P></div>
                <p style="text-align: center;"><p>PEDIDO: <?php echo $dado['nome'] ?></p>
                <img src="../../../img/<?php echo $dado['id'] ?>.png">
                <div id="inf"><p>VALOR R$ <?php echo $dado['preco'] ?></P></div>
                <div id="inf"><p>QUANTIDADE<?php echo $dado['preco'] ?></P></div>
                <div id="inf"><p id="st">STATUS: <?php echo $st ?></p></div>
                <div><form action="./processos/processaPedidos.php" method="POST">
                    <button name="idp" value="<?php echo $dado['idp'] ?>" style="background-color: <?php echo $corp ?>;"><?php echo $texto ?></button>
                </form></div>
            </div> 
        <?php } ?>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->