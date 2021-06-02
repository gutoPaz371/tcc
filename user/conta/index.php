<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->
<?php
	include '../../Config/conexao.php';
	session_start();
	if(!isset($_SESSION['id'])){
		header("location: ../../");
	}else{
		$id=$_SESSION['id'];
		$sql="SELECT * FROM cliente WHERE id=$id";
		$res=mysqli_fetch_assoc($cn->query($sql));
	}
	if(isset($_SESSION['erro'])){
		$erro=$_SESSION['erro'];
        $cor=$_SESSION['cor'];
	}else{
		$erro="";
        $cor='';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="theme-color" content="#ee7421">
	<link rel="shortcut icon" href="../img/ico_favicon.png">
	<link rel="stylesheet" type="text/css" href="../../css/edit_conta.css">
</head>
<style>
	#cpf{
		cursor: not-allowed;
	}
 
</style>
<body>
	<section class="corpo-frm">
		<h2>Editar conta</h2>
        <span id='erro' style="color: <?php echo $cor; ?>;"><?php echo $erro; ?></span>
		<form name="frmLogAdmin" method="POST" action="./processo/updateUser.php">
			<div class="frm-item">
				<label for="userlog">Usuário</label>
				<input name="user" value="<?php echo $res['nome'] ?>" type="text" id="" >
			</div>
            <div class="frm-item">
				<label for="userlog">Email</label>
				<input name="email" value="<?php echo $res['email'] ?>" type="email" id="" >
			</div>
			<div class="frm-item">
				<label for="userlog">Telefone</label>
				<input name="celular" value="<?php echo $res['celular'] ?>" id="celular" maxlength="14" onkeypress="cll(this)" >
			</div>
			<div class="frm-item">
				<label for="userlog">Cpf</label>
				<input value="<?php echo $res['cpf'] ?>" id="cpf" disabled autocomplete="off">
			</div>
			<div class="frm-item">
				<label for="passlog">Senha antiga</label>
				<input name="pass" type="password" id="passlog"  autocomplete="off">
			</div>
            <div class="frm-item">
				<label for="passlog">Nova Senha</label>
				<input name="pass1" type="password" id="passlog"  autocomplete="off">
			</div>
			<div class="frm-item">
				<label for="passlog">Confirmar Senha</label>
				<input name="pass2" type="password" id="passlog"  autocomplete="off">
			</div>
			
			<input type="submit" class="btn" value="SALVAR">
		</form>
	</section>
	<a href="./login.php"><button onclick="del(this)">Voltar</button></a>
</body>
<script>
	function cll(){
			let nume=document.getElementById('celular').value;
			if(nume.length==0){
				document.getElementById('celular').value='('+nume;
			}else if(nume.length==3){
				document.getElementById('celular').value=nume+') ';
			}else if(nume.length==9){
				document.getElementById('celular').value=nume+'-';
			}
		}
</script>
</html>
<!--CODIGO PRODUZIDO POR AUGUSTO OLIVEIRA PAZ 201902535855-->