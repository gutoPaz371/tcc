<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    include '../../../../Config/conexao.php';
    session_start();
    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $tipo=$_POST['tipo'];
    if(strlen($preco)==0 || strlen($nome)==0 || strlen($tipo)==0){
        $_SESSION['erro']='Preencha todos os campos!';
        $_SESSION['cor']='red';
        header('location: ../addEstoque.php');
    }
    else{
        $cn->query("INSERT INTO produto(nome,preco,tipo) VALUES ('$nome',$preco,'$tipo')");
        $_SESSION['erro']='Cadastrado com sucesso!';
        $_SESSION['cor']='green';
        if(isset($_FILES['arquivo'])){
            $res=mysqli_fetch_assoc($cn->query("SELECT max(id) as id FROM produto")); 
            $tmp_name = $_FILES["arquivo"]["tmp_name"];
            $name=$res['id'];
            move_uploaded_file($tmp_name, "../../../../img/$name".'.png');
        }else{
            $_SESSION['erro']='Defina todos os campos!';
            $_SESSION['cor']='red';
            header('location: ../addEstoque.php');
        }
        header('location: ../addEstoque.php');
    }
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
