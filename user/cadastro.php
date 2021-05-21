<?php
	session_start();
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
	<link rel="stylesheet" type="text/css" href="../css/login_admin.css">
</head>
<body>
	<section class="corpo-frm">
		<h2>Cadastror</h2>
        <span id='erro' style="color: <?php echo $cor; ?>;"><?php echo $erro; ?></span>
		<form name="frmLogAdmin" method="POST" action="./processos/processaCadastro.php">
			<div class="frm-item">
				<label for="userlog">Usuário</label>
				<input name="user" type="text" id="userlog"  maxlength="20" autocomplete="off">
			</div>
            <div class="frm-item">
				<label for="userlog">Email</label>
				<input name="email" type="email" id="userlog"  maxlength="20" autocomplete="off">
			</div>
			<div class="frm-item">
				<label for="passlog">Senha</label>
				<input name="pass" type="password" id="passlog"  maxlength="20" autocomplete="off">
			</div>
            <div class="frm-item">
				<label for="passlog">Confirmar Senha</label>
				<input name="pass1" type="password" id="passlog"  maxlength="20" autocomplete="off">
			</div>
			
			<input type="submit" class="btn" name="btnLogPainel" value="SALVAR" onclick="return valiLogPn()">
		</form>
	</section>
	<a href="../"><button onclick="del(this)">Voltar</button></a>
</body>
</html>