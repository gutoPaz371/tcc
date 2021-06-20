<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include './Config/conexao.php';
    $res=$cn->query("SELECT id, nome, preco, descricao FROM produto");
    session_start();
    $_SESSION['tipo']='produtos';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
      <meta charSset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mania de Festa</title>
      <link rel="icon" href=".//img/ico.png">
      <link rel="stylesheet" href="css/produtos.css">
      <link rel="stylesheet" href="css/rodape.css">
      <!-- CDN Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<!-- inicio menu -->
<nav id="menu-1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="user/carrinho.php">Carrinho</a></li>
        </ul>
</nav>
<!--  final menu -->

        <link rel="stylesheet" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">

<!-- inicio prateleira -->
<main>
           <div class="prateleira">
               <ul class="prateleira ul">
                    <?php while($dado = $res->fetch_array()){ ?>
                        <li><h1><?php echo $dado['nome'] ?></h1><img src="./img/<?php echo $dado['id']?>.png"><br><?php echo $dado['descricao'] ?><h2>R$ <?php echo $dado['preco'] ?>.00</h2><form action="./user/processos/addCarrinho.php" method="POST">
            <button  onclick="confirmacao()" name="idp" value="<?php echo $dado['id'] ?>" type="submit" class="botao-ver-prateleira">Adicionar ao Carrinho</button>
            </form></li>
                    <?php } ?>
               </ul>
           </div>
</main>
 <!--final prateleira-->

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
                        <a class="link-footer" href="painel/index.php" target="blank">Painel</a>
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
                    <img src="img/instagram.png" alt="" width="40px">
                </a>
                <br>
                <!-- Whatsapp -->
                <a href="https://api.whatsapp.com/send?phone=5591984382681" target="blank" type="button" class="img-redes-sociais">
                    <img src="img/whatsapp.png" alt="" width="40px">
                </a>
                <br>
                <!-- Mapas -->
                <a href="https://www.google.com/maps/place/R.+Ant%C3%B4nio+Pontes,+1211+-+Jardim+Mirai,+Santa+Isabel+do+Par%C3%A1+-+PA,+68790-000/@-1.3005153,-48.1630375,17z/data=!3m1!4b1!4m5!3m4!1s0x92a45157e89124c7:0x8f9c45c7486945a5!8m2!3d-1.3005153!4d-48.1608488?hl=pt-BR" target="blank" type="button" class="img-redes-sociais">
                <img src="img/google-maps.png" alt="" width="40px">
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
<script>
    function confirmacao(){
        window.alert('Produto adicionado com sucesso!')
    }
</script>
</body>

</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->