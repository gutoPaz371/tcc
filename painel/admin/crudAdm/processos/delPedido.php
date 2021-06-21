<?php
    include '../../../../Config/conexao.php';
    $idp=$_POST['idp'];
    $sql="UPDATE pedido SET sta=0 WHERE id=$idp;";
    $cn->query($sql);
    header('location: ../pedidos.php');
    
?>