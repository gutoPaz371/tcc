<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include '../../../../Config/conexao.php';
    $id=$_POST['id'];
    $cn->query("DELETE FROM produto WHERE id=$id");
    unlink("../../../../img/".$id.".png");
    header('location: ../editEstoque.php');
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
