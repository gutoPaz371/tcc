<?php
	session_start();
	if(isset($_SESSION['erro'])){
		$erro="<div class=\"error\"><p>Usuário/Senha Incorretos!<p></div>";
	}else{
		$erro="";
	}if(isset($_SESSION['user'])){
		session_destroy();
		header('location: ../');
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

<script>
    function del(){
        <?php 
            $erro='';
			$_SESSION['erro']='';
			$_SESSION['cor']='black';
        ?>
    }
</script>
	<?php echo $erro; ?>
	<section class="corpo-frm">
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
           <br><br> <a href="./cadastro.php" onclick="del(this)" ><u>Cadastra-se</u></a>
		</form>
	</section>
	<a href="../"><button onclick="del(this)">Voltar</button></a>
</body>
</html>