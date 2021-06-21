<?php
    include '../../../../Config/conexao.php';
    session_start();
    $id=$_SESSION['id'];
    $sql="UPDATE pedido SET prod=0 WHERE idCliente=$id;";
    $sql2="UPDATE pedido SET sta=0 WHERE idCliente=$id;";
    $cn->query($sql);
    $cn->query($sql2);
    header('location: ../pedidos.php');
    
?>