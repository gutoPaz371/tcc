<?php
    include '../Config/conexao.php';
    session_start();
    $iduser=$_SESSION['id'];
    $sql="SELECT idProduto from pedido where idCliente=$iduser";
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
<body>
    <table border="black">
        <tr>
            <th>NOME</th>
            <th>PRECO</th>
            <th>FOTO</th>
        </tr>
        <?php while($dado = $res->fetch_array()){ ?>
            <tr>
                <th><?php echo $dado['idProduto']; ?></th>
            </tr>
        <?php } ?>
    </table>
</body>
</html>