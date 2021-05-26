<?php
    include '../../Config/conexao.php';
    session_start();
    $iduser=$_SESSION['id'];
    $idpedido=$_POST['idp'];
    $sql="SELECT sta FROM pedido WHERE id=$idpedido";
    $sta=mysqli_fetch_assoc($cn->query($sql));
    $sta=$sta['sta'];
    if($sta==1){
        $cn->query("UPDATE pedido SET sta=0 WHERE id=$idpedido");
    }else{
        $cn->query("UPDATE pedido SET sta=1 WHERE id=$idpedido");
    }header('location:../carrinho.php');
    
?>