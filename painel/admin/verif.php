

<?php
    session_start();
    $op=$_POST['op'];
    if($op==1){
        $_SESSION['id']=$_SESSION['id'];
        header('location:crudAdm/addAdm.php');
    }else if($op==2){
        $_SESSION['id']=$_SESSION['id'];
        header('location:crudAdm/addEstoque.php');
    }else if($op==3){
        $_SESSION['id']=$_SESSION['id'];
        header('location:crudAdm/editEstoque.php');
    }else if($op==4){
        $_SESSION['id']=$_SESSION['id'];
        header('location:crudAdm/pedidos.php');
    }else if(isset($_SESSION['id'])){
        header('location:crudAdm/editAdm.php');
    }
    
?>

