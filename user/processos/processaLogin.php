<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->

<?php
    include "../../Config/conexao.php";
    session_start();
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if(strlen($user)==0||strlen($pass)==0){   
        $_SESSION['erro']='Campos em Branco';
        $_SESSION['cor']='red';
        header('location:../login.php');
    }else{
        $sql="SELECT * from cliente where nome='$user' and senha='$pass'";
        $res=mysqli_fetch_assoc($cn->query($sql));
        if($res){
            $_SESSION['id']=$res['id'];
            $_SESSION['user']=$user;
            header('location: ../../');
        }else{
            $_SESSION['erro']='Campos em Branco';
            $_SESSION['cor']='red';
            header('location:../login.php');
        }
    }
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
