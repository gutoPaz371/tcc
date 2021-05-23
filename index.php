aaa<?php 
    session_start();
    if(isset($_SESSION['user'])){
        $nome=$_SESSION['user'];
        
    }else{
        $nome='';
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mania de Festa</title>
      <link rel="stylesheet" href="css/site.css">

</head>
<body>
                <!-- inicio menu 1 -->
    <nav id="menu-1">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="#######">Empresa</a></li>
                <li><a href="./user/login.php">Login / Logof</a></li>
                <li><a href="./user/carrinho.php">Carrinho</a></li>
                <li><a href="./painel/login.php"target="_blank">Painel</a></li>
                <h1>Bem Vindo <?php echo $nome; ?></h1>
            </ul>
    </nav>
                <!--  final menu 1 -->


                <!--  inicio menu-2 -->
    <nav class="menu-2">
            <ul>
                <li><a href="#####">Balões</a></li>
                <li><a href="#####">Canecas</a></li>
                <li><a href="#####">Embalagens</a></li>
                <li><a href="#####">outros</a></li>
            </ul>
    </nav>
                <!--  final menu-2 -->


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
                        <img src="img/slider1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider4.jpg" alt="">
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
                            <a href="coracao.php"target="_blank">
                              <img src="img/coracao.png"></a></br><center><h1>Coração</h1></center>
                        </section>
                        
                        <section class="produto">
                            <a href="estrelas.php"target="_blank">
                              <img src="img/estrela.png"></a></br><center><h1>Estrela</h1></center>
                        </section>
                        
                        <section class="produto"target="_blank">
                            <a href="circulo.php">
                              <img src="img/bola.png"></a></br><center><h1>Circulo</h1></center>                  
                        </section>

                        <section class="produto">
                            <a href="###"target="_blank">
                              <img src="img/bolha.png"></a></br><center><h1>Bolha</h1></center>                  
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


                <section><!--  painel img -->
                  <div class="painel-img">
                    <img src="img/bolas.jpg" alt="">
                    <img src="img/cacto.jpg" alt="">
                    <img src="img/pepa.jpg" alt="">
                  </div>
                </section>

                

                <section class="rodape-info"> 
                    <section class="informacoes">
                        <b>INFORMAÇÕES</b>
                        <ul>
                            <a href="sobrenós">Sobre nós</a>
                        </ul>
                        <ul>
                            <a href="">Parceiros</a>
                        </ul>
                        <ul>
                            <a href="">sss</a>
                        </ul>
                        <ul>
                            <a href="">Sss</a>
                        </ul>
                    </section>

                    <section class="informacoes-2"> <!--ajustar section, classe selecionada mas sem tratamento css-->
                        <b>ATENDIMENTO</b>
                        <ul>
                            <a href="sobrenós">Sobre nós</a>
                        </ul>
                        <ul>
                            <a href="">Parceiros</a>
                        </ul>
                        <ul>
                            <a href=""></a>
                        </ul>
                        <ul>
                            <a href="">S</a>
                        </ul>
                    </section>
                </section>


                <footer class="rodape"> <h1>www.maniadefesta.com.br</h1></footer>
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">

                                <!--  final rodapé -->

<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>
</body>
</html> 