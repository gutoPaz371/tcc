<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include '../../../../Config/conexao.php';
    $id=$_POST['id'];
    $sql="SELECT * FROM produto WHERE id=$id";
    $res=mysqli_fetch_assoc($cn->query($sql));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="./updateEdit.php" enctype="multipart/form-data" method="POST" style="text-align: center;">
        <H1>EDITAR PRODUTO</H1>
        <label for="">Imagem</label><br>
        <input type="file" name="arquivo"><br>
        <label for="">Nome</label><br>
        <input type="text" name="nome" value="<?php echo $res['nome'] ?>"><br>
        <label for="">Preco</label><br>
        <input type="text" name="preco" value="<?php echo $res['preco'] ?>"><br>
        <button name="id" value="<?php echo $res['id'] ?>" >Editar</button>
    </form>
    <a href="../editEstoque.php"><button>Voltar</button></a>
</body>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
