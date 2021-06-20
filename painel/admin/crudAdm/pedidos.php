<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    include '../../../Config/conexao.php';
    $sql="SELECT DISTINCT cliente.nome AS nomeCliente, cliente.id AS idCliente FROM pedido INNER JOIN cliente ON pedido.idCliente=cliente.id";
    $res=$cn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../../css/Produtos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../../img/ico.png">
    <title>Document</title>
    <link rel="stylesheet" href="editPedidos.css">
</head>
<body>
    <?php while($dado = $res->fetch_array()){ ?>
            <form action="./processos/listPedido.php" method="post">
                   <button name="idCliente" type="submit" value="<?php echo $dado['idCliente'] ?>"><?php echo $dado['nomeCliente'] ?></button>   
            </form>
        <?php } ?>
        <a class="btn-voltar" href="../logado.php">Voltar</a>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->