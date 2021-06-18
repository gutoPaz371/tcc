<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    session_start();
    if(isset($_SESSION['id'])){
        include "../../../Config/conexao.php";
        $id=$_SESSION['id'];
        $sql="SELECT nome, senha FROM adm WHERE id=$id";
        $res=mysqli_fetch_assoc($cn->query($sql));
    }else{
        header('location:../../../');
    }
    if(isset($_SESSION['erro'])){
        $erro=$_SESSION['erro'];
        $cor=$_SESSION['cor'];
    }else{
        $erro='';
        $cor='black';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editAdm.css">
    <title>Editar conta</title>
</head>
<body>
<script>
    function del(){
        <?php 
            $_SESSION['erro']='';
            $_SESSION['cor']='' ;
        ?>
    }
</script>
<section class="box">
    <form style="text-align: center;" action="./processos/updateAdm.php" method="POST">
        <span id='er' style="color:<?php echo $cor ?>;" ><?php echo $erro ?></span>
        <div class="nome"><h1>Editar Conta</h1></div>
    <div class="arquivos">    
        <label for="">Nome</label><br>
        <input name="nome" type="text" value="<?php echo $res['nome'] ?>" ><br>
        <label for="">Senha Antiga</label><br>
        <input name="senha" type="password" ><br>
        <label for="">Nova senha</label><br>
        <input name="senha1" type="password" ><br>
        <label for="">Confirme Nova senha</label><br>
        <input name="senha2" type="password" ><br>
        <!--<div class="btn-editar">-->
            <button class="btn-editar" type="submit">Editar</button>
        <!--</div>-->
    </div>
    </form>
</section>
    <a class="btn-sair" href="../logado.php"><!--<button onclick="del(this)">-->Voltar<!--</button>--></a>   
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
