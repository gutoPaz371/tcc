<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Estoque</title>
</head>
<style>
    .cor{
        width: 100px;
        height: 30px;
        border: 2px solid;
        float: left;
        margin: 2px;
        border-radius: 20%;
        border-color: black;
        text-align: center; 
        cursor: pointer;
    }
</style>
<body>
    <h1 style="color: green;text-align: center;" >Adicionar Estoque</h1>
    <form action="./processos/processaAddEstoque.php" method="POST" enctype="multipart/form-data" style="text-align: center;">
    <span style="text-align: center;color:<?php echo $cor ?>"><?php echo $erro;?></span><br>
        <input type="text" name="nome" placeholder="NOME"><br>
        <input type="moeda" name="preco" placeholder="VALOR"><br>
        <input type="file" name="arquivo"><br>
        <div id='bola' class="cor" onclick="select(id)">BOLA</div>
        <div id='bolha' class="cor" onclick="select(id)">BOLHA</div>
        <div id='coracao' class="cor" onclick="select(id)">CORAÇÃO</div>
        <div id='estrela' class="cor" onclick="select(id)">ESTRELA</div>            
        <button id="tipo" name="tipo" value="" type="submit">ADICIONAR</button>
    </form><a href="../logado.php"><button>VOLTAR</button></a>
</body>
<script>
    x=true;
    oldCor="";
    oldId="";
    selectCor="";
    cor= "#00FF00";
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
</script>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->