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

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addAdm.css">
    <title>Cadastro | Admin</title>
</head>
<body>
<section class="box">
        <div class="nome"><h1>Cadastrar Admin 🔒</h1></div>
        <div class="formulario">
        <form class="caixa" action="processos/processaAddAdm.php" method="POST" style="text-align: center;">
            <span style="text-align: center;color:<?php echo $cor ?>"><?php echo $erro ?></span><br>
            <input type="text" name="nome" placeholder="NOME"><br>
            <input type="password" name="key" placeholder="SENHA"><br>
            <input type="password" name="confkey" placeholder="CONFIRMA SENHA"><br>
            <button class="btn-adicionar" type="submit">ADICIONAR</button>
        </form>
         </div>
        <div class="informacoes"><h1>Admin Cadastrados</h1>
        </div>
    </section>
    <a class="btn-sair" href="../logado.php">Voltar</a>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->