<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    session_start();
    if(isset($_SESSION['erro'])){
        $erro=$_SESSION['erro'];
        $cor=$_SESSION['cor'];
        
    }
    else{
        $cor='black';
        $erro='';
    }
    //session_destroy();
    if(!isset($_SESSION['id'])){
        header('location: ../../');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Estoque</title>
</head>
<body>
    <h1 style="color: green;text-align: center;" >Adicionar Estoque</h1>
    <form action="./processos/processaAddEstoque.php" method="POST" style="text-align: center;">
    <span style="text-align: center;color:<?php echo $cor ?>"><?php echo $erro;?></span><br>
        <input type="text" name=foto placeholder="LINK DA FOTO"><br>
        <input type="text" name="nome" placeholder="NOME"><br>
        <input type="moeda" name="preco" placeholder="VALOR"><br>
        <button type="submit">ADICIONAR</button>
    </form><a href="../logado.php"><button>VOLTAR</button></a>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->