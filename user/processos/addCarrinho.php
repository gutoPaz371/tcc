<?php
    include '../../Config/conexao.php';
    session_start();
    $idProduto=$_POST['id'];
    $idUser=$_SESSION['id'];
    $sql="INSERT INTO pedido(idCliente,idProduto,sta) VALUES ($idUser,$idProduto,0)";
    $cn->query($sql);
?>