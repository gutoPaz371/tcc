
<?php
    session_start();
    include '../Config/conexao.php';
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="SELECT id, nome, senha FROM adm Where nome='$user' AND senha='$pass'";
    $res=mysqli_fetch_assoc($cn->query($sql));
    if($res){
        $_SESSION['id']=$res['id'];
        header("location:admin/logado.php");
    }else{
        $_SESSION['erro']=1;
        header("location:loginAdm/");
    } print_r($_POST);
?>

