
<?php
    include '../../../../Config/conexao.php';
    session_start();
    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $tipo=$_POST['tipo'];
    $quant=$_POST['quant'];
    $des=$_POST['descricao'];
    if(strlen($preco)==0 || strlen($nome)==0 || strlen($tipo)==0 || strlen($quant)==0){
        $_SESSION['erro']='Preencha todos os campos!';
        $_SESSION['cor']='red';
        header('location: ../addEstoque.php');
    }
    else{
        $cn->query("INSERT INTO produto(nome,preco,tipo,quant,descricao) VALUES ('$nome',$preco,'$tipo',$quant,'$des')");
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

