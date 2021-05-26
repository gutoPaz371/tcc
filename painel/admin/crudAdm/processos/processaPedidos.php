<?php
    include '../../../../Config/conexao.php';
    session_start();
    $id=$_POST['idp'];
    $sql="SELECT prod, sta FROM pedido WHERE id=$id";
    $res=mysqli_fetch_assoc($cn->query($sql));
    if($res['sta']==0){
        echo 'nao e possivel crl';
    }else if($res['prod']==1){
        $cn->query("UPDATE pedido SET prod=0 WHERE id=$id");
    }else{
        $cn->query("UPDATE pedido SET prod=1 WHERE id=$id");
    }
    header('location:../pedidos.php');
?>