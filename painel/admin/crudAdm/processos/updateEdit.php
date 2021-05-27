<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include "../../../../Config/conexao.php";
    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $id=$_POST['id'];
    $quant=$_POST['quant'];
    $sql="UPDATE produto SET nome='$nome',preco=$preco,quant=$quant WHERE id=$id";
    $cn->query($sql);
    if ((isset($_FILES['arquivo']))){
        $tmp_name = $_FILES["arquivo"]["tmp_name"];
        $name=$id;
        move_uploaded_file($tmp_name, "../../../../img/$name".'.png');
    }
    header("location: ../editEstoque.php");
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
