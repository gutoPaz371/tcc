<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->

<?php
    include '../Config/conexao.php';
    session_start();
    $iduser=$_SESSION['id'];
    $sql="SELECT pedido.prod as prod, pedido.sta as sta, produto.id as idp, pedido.quantidade as quant, pedido.id AS id, produto.nome as nome, produto.preco as preco FROM produto INNER JOIN pedido ON pedido.idProduto=produto.id INNER JOIN cliente ON pedido.idCliente=cliente.id WHERE cliente.id=$iduser";
    $res=$cn->query($sql);
    if(!isset($_SESSION['id'])){
        header('location: login.php');
    }
    
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="../css/carrinho.css">

</head>
<body>
<!-- inicio menu -->
<nav id="menu-1">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../produtos.php">Produtos</a></li>
        </ul>
</nav>
<!--  final menu -->

<!--  Inicio Tabela -->
<section class="box">
    <table class="infos">
        <tr id="container">
            <th id="Nome" >STATUS</th>
            <th id="Nome" class="nome">NOME</th>
            <th id="Nome">PRECO</th>
            <th id="Nome">QUANT</th>
            <th id="Nome">FOTO</th>
            <th id="Nome">VALOR TOTAL</th>
        </tr>
    <?php while($dado = $res->fetch_array()){ 
        if($dado['prod']==1){
            $status='Em Produção';
        }else{
            $status='Em analise';
        }
        if($dado['sta']==1){
            $corp='green';
            $info='Cancelar pedido';
        }else{
            $corp='red';
            $info='Confirmar pedido';
        }
        ?>
        <tr>
            <th><?php echo $status ?></th>
            <th class="nome"><?php echo $dado['nome']; ?></th>
            <th>R$<?php echo $dado['preco']; ?>.00</th>
            <th><?php echo $dado['quant'] ?></th>
            <th><img src="../img/<?php echo $dado['idp']; ?>.png" ></th>
            <th>R$<?php echo $dado['preco']*$dado['quant'];?>.00</th>
            <th>
            <form action="./processos/confPedido.php" method="POST">
                <button class="btn-confirmar"name="idp" value="<?php echo $dado['id'] ?>" style="background-color:<?php echo $corp ?>;"><?php echo $info ?></button>
            </form>
            <form action="./processos/remCarrinho.php" method="post">
                <button class="btn-remover" name="id" value="<?php echo $dado['id'] ?>">Remover</button>
            </form>
        </tr>
    <?php } ?>  
</table>
</section>
<!--  Final Tabela -->



<script type="text/javascript">
var cont = 1;
setInterval(function() {
    document.getElementById('radio' + cont).checked = true;
    cont++;
    if (cont > 4) {
        cont = 1;
    }
}, 5000);
</script>
</body>

</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
