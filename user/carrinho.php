<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->

<?php
include '../Config/conexao.php';
session_start();
$iduser = $_SESSION['id'];
$sql = "SELECT pedido.prod as prod, pedido.sta as sta, produto.id as idp, pedido.quantidade as quant, pedido.id AS id, produto.nome as nome, produto.preco as preco FROM produto INNER JOIN pedido ON pedido.idProduto=produto.id INNER JOIN cliente ON pedido.idCliente=cliente.id WHERE cliente.id=$iduser";
$res = $cn->query($sql);
if (!isset($_SESSION['id'])) {
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
    <link rel="icon" href="./../img/ico.png">
    <link rel="stylesheet" href="../css/carrinho.css">
</head>

<body>
    <!-- inicio menu -->
    <nav id="menu-1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
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
                <th id="Nome">IMAGEM</th>
                <th id="Nome">NOME</th>
                <th id="Nome">PREÇO UNIT</th>
                <th id="Nome">QUANT</th>
                <th id="Nome">PREÇO TOTAL</th>
            </tr>
            <?php
            $info = '';
            $valor_total = 0;
            $itens_total = 0;
            while ($dado = $res->fetch_array()) {
                if ($dado['prod'] == 1) {
                    $status = 'Em Produção';
                } else {
                    $status = 'pedido enviado';
                }
                if ($dado['sta'] == 1) {
                    $corp = 'green';
                    $info = 'Cancelar pedido';
                } else {
                    $corp = 'red';
                    $info = 'Continuar com a compra';
                }
            ?>           
                <tr>
                     <th><img src="../img/<?php echo $dado['idp']; ?>.png"></th>
                    <th><?php echo $dado['nome']; ?></th>
                    <th>R$<?php echo $dado['preco']; ?>.00</th>
                    <th><?php echo $dado['quant'] ?></th>
                    <th>R$<?php echo $dado['preco'] * $dado['quant']; 
                    /* Código referente a soma de valores do pedido */
                    $valor_atual = $dado['preco'] * $dado['quant'];
                    $valor_total = $valor_total + $valor_atual;
                    /* Código referente a soma de itens do pedido */
                    $itens_atual = $dado['quant'];
                    $itens_total = $itens_total + $itens_atual;
                    ?>.00</th>
                    <th>
                        <form action="./processos/remCarrinho.php" method="post">
                            <button onclick="confirmacaoDelete()" class="btn-remover" name="id" value="<?php echo $dado['id'] ?>">Remover</button>
                        </form>
                </tr>           
            <?php } ?>
        </table>
    </section>
    <!--  Final Tabela -->
    <div id="snackbar">Pedido enviado</div>
    <div class="resumo">
        <h1>resumo de venda</h1>
        <div class="box-resumo">
            <h1>Subtotal: R$ <?php echo $valor_total ?> </h1>
            <h1>Total de itens: <?php echo $itens_total ?></h1>
            <form action="./processos/confPedido.php" method="POST">
                <?php
                if($info == ''){

                }else{
                    echo '<div class="btn-confirmar"onclick="confirmacao()" name="idp" value="<?php echo $dado["id"] ?>'. $info .'</div>';
                }
                ?>
                <script>
    function confirmacao(){
        var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
</script>
            </form>
        </div>
    </div>

</body>

</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->