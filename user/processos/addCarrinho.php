<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->

<?php
    include '../../Config/conexao.php';
    session_start();
    $idProduto=$_POST['idp'];
    $idUser=$_SESSION['id'];
    $quant="SELECT idCliente as idUser, quantidade as quant, id from pedido where idProduto=$idProduto";
    $resQ=mysqli_fetch_assoc($cn->query($quant));
    $tipo='produtos';
    #print_r($_SESSION);
    #print_r($_POST);
    if(isset($_SESSION['tipo'])){
        $tipo=$_SESSION['tipo'];
    }
    if(!isset($_SESSION['id'])){
        header('location: ../login.php');
    }
    else if($resQ){
        if($resQ['idUser']==$idUser){
            $x=$resQ['quant']+1;
            $id=$resQ['id'];
            $upSql="UPDATE pedido SET quantidade=$x WHERE id=$id";
            $cn->query($upSql);
            header('location: ../../'.$tipo.'.php');
        }else{
            $sql="INSERT INTO pedido(idCliente,idProduto,sta) VALUES ($idUser,$idProduto,0)";
            $cn->query($sql);
            header('location: ../../'.$tipo.'.php');
        }
    }else{
        $sql="INSERT INTO pedido(idCliente,idProduto,sta) VALUES ($idUser,$idProduto,0)";
        $cn->query($sql);
        header('location: ../../'.$tipo.'.php');
    }
    
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->