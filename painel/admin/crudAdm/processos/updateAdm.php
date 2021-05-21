<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    include "../../../../Config/conexao.php";
    session_start();
    $nome=$_POST['nome'];
    $pass=$_POST['senha'];
    $pass1=$_POST['senha1'];
    $pass2=$_POST['senha2'];
    $id=$_SESSION['id'];
    if(strlen($nome)==0 || strlen($pass)==0 || strlen($pass1)==0 || strlen($pass2)==0){
        $_SESSION['erro']="Campos em branco";
        $_SESSION['cor']='red';
        header("location:../editAdm.php");
    }
    if($pass1!=$pass2){
        $_SESSION['erro']="Senhas Nao coicidem";
        $_SESSION['cor']='red';
        header("location:../editAdm.php");
    }
    $sql="SELECT senha from adm where id=$id";
    $res=mysqli_fetch_assoc($cn->query($sql));
    if($pass!=$res['senha']){
        $_SESSION['erro']="Senha incorreta!!!";
        $_SESSION['cor']='red';
        header("location:../editAdm.php");
    }else{
        $update="UPDATE adm set nome='$nome', senha='$pass1' where id=$id";
        $cn->query($update);
        $_SESSION['erro']="Adm Atualizado!!!";
        $_SESSION['cor']='Green';
        header("location:../editAdm.php");
        
    }
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->