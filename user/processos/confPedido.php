<?php
    include '../../Config/conexao.php';
    session_start();
    $iduser=$_SESSION['id'];
    $idpedido=$_POST['idp'];
    $sql="SELECT sta, prod FROM pedido WHERE id=$idpedido";
    $res=mysqli_fetch_assoc($cn->query($sql));
    if($res['prod']==1){
        echo 'erro crl';
        ?><script>alert('cu')</script><?php
    }else if($res['sta']==1){
        $cn->query("UPDATE pedido SET sta=0 WHERE id=$idpedido");
    }else{
        $cn->query("UPDATE pedido SET sta=1 WHERE id=$idpedido");
    }header('location:../carrinho.php');
    
?>