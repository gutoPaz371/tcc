<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    session_start();
    if(isset($_SESSION['erro'])){
        $erro=$_SESSION['erro'];
        $cor=$_SESSION['cor'];
    }else{
        $cor='black';
        $erro='';
    }
    if(!isset($_SESSION['id'])){
        header('location: ../../');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addAdm.css">
    <title class="">Cadastro | Admin</title>
</head>
<body>
    <h1 style="color: green;text-align: center;" >CADASTRAR-ADM</h1>
    <form action="processos/processaAddAdm.php" method="POST" style="text-align: center;">
    <span style="text-align: center;color:<?php echo $cor ?>"><?php echo $erro ?></span><br>
        <input type="text" name="nome" placeholder="NOME"><br>
        <input type="password" name="key" placeholder="SENHA"><br>
        <input type="password" name="confkey" placeholder="CONFIRMA SENHA"><br>
        <button type="submit">ADICIONAR</button>
    </form><a href="../logado.php"><button>VOLTAR</button></a>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->