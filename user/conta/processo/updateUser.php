<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    include '../../../Config/conexao.php';
    session_start();
    $user=$_POST['user'];
    $email=$_POST['email'];
    $cll=$_POST['celular'];
    $pass=$_POST['pass'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    if(strlen($user)==0||strlen($email)==0||strlen($pass)==0||strlen($pass1)==0||strlen($pass2)==0){
        $_SESSION['erro']="Complete todos os Campos!!!";
        $_SESSION['cor']="red";
        header("location: ../");
    }else if($pass1!=$pass2){
        $_SESSION['erro']="Senhas Nao coicidem";
        $_SESSION['cor']="red";
        header("location: ../");
    }else{
        $id=$_SESSION['id'];
        $sql="SELECT * FROM cliente WHERE id=$id";
        $res=mysqli_fetch_assoc($cn->query($sql));
        if($pass==$res['senha']){
            $cn->query("UPDATE cliente SET nome='$user',email='$email',senha='$pass1',celular='$cll' WHERE id=$id");
            $_SESSION['erro']="Usuario Atualizado!!!";
            $_SESSION['cor']="green";
            header("location: ../");
        }
    }
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
