

<?php
    include '../../Config/conexao.php';
    session_start();
    $idProduto=$_POST['idp'];
    $idUser=$_SESSION['id'];
    $quant="SELECT pedido.sta as sta, pedido.idProduto as idp, idCliente as idUser, quantidade as quant, pedido.id as id from pedido where idProduto=$idProduto and idCliente=$idUser";
    $resQ=mysqli_fetch_assoc($cn->query($quant));
    $tipo='produtos';
    $sta=$resQ['sta'];
    if($sta==1){
        header('location:../carrinho.php');
    }else
    
    if(!isset($_SESSION['id'])){
        header('location: ../login.php');
    }
    else if($resQ){
        if($resQ['idUser']==$idUser && $resQ['idp']==$idProduto){
            $x=$resQ['quant']+1;
            $id=$resQ['id'];
            $upSql="UPDATE pedido SET quantidade=$x WHERE id=$id";
            $cn->query($upSql);
            header('location: ../carrinho.php');
        }else{
            $sql="INSERT INTO pedido(idCliente,idProduto,sta) VALUES ($idUser,$idProduto,0)";
            $cn->query($sql);
            header('location: ../carrinho.php');
        }
    }else{
        $sql="INSERT INTO pedido(idCliente,idProduto,sta) VALUES ($idUser,$idProduto,0)";
        $cn->query($sql);
        header('location: ../carrinho.php');
    }
    
?>
