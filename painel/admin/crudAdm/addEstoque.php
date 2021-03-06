
<?php
    session_start();
    if(isset($_SESSION['erro'])){
        $erro=$_SESSION['erro'];
        $cor=$_SESSION['cor'];
        
    }
    else{
        $cor='black';
        $erro='';
    }
    //session_destroy();
    if(!isset($_SESSION['id'])){
        header('location: ../../');
    }
?>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addEstoque.css">
    <title>Adicionar Estoque</title>
</head>
<body>
<section class="box">
<div class="nome"><h1>Adicionar Produtos</h1></div> 
    <div class="arquivos">
        <form class="caixa" action="./processos/processaAddEstoque.php" method="POST" enctype="multipart/form-data">
            <span<?php echo $cor ?>"><?php echo $erro;?></span><br>
            <label for="">NOME:</label>
            <input type="text" name="nome"><br>
            <label for="">VALOR:</label>
            <input type="moeda" name="preco"><br>
            <label for="">QUANTIDADE:</label>
            <input id="qt" value="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="quant" style="width: 40px;" ><div id="quant" onclick="add(this)">+</div><div id="quant" onclick="rem(this)">-</div>
           <br> <label for="">DESCRICAO</label><br><textarea name="descricao" id="descricao" maxlength="100"></textarea>
<br><script>
    (function(win, doc) {
        'user strict';

        let msg = doc.querySelector('#descricao');
        descricao.addEventListener('keyup', (event) => {
            let sub = event.target.maxLength - event.target.textLength;
            doc.querySelector('.result').innerHTML =  sub + ' /100 ';
        }, false);

    })(window, document);
</script>
<c class="result">100/100</c>
            <input class="arq" type="file" name="arquivo"><br>   
    </div>
        
        <div class="btn-prod">
            <div id='circulo' class="cor" onclick="select(id)"><h1>CIRCULO</h1></div>
            <div id='bolha' class="cor" onclick="select(id)"><h1>BOLHA</h1></div>
            <div id='coracao' class="cor" onclick="select(id)"><h1>CORA????O</h1></div>
            <div id='estrela' class="cor" onclick="select(id)"><h1>ESTRELA</h1></div>          
        </div>        
        <div class="btn-adicionar">
            <button id="tipo" name="tipo" value="" type="submit">ADICIONAR</button>
            </form>
        </div>
</section>
<a class="btn-sair" href="../logado.php">Voltar</a>
        
    
</body>
<script>
    x=true;
    oldCor="";
    oldId="";
    selectCor="";
    cor= "lightgreen";
    function select(id){
        if(oldId.length>0 && oldId!=id){
            document.getElementById(oldId).style.borderColor=oldCor;
            document.getElementById(id).style.borderColor=cor;
            selectCor=id;
            oldId=id;
            oldCor=document.getElementById(id).style.backgroundColor;
            x=false;
        }else{
            if(x){
                oldCor=document.getElementById(id).style.backgroundColor;
                oldId=id;
                document.getElementById(id).style.borderColor=cor;
                selectCor=id;

                x=false
            }else{
                oldCor=document.getElementById(id).style.backgroundColor;
                oldId=id;
                document.getElementById(id).style.borderColor=oldCor;
                x=true;
            }
        }
        document.getElementById('tipo').value=selectCor;
    }
    function add(){
        let quant=parseInt(document.getElementById('qt').value);
        quant=quant+1;
        document.getElementById('qt').value=quant;   
    }function rem(){
        let quant=parseInt(document.getElementById('qt').value);
        quant=quant-1;
        if(quant>=1){
            document.getElementById('qt').value=quant;
        }        
    }
</script>
</html>
