<?php
    include '../../Config/conexao.php';
    session_start();
    $id=$_POST['idp'];
    $idUser=$_SESSION['id'];
    $sql="DELETE FROM pedido WHERE idProduto=$id AND idCliente=$idUser";
    $cn->query($sql);
    header('location: ../carrinho.php');
?>