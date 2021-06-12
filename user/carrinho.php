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
    <link rel="stylesheet" href="../css/rodape.css">
          <!-- CDN Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
            $status='pedido enviado';
        }
        if($dado['sta']==1){
            $corp='green';
            $info='Cancelar pedido';
        }else{
            $corp='red';
            $info='Confirmar';
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
            <form action="./processos/remCarrinho.php" method="post">
                <button class="btn-remover" name="id" value="<?php echo $dado['id'] ?>">Remover</button>
            </form>
        </tr>
    <?php } ?>  
</table>
</section>
<!--  Final Tabela -->

<div class="resumo">
<h1>resumo de venda</h1>
    <div class="box-resumo">
        <h1>VALOR TOTAL:</h1>
        <h1>TOTAL ITENS:</h1>
        <form action="./processos/confPedido.php" method="POST">
                <button class="btn-confirmar"name="idp" value="<?php echo $dado['id'] ?>" style="background-color:<?php echo $corp ?>;"><?php echo $info ?></button>
    </form>
    </div>
</div>

<!--  Início rodapé -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4" style="background-color: #c1c1c170;">

<!-- Footer Links -->
<div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

            
            <h5 class="font-weight-bold text-uppercase mb-4">Sobre Nós</h5>
            <p>Somos uma empresa especialista em artigos de festas, fundada em 2018. Levando alegria para você e sua festa com todo nossa dedicação, amor e carinho. <br> Já proporcionamos momentos felizes de várias pessoas e famílias, venha ser mais uma!</p>
            <!-- <a href="Empresa.php" id="link-saber-mais">Clique Aqui para Saber Mais!</a> -->
            <a class="btn-saber-mais" href="Empresa.php"><button type="button" class="btn btn-info">Clique Aqui para Saber Mais!</button></a>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mb-4">Páginas</h5>

            <ul class="list-unstyled">
                <li>
                    <p>
                        <a class="link-footer" href="index.php">Home</a>
                    </p>
                </li>
                <li>
                    <p>
                        <a class="link-footer" href="user/login.php">Carrinho</a>
                    </p>
                </li>
                <li>
                    <p>
                        <a class="link-footer" href="painel/index.php" target="blank">Painel</a>
                    </p>
                </li>
                 <li>
                    <p>
                        <a class="link-footer" href="produtos.php">Produtos</a>
                    </p>
                </li>
                <li>
                    <p>
                        <a class="link-footer" href="empresa.php">Sobre Empresa</a>
                    </p>
                </li>
            </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

            <!-- Contact details -->
            <h5 class="font-weight-bold text-uppercase mb-4">Onde nos encontrar?</h5>

            <ul class="list-unstyled">
                <li>
                    <p>
                        <i class="fas fa-home mr-3"></i> R. Antônio Pontes, 1211 - Jardim Mirai, Santa Isabel do Pará - PA, 68790-000 
                    </p>
                </li>
                <li>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> gabriel.m.louzada@gmail.com
                    </p>
                </li>
                <li>
                    <p>
                        <i class="fas fa-phone mr-3"></i> (91) 98438-2681
                    </p>
                </li>
            </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

            <!-- Social buttons -->
            <h5 class="font-weight-bold text-uppercase mb-4">Saiba Mais</h5>
            <div class="div-icon-1">
                <!-- Instagram -->
                <a href="https://www.instagram.com/maniadefestasip/" type="button" target="blank" class="img-redes-sociais">
                    <img src="../img/instagram.png" alt="" width="40px">
                </a>
                <br>
                <!-- Whatsapp -->
                <a href="https://api.whatsapp.com/send?phone=5591984382681" target="blank" type="button" class="img-redes-sociais">
                    <img src="../img/whatsapp.png" alt="" width="40px">
                </a>
                <br>
                <!-- Mapas -->
                <a href="https://www.google.com/maps/place/R.+Ant%C3%B4nio+Pontes,+1211+-+Jardim+Mirai,+Santa+Isabel+do+Par%C3%A1+-+PA,+68790-000/@-1.3005153,-48.1630375,17z/data=!3m1!4b1!4m5!3m4!1s0x92a45157e89124c7:0x8f9c45c7486945a5!8m2!3d-1.3005153!4d-48.1608488?hl=pt-BR" target="blank" type="button" class="img-redes-sociais">
                <img src="../img/google-maps.png" alt="" width="40px">
            </a>
            </div>
            
        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">Copyright © 2021 <a href="#"> Mania de Festa</a> - Todos os direitos reservados

</div>
<!-- Copyright -->

</footer>
<!-- Fim Footer -->

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
<script src="javascript/jquery-3.6.0.min.js"></script>
<!-- CDN Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
