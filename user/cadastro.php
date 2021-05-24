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
	<link rel="stylesheet" type="text/css" href="../css/Login_User.css">
</head>
<body>
<div id="contL">
        <h1>Cadastre-se</h1>
        <form action="">
            
            <label for="name">Nome:</label>
            <input type="name" name="name" id="name" placeholder="Digite seu nome.">

            <label for="celular">Contato:</label>
            <input type="celular" name="celular" id="celular" placeholder="Digite seu número.">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email.">

            <label for="confEmail">Cofirmar Email:</label>
            <input type="confEmail" name="confEmail" id="confEmail" placeholder="Confirme seu email.">

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" placeholder="Digite Sua Senha.">

            <label for="confSenha">Confirme sua Senha:</label>
            <input type="confSenha" name="confSenha" id="confSenha" placeholder="Confirme sua senha.">

            <input type="submit" value="Enviar">

        </form>
    </div>

	<a href="./login.php"><button onclick="del(this)">Voltar</button></a>
</body>
</html>