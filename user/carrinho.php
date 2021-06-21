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
    <link rel="stylesheet" href="../css/footer-white.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
                <th id="Nome">STATUS</th>
                <th id="Nome">PREÇO UNIT</th>
                <th id="Nome">QUANT</th>
                <th id="Nome">PREÇO TOTAL</th>
            </tr>
            <?php
            $info = 'carrrinho vazio';
            $valor_total = 0;
            $itens_total = 0;
            while ($dado = $res->fetch_array()) {
                if ($dado['prod'] == 1) {
                    $status = 'Confirmado';
                } else {
                    $status = 'Aguardando confirmação';
                }
                if ($dado['sta'] == 1) {
                    $info = 'Pedido confirmado✔';
                } else {
                    $info = 'Confirmar pedido';
                }
            ?>           
                <tr>
                     <th><img src="../img/<?php echo $dado['idp']; ?>.png"></th>
                     <th><?php echo $dado['nome']; ?></th>
                     <th><?php echo $status ?></th>
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
                        <form action="./processos/addCarrinho2.php" method="post">
                            <button onclick="confirmacaoDelete()" class="btn-adicionar-remover" name="idp" value="<?php echo $dado['idp'] ?>">+</button>
                        </form>
                        <form action="./processos/remCarrinho.php" method="post">
                            <button onclick="confirmacaoDelete()" class="btn-adicionar-remover" name="id" value="<?php echo $dado['id'] ?>">-</button>
                        </form>
                </tr>           
            <?php } ?>
        </table>
    </section>
    <!--  Final Tabela -->
    <?php
        $resBT=mysqli_fetch_assoc($cn->query($sql));
        if($resBT['sta']==1){
            $block='disabled';
            $corP='green';
        }else{
            $block='';
            $corP='red';
        }
    ?>
    <div class="resumo">
        <form action="./processos/confPedido.php" method="post">
            <button class="btn-confirm-pedido" <?php echo $block; ?> style="background-color: <?php echo $corP; ?>;" onclick="confirmacao()"><?php echo $info ?></button>
        </form>
        <h1>resumo de venda</h1>
        <div class="box-resumo">
            <h1>Subtotal: R$ <?php echo $valor_total ?> </h1>
            <h1>Total de itens: <?php echo $itens_total ?></h1>
            </form>
    
        </div>
    </div>
    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="../Empresa.php">Informações da Empresa</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5591984851975&text=Ol%C3%A1%2C%20preciso%20de%20ajuda%20para%20escolher%20os%20produtos"target="blank">Contato</a></li>
            </ul>
            <p class="footer-copyright">Copyright © 2021 Mania de Festa - Todos os direitos reservados</p>
        </div>
        <div class="footer-social">
            <a href="##" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/maniadefestasip/" target="blank" class="social-icons"><i class="fa fa-instagram"></i></a>
            <a href="##" class="social-icons"><i class="fa fa-youtube"></i></a>
            <a href="##" class="social-icons"><i class="fa fa-twitter"></i></a>
        </div>
    </footer>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->