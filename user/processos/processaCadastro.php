<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->

<?php 
    include '../../Config/conexao.php';
    session_start();
    $user=$_POST['user'];
    $emai=$_POST['email'];
    $pass=$_POST['pass'];
    $pass1=$_POST['pass1'];
    if($pass!=$pass1){
        $_SESSION['erro']='Senhas Nao coicidem!!';
        $_SESSION['cor']='red';
        header("location:../cadastro.php");
    }
    if(strlen($pass)==0 || strlen($pass1)==0 || strlen($emai)==0 || strlen($user)==0){
        $_SESSION['erro']='Campos Vazios';
        $_SESSION['cor']='red';
        header("location:../cadastro.php");
    }else{
        $sql="INSERT INTO cliente(nome,email,senha) VALUES ('$user','$emai','$pass')";
        $cn->query($sql);
        $_SESSION['erro']='Cadastrado';
        $_SESSION['cor']='green';
        header("location:../login.php");
    }
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
