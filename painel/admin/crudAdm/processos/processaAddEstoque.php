<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
    include '../../../../Config/conexao.php';
    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $foto=$_POST['foto'];
    if(strlen($preco)==0 || strlen($nome)==0){
        session_start();
        $_SESSION['erro']='Preencha todos os campos!';
        $_SESSION['cor']='red';
        $_SESSION['id']=$_SESSION['id'];
        header('location: ../addEstoque.php');
    }
    else if(strlen($foto)==0){
        session_start();
        $_SESSION['erro']='Voce precisa adicionar o link de foto';
        $_SESSION['cor']='red';
        $_SESSION['id']=$_SESSION['id'];
        header('location: ../addEstoque.php');
    }
    else{
        session_start();
        $cn->query("INSERT INTO produto(nome,preco,foto) VALUES ('$nome',$preco,'$foto')");
        $_SESSION['erro']='Cadastrado...';
        $_SESSION['cor']='green';
        $_SESSION['id']=$_SESSION['id'];
        header('location: ../addEstoque.php');
    }
?>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
