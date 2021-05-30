<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include './Config/conexao.php';
    $res=$cn->query("SELECT id, nome, preco, descricao FROM produto where tipo='circulo'");
    session_start();
    $_SESSION['tipo']='circulo';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mania de Festa</title>
      <link rel="stylesheet" href="css/produtos.css">

</head>
<body>
    <!-- inicio menu -->
    <nav id="menu-1">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="user/carrinho.php">Carrinho</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5591984851975&text=Ol%C3%A1%2C%20gostaria%20de%20ajuda%20para%20escolher%20os%20bal%C3%B5es%20certos%20para%20minha%20festa!">Chat</a></li>
            </ul>
    </nav>
    <!--  final menu -->

        <link rel="stylesheet" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <main>

                     <!-- inicio prateleira -->
               <div class="prateleira">
                   <ul class="prateleira ul">
                        <?php while($dado = $res->fetch_array()){ ?>
                            <li><h1><?php echo $dado['nome'] ?></h1><img src="./img/<?php echo $dado['id']?>.png"><br><?php echo $dado['descricao'] ?><h2>R$ <?php echo $dado['preco'] ?>.00</h2><form action="./user/processos/addCarrinho.php" method="POST">
                <button name="idp" value="<?php echo $dado['id'] ?>" type="submit" class="botao-ver-prateleira">Adicionar ao Carrinho</button>
                </form></li>
                        <?php } ?>
                   </ul>
               </div>
    </main>
                     <!--final prateleira-->

        


                                <!--  inicio rodapé -->

             <footer class="rodape"> <h1>www.maniadefesta.com.br</h1></footer>
                 <link rel="preconnect" href="https://fonts.gstatic.com">
                 <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
                
                                                <!--  final rodapé -->
 </body>
 </html> 
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->