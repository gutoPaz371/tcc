<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->

<?php
include '../../Config/conexao.php';
    session_start();
    $id=$_POST['id'];
    $idUser=$_SESSION['id'];
    $sql="SELECT quantidade as quant, prod from pedido where id=$id";
    $res=mysqli_fetch_assoc($cn->query($sql));
    if($res['prod']==1){
        header('location: ../carrinho.php');
    }else if($res['quant']>1){
        $quant=$res['quant']-1;
        $cn->query("UPDATE pedido SET quantidade=$quant WHERE id=$id");
        header('location: ../carrinho.php');
    }else{
        $sql2="DELETE FROM pedido WHERE id=$id AND idCliente=$idUser";
        $cn->query($sql2);
        header('location: ../carrinho.php');
    }  
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
