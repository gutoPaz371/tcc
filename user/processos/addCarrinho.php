<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->

<?php
    include '../../Config/conexao.php';
    session_start();
    $idProduto=$_POST['id'];
    $idUser=$_SESSION['id'];
    echo $idUser;
    $quant="SELECT idCliente as idUser, quantidade as quant, id from pedido where idProduto=$idProduto";
    $resQ=mysqli_fetch_assoc($cn->query($quant));
    if($resQ){
        if($resQ['idUser']==$idUser){
            $x=$resQ['quant']+1;
            $id=$resQ['id'];
            $upSql="UPDATE pedido SET quantidade=$x WHERE id=$id";
            $cn->query($upSql);
            #header('location: ../../produtos.php');
        }else{
            $sql="INSERT INTO pedido(idCliente,idProduto,sta) VALUES ($idUser,$idProduto,0)";
            $cn->query($sql);
            #header('location: ../../produtos.php');
        }
    }else{
        $sql="INSERT INTO pedido(idCliente,idProduto,sta) VALUES ($idUser,$idProduto,0)";
        $cn->query($sql);
        #header('location: ../../produtos.php');
    }
    
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
