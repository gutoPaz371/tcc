<?php
	session_start();
	if(isset($_SESSION['erro'])){
		$erro="<div class=\"error\"><p>Usuário/Senha Incorretos!<p></div>";
	}else{
		$erro="";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel Admin | Loja Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="theme-color" content="#ee7421">
	<link rel="shortcut icon" href="../img/ico_favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/login_admin.css">
</head>
<body>

<script>
    function del(){
        <?php 
            $erro='';
        ?>
    }
</script>
	<?php echo $erro; ?>
	<section class="corpo-frm">
		<h2>Painel Retaguarda Loja</h2>
		<form name="frmLogAdmin" method="POST" action="processaLogin.php">
			<div class="frm-item">
				<label for="userlog">Usuário</label>
				<input type="text" id="userlog" name="user" maxlength="20" autocomplete="off">
			</div>
			<div class="frm-item">
				<label for="passlog">Senha</label>
				<input type="password" id="passlog" name="pass" maxlength="20" autocomplete="off">
			</div>
			
			<input type="submit" class="btn" name="btnLogPainel" value="ENTRAR" onclick="return valiLogPn()">
		</form>
	</section>
	<div class="botao-voltar">
		<a href="../index.php" onclick="del(this)"style="text-decoration:none">Voltar</a>
	</div>
</body>
</html>