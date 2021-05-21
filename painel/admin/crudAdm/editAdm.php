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
    <form style="text-align: center;" action="./processos/updateAdm.php" method="POST">
        <span id='er' style="color:<?php echo $cor ?>;" ><?php echo $erro ?></span>
        <h1>Editar Conta</h1>
        <label for="">Nome</label><br>
        <input name="nome" type="text" value="<?php echo $res['nome'] ?>" ><br>
        <label for="">Senha Antiga</label><br>
        <input name="senha" type="password" ><br>
        <label for="">Nova senha</label><br>
        <input name="senha1" type="password" ><br>
        <label for="">Confirme Nova senha</label><br>
        <input name="senha2" type="password" ><br>
        <button type="submit">Editar</button>
    </form>
    <a href="../logado.php"><button onclick="del(this)">Voltar</button></a>
    
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
