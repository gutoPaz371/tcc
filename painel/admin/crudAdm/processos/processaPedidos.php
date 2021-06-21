<?php
    include '../../../../Config/conexao.php';
    session_start();
    $id=$_SESSION['id'];
    $sql="UPDATE pedido set prod=1 where idCliente=$id";
    $cn->query($sql);
    header('location: ../pedidos.php');
?>