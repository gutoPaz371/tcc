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
	<title>Login usuário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="icon" href="./../img/ico.png">
	<link rel="stylesheet" type="text/css" href="../css/Login_User.css">
	<link rel="stylesheet" href="../css/menu_admin.css">
</head>
<body>
	<?php echo $erro; ?>
	<div id="contL">
        <h1>Login</h1>
        <form name="frmLogAdmin" method="POST" action="./processos/processaLogin.php">
            <label for="email">Usuario</label>
            <input type="text" name="user" id="email" placeholder="Digite seu Usuario" autocomplete="off">
            <br>
            <label for="password">Senha</label>
            <input type="password" name="pass" id="password" placeholder="Digite Sua Senha">
            <br>
            <input type="submit" value="Login">
            <a href="#" id="forgot-pass">Esqueceu a senha.</a>
        </form>
        <div id="register-cont">
            <p>Ainda não tem uma conta ?</p>
            <a href="./cadastro.php">Registrar.</a>
        </div>
		<div class="botao-voltar">
		<a href="../index.php" onclick="del(this)"style="text-decoration:none">Voltar</a>
	</div>
    </div>
	
	
</body>
</html>