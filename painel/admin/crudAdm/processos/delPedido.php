<?php
    include '../../../../Config/conexao.php';
    session_start();
    $id=$_SESSION['id'];
    $sql="UPDATE pedido SET sta=0 WHERE idCliente=$id;";
    $cn->query($sql);
    header('location: ../pedidos.php');
    
?>