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

</head>
<body>
                <!-- inicio menu 1 -->
    <nav id="menu-1">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="./user/carrinho.php">Carrinho</a></li>
                <li><a href="./painel/index.php"target="_blank">Painel</a></li>
                <li><a id="log" href="./user/login.php"></a></li>
                <li><a id="cont" href="./user/conta/"></a></li>
                <h1><?php echo $nome; ?></h1>
            </ul>
    </nav>
                <!--  final menu 1 -->
    <script>
        document.getElementById('log').innerText='<?php echo $log; ?>';
        document.getElementById('cont').innerText='<?php echo $cont; ?>';
    </script>
             
    <nav class="menu-2">
            <ul>
                <li><a href="#####">Balões</a></li>
                <li><a href="#####">Canecas</a></li>
                <li><a href="#####">Embalagens</a></li>
                <li><a href="#####">outros</a></li>
            </ul>
    </nav>              


    <main>
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

                <div class="texto"><h1>Aqui sua festa é mais feliz :)</h1> <h2>confira abaixo</h2></div>
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
    </main>
                <!--  fim produtos -->


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
                  <div class="texto-logo">
                      <h1>Mania de festa</h1>
                  </div>

                <div class="logo-img">
                    <img src="img/slider.jpg">
                </div>
                
                <!--  painel img -->
                <section>
                  <div class="painel-img">
                    <img src="img/mania1.jpg" alt="">
                    <img src="img/mania2.jpg" alt="">
                    <img src="img/baloesIMG3.jpg" alt="">
                  </div>
                </section>

                         <!--  Início rodapé -->
                <section class="rodape-info"> 
                    <section class="informacoes">
                        <h1>INFORMAÇÕES</h1>
                        <ul>
                            <a href="../tcc/Empresa.php"><h1>Sobre nós</h1></a>
                        </ul>
                        <ul>
                            <a href=""><h1>Parceiros</h1></a>
                        </ul>
                        <ul>
                            <a href=""><h1>sss</h1></a>
                        </ul>
                        <ul>
                            <a href=""><h1>Sss</h1></a>
                        </ul>
                    </section>

                    <section class="informacoes-2"> 
                        <h1>ATENDIMENTO</h1>
                        <ul>
                            <a href="sobrenós"><h1>Sobre nós</h1></a>
                        </ul>
                        <ul>
                            <a href=""><h1>Parceiros</h1></a>
                        </ul>
                        <ul>
                            <a href=""><h1>adicionar</h1></a>
                        </ul>
                        <ul>
                            <a href=""><h1>S</h1></a>
                        </ul>
                    </section>

                    <section class="informacoes-2"> 
                        <h1>ATENDIMENTO</h1>
                        <ul>
                            <a href="sobrenós"><h1>Sobre nós</h1></a>
                        </ul>
                        <ul>
                            <a href=""><h1>Parceiros</h1></a>
                        </ul>
                        <ul>
                            <a href=""><h1>adicionar</h1></a>
                        </ul>
                        <ul>
                            <a href=""><h1>S</h1></a>
                        </ul>
                    </section>
                </section>

                
<section class="rodape">
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
         <footer>
            <div class= "rodape">  
                <h1>www.maniadefesta.com.br</h1>
            </div> 
        </footer>
                

</section>

                

                                <!--  final rodapé -->

<script type="text/javascript">
    var cont = 1;
    setInterval(function(){
      document.getElementById('radio' + cont).checked = true;
      cont++;
      if(cont > 4){
        cont = 1;
      }
    }, 5000);
    </script>
</body>
</html> 