<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php 
    include '../../../../Config/conexao.php';
    $id=$_POST['id'];
    $sql="SELECT * FROM produto WHERE id=$id";
    $res=mysqli_fetch_assoc($cn->query($sql));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../processos/addEstoque.css">
    <title>Editar</title>
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
    }#quant{
        width: 20px;
        height:20px;
        float: right;
        position: relative;
        cursor: pointer;
        right: 23%;border: medium;
        border-color: black;
        background-color: white;
        margin: 1px 3px 0px 3px;      
    }#quant:hover{
        background-color: whitesmoke;
    }#quant:active{
        background-color: #5ddcd4;
        width: 18px;
        height: 18px;
    }
</style>
<body>
    <form action="./updateEdit.php" enctype="multipart/form-data" method="POST" style="text-align: center;">
        <H1>EDITAR PRODUTO</H1>
        <label for="">Imagem</label><br>
        <input type="file" name="arquivo"><br>
        <label for="">Nome</label><br>
        <input type="text" name="nome" value="<?php echo $res['nome'] ?>"><br>
        <label for="">Preco</label><br>
        <input type="text" name="preco" value="<?php echo $res['preco'] ?>"><br>
        <label for="">QUANTIDADE: </label>
        <input id="qt" value="<?php echo $res['quant']; ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="quant" style="width: 40px;" ><div id="quant" onclick="add(this)">+</div><div id="quant" onclick="rem(this)">-</div>
        <br> <label for="">DESCRICAO</label><br><textarea name="descricao"><?php echo $res['descricao']; ?></textarea><c> 100/100</c>
        <div id='circulo' class="cor" onclick="select(id)">CIRCULO</div>
        <div id='bolha' class="cor" onclick="select(id)">BOLHA</div>
        <div id='coracao' class="cor" onclick="select(id)">CORAÇÃO</div>
        <div id='estrela' class="cor" onclick="select(id)">ESTRELA</div>                
        
        <button name="id" value="<?php echo $res['id'] ?>" >Editar</button>
    </form>
    <a href="../editEstoque.php"><button>Voltar</button></a>
</body>
<script>
    x=false;
    oldCor="";
    oldId="<?php echo $res['tipo'] ?>";
    selectCor="";
    cor= "#00FF00";
    document.getElementById('<?php echo $res['tipo'] ?>').style.borderColor=cor;
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
    }function add(){
        let quant=parseInt(document.getElementById('qt').value);
        quant=quant+1;
        document.getElementById('qt').value=quant;   
    }function rem(){
        let quant=parseInt(document.getElementById('qt').value);
        quant=quant-1;
        if(quant>0){
            document.getElementById('qt').value=quant;
        }        
    }
</script>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
