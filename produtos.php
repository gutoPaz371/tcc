<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include './Config/conexao.php';
    $res=$cn->query("SELECT id, nome, preco FROM produto");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/Produtos.css">
</head>
<body>
    <!-- inicio menu -->
    <nav id="menu-1">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="user/carrinho.php">Carrinho</a></li>
            </ul>
    </nav>
    <!--  final menu -->

        <?php while($dado = $res->fetch_array()){ ?>    
            <div id="raiz">
                <p style="text-align: center;"><?php echo $dado['nome'] ?></p>
                <div id="ft"><img src="./img/<?php echo $dado['id'] ?>.png"></div><br>
                <div id="inf"><p>VALOR</p><P>R$ <?php echo $dado['preco'] ?></P></div>
                <div><form action="./user/processos/addCarrinho.php" method="POST">
                <button name="idp" value="<?php echo $dado['id'] ?>" type="submit" style="width: 200px;height: 50px;">Comprar</button>
                <button name="idp" value="<?php echo $dado['id'] ?>" type="submit" style="width: 200px;height: 30px; margin-bottom: 20px;">+</button>
                </form></div>
            </div> 
        <?php } ?>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->