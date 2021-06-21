
<?php
    include '../../../../Config/conexao.php';
    session_start();
    $nome=$_POST['nome'];
    $key=$_POST['key'];
    $confKey=$_POST['confkey'];
    
    if(strlen($key)==0 || strlen($confKey)==0 || strlen($nome)==0){
        $_SESSION['erro']='Preencha todos os campos!';
        $_SESSION['cor']='red';
        $_SESSION['id']=$_SESSION['id'];
        header('location: ../addAdm.php');
    }else if(strlen($key)<5){
        $_SESSION['erro']='Senha nao pode ter menos de 5 digitos!!!';
        $_SESSION['cor']='red';
        $_SESSION['id']=$_SESSION['id'];
        header('location: ../addAdm.php');
    }
    else if($key==$confKey){
        $cn->query("INSERT INTO adm(senha,nome) VALUES ('$key','$nome')");
        $_SESSION['erro']='Cadastrado...';
        $_SESSION['cor']='green';
        $_SESSION['id']=$_SESSION['id'];
        header('location: ../addAdm.php');
    }else{
        $_SESSION['erro']='Senhas nao sao iguais';
        $_SESSION['cor']='red';
        $_SESSION['id']=$_SESSION['id'];
        header('location: ../addAdm.php');
    }
    
?>

