<?php
	session_start();
	if(isset($_SESSION['erro'])){
		$erro="<div class=\"error\"><p>Usuário/Senha Incorretos!<p></div>";
	}else{
		$erro="";
	}if(isset($_SESSION['user'])){
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login usuário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="theme-color" content="#ee7421">
	<link rel="shortcut icon" href="../img/ico_favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/login_admin.css">
</head>
<body>

<script>
    
</script>
	<?php echo $erro; ?>
	<section class="corpo-frm">
	<img src="../img/coracao.png"> <!--imagem logo site na tela admin-->
		<h2>Entrar</h2>
		<form name="frmLogAdmin" method="POST" action="./processos/processaLogin.php">
			<div class="frm-item">
				<label for="userlog">Usuário</label>
				<input type="text" id="userlog" name="user" maxlength="20" autocomplete="off">
			</div>
			<div class="frm-item">
				<label for="passlog">Senha</label>
				<input type="password" id="passlog" name="pass" maxlength="20" autocomplete="off">
			</div>
			
			<input type="submit" class="btn" name="btnLogPainel" value="ENTRAR" onclick="return valiLogPn()">
           <br><br> <a href="./cadastro.php" onclick="del(this)"style="text-decoration:none">Cadastre-se</a>
		</form>
	</section>

	<div class="botao-voltar">
		<a href="../index.php" onclick="del(this)"style="text-decoration:none">Voltar</a>
	</div>
	
</body>
</html>