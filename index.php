<?php 
    session_start();
    if(isset($_SESSION['user'])){
        $nome='Bem Vindo '.$_SESSION['user'];
        $log='Logof';
        $cont='Conta';      
    }else{
        $log='Login';
        $nome='';
        $cont='';
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mania de Festa</title>
      <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="css/rodape.css">
          <!-- CDN Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<main>
<div>
<ul id=whatsapp>
        <a href="https://api.whatsapp.com/send?phone=5591984851975&text=Ol%C3%A1%2C%20gostaria%20de%20ajuda%20para%20escolher%20os%20bal%C3%B5es%20certos%20para%20minha%20festa!"target="_blank"><h1>WHATSAPP</h1> <img src="https://icons.iconarchive.com/icons/dtafalonso/android-l/512/WhatsApp-icon.png" alt=""></a>
    </ul>
</div>
    
                <!-- inicio menu 1 -->
    <nav id="menu-1">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="./user/carrinho.php">Carrinho</a></li>
                <li><a href="./painel/index.php"target="_blank">Painel</a></li>
                <li><a href="https://github.com/gutoPaz371/tcc.git"target="_blank">GIT</a></li>
                <li><a id="log" href="./user/login.php"></a></li>
                <li><a id="cont" href="./user/conta/"></a></li>
            </ul>
            
    </nav>
                <!--  final menu 1 -->
    <script>
        document.getElementById('log').innerText='<?php echo $log; ?>';
        document.getElementById('cont').innerText='<?php echo $cont; ?>';
    </script>
            <!--  final menu 2 -->
          
    
                 <div class="faixa-horizontal">
                    <h1>Mania de Festa</h1>
                    <h2><?php echo $nome; ?></h2>
                </div>

                <div class="texto"><h2>BALÕES DE FESTA :)<br>DE ATÉ 30% OFF <br> vem conhecer!</h2><img src="./img/pessoas.png" alt="">
                                
                </div>
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
               
                <!--  inicio produtos -->
                <section class="produtos">
                        <section class="produto">
                            <a href="coracao.php">
                              <img src="img/coracao.png"></a></br><h1>Coração</h1>
                        </section>
                        
                        <section class="produto">
                            <a href="estrelas.php">
                              <img src="img/estrela.png"></a></br><h1>Estrela</h1>
                        </section>
                        
                        <section class="produto">
                            <a href="circulo.php">
                              <img src="img/bola.png"></a></br><h1>Circulo</h1>                 
                        </section>

                        <section class="produto">
                            <a href="bolha.php">
                              <img src="img/bolha.png"></a></br><h1>Bolha</h1>                  
                        </section>
                </section>         
    
                <!--  fim produtos -->

                <!--  slider carrossel inicio -->
                <div class="slider">
                    <link rel="stylesheet" href="css/slider.css">
                    <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <div class="slide first">
                        <img src="img/slider1.png">
                    </div>
                    <div class="slide">
                        <img src="img/slider2.png" >
                    </div>
                    <div class="slide">
                        <img src="img/slider3.png">
                    </div>
                    <div class="slide">
                        <img src="img/slider4.png">
                    </div>

                    <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    </div>

                </div>

                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                </div>
                <!--  slider carrossel fim -->

                
</main>

                <!--inicio painel presentes-->
                <div class="painel-presentes-text">
                    <h1>Veja nossa linha para presentes</h1> 
                    <link rel="preconnect" href="https://fonts.gstatic.com">
                    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
                </div>

                
                
                <div class="painel-presentes">
                    <div class="item1"></div>
                    <div class="item2"></div>
                    <div class="item3"></div>
                    <div class="item4"></div>  
                    <div class="item5"></div>
                    <div class="item6"></div>
                  </div>

                  <!--final painel presentes-->
                  <div class="informativo">
                      <h1>Sua festa fica mais Feliz com os artigos Mania de Festa</h1>
                      <h2>sssssssssssssssssssssss</h2>
                  </div>


                         <!--  Início rodapé -->
                <!-- Início Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4" style="background-color: #90b2c6;">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                    
                    <h5 class="font-weight-bold text-uppercase mb-4">Sobre Nós</h5>
                    <p>Somos uma empresa especialista em artigos de festas, fundada em 2021. Levando alegria para você e sua festa com todo nossa dedicação, amor e carinho. <br> Já proporcionamos momentos felizes de várias pessoas e famílias, venha ser mais uma!</p>
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
                                <i class="fas fa-home mr-3"></i> Rodovia BR-316, Km 60, S/n - &nbsp;&nbsp;&nbsp;Apeú, PA
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
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/" type="button" target="blank" class="img-redes-sociais">
                            <img src="img/facebook.png" alt="" width="35px">
                        </a>
                        <br>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/maniadefestasip/" type="button" target="blank" class="img-redes-sociais">
                            <img src="img/instagram.png" alt="" width="35px">
                        </a>
                        <br>
                        <!-- Google +-->
                        <a href="mailto:gabriel.m.louzada@gmail.com" type="button" class="img-redes-sociais">
                            <img src="img/gmail.png" alt="" width="35px">
                        </a>
                        <br>
                        <!-- Whatsapp -->
                        <a href="https://api.whatsapp.com/send?phone=5591984382681" target="blank" type="button" class="img-redes-sociais">
                            <img src="img/whatsapp.png" alt="" width="35px">
                        </a>
                        <br>
                        <!-- Mapas -->
                        <a href="https://goo.gl/maps/5gMkdHVs9kH1FoqP9" target="blank" type="button" class="img-redes-sociais">
                        <img src="img/google-maps.png" alt="" width="35px">
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