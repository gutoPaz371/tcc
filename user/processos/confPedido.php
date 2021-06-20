<?php
    include '../../Config/conexao.php';
    session_start();
    $iduser=$_SESSION['id'];
    $sql="SELECT pedido.sta AS sta, pedido.prod AS prod FROM pedido INNER JOIN cliente ON pedido.idCliente=cliente.id WHERE cliente.id=$iduser";
    $res=mysqli_fetch_assoc($cn->query($sql));
    if($res['prod']==1){
        echo 'erro crl';
        ?><script>alert('cu')</script><?php
    }else if($res['sta']==1){
        echo 'sta=1';
        $cn->query("UPDATE pedido SET sta=0 where idCliente=$iduser");
    }else{
        echo 'staElse';
        $cn->query("UPDATE pedido SET sta=1 where idCliente=$iduser");
    }header('location:../carrinho.php');
?>