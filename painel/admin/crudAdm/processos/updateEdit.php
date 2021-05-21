<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include "../../../../Config/conexao.php";
    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $foto=$_POST['foto'];
    $id=$_POST['id'];
    $sql="UPDATE produto SET nome='$nome',preco=$preco,foto='$foto' WHERE id=$id";
    $cn->query($sql);
    header("location: ../editEstoque.php");
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
