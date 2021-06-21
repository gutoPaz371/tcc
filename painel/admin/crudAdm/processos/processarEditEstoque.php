
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
    <link rel="stylesheet" href="../processos/processarEditEstoque.css">
    <title>Editar Produto</title>
</head>

<body>

<section class="box">
    <form class="caixa" action="./updateEdit.php" enctype="multipart/form-data" method="POST" style="text-align: center;">
        <div class="nome"><H1>Editar Produto</H1></div>
        <div class="arquivos">
            <label for="">Imagem</label><br>
            <input type="file" name="arquivo"><br>
            <label for="">Nome</label><br>
            <input type="text" name="nome" value="<?php echo $res['nome'] ?>"><br>
            <label for="">Preço</label><br>
            <input type="text" name="preco" value="<?php echo $res['preco'] ?>"><br>
            <label for="">QUANTIDADE: </label>
            <input id="qt" value="<?php echo $res['quant']; ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="quant" style="width: 40px;" ><div id="quant" onclick="add(this)">+</div><div id="quant" onclick="rem(this)">-</div>
            <br> <label for="">Descrição</label><br><textarea name="descricao"><?php echo $res['descricao']; ?></textarea><c> 100/100</c>
        </div>
        
       <div class="btn-prod">
            <div id='circulo' class="estilo" onclick="select(id)">CIRCULO</div>
            <div id='bolha' class="estilo" onclick="select(id)">BOLHA</div>
            <div id='coracao' class="estilo" onclick="select(id)">CORAÇÃO</div>
            <div id='estrela' class="estilo" onclick="select(id)">ESTRELA</div>                
        </div>
        
        <div class="btn-editar">
            <button name="id" value="<?php echo $res['id'] ?>" >Salvar</button>
        </div>      
    </form>
</section>
    <a class="btn-voltar" href="../editEstoque.php">Voltar</a>
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

