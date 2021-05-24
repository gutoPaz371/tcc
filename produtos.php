<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include './Config/conexao.php';
    $res=$cn->query("SELECT id, nome, preco, foto FROM produto");
    session_start();
    print_r($_SESSION);
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
        width: 200px;
        height: 150px;
        text-align: center;
    }
    #raiz{
        background-color: red;
        margin: 20px;
        float: left;
        width: 200px;
        height: 300px;
    }
    #ft{
        width: 150px;
        height: 150px;
        text-align: center;
    }
</style>
<body>
    <h1 style="text-align: center;">Estoque</h1>
        <?php while($dado = $res->fetch_array()){ ?>    
            <div id="raiz">
                <p style="text-align: center;"><?php echo $dado['nome'] ?></p>
                <div id="ft"><img src="<?php echo $dado['foto'] ?>"></div><br>
                <div id="inf"><p>VALOR</p><P>R$ <?php echo $dado['preco'] ?></P></div>
                <div><form action="./user/processos/addCarrinho.php" method="POST">
                <button name="idp" value="<?php echo $dado['id'] ?>" type="submit" style="width: 200px;height: 50px;">+</button>
                </form></div>
            </div> 
        <?php } ?>
    <a href="index.php"><button style="text-align: left;">Voltar</button></a>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->