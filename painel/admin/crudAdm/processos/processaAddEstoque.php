<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    include '../../../../Config/conexao.php';
    session_start();
    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $tipo=$_POST['tipo'];
    if(strlen($preco)==0 || strlen($nome)==0 || strlen($tipo)==0){
        $_SESSION['erro']='Defina todos os campos!';
        $_SESSION['cor']='red';
        header('location: ../addEstoque.php');
    }else if(!isset($_FILE['arquivo'])){
            $_SESSION['erro']='Adicine uma foto!';
            $_SESSION['cor']='red';
            header('location: ../addEstoque.php');
    }
    else{
        $cn->query("INSERT INTO produto(nome,preco,tipo) VALUES ('$nome',$preco,'$tipo')");
        $_SESSION['erro']='Cadastrado...';
        $_SESSION['cor']='green';
        $res=mysqli_fetch_assoc($cn->query("SELECT max(id) as id FROM produto")); 
        $tmp_name = $_FILES["arquivo"]["tmp_name"];
        $name=$res['id'];
        move_uploaded_file($tmp_name, "../../../../img/$name".'.png');
        header('location: ../addEstoque.php');
    }
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
