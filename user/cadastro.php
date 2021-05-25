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
    <div class="botao-voltar">
		<a href="../user/login.php" onclick="del(this)"style="text-decoration:none">Voltar</a>
	</div>
    <div id="contL">
        <h1>Cadastre-se</h1>
        <form action="./processos/processaCadastro.php" method="POST">
            
            <label for="name">Nome:</label>
            <input type="name" name="user" id="name" placeholder="Digite seu nome.">
            
            <label for="name">CPF:</label>
            <input type="name" name="CPF" id="CPF" onkeypress="cpf(this)" maxlength="14" placeholder="000.000.000-00">

            <label for="celular">Contato:</label>
            <input type="celular" name="celular" id="celular" onkeypress="cll(this)" maxlength="14" placeholder="(99) 9999-9999">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email.">

            <label for="confEmail">Cofirmar Email:</label>
            <input type="confEmail" name="email1" id="confEmail" placeholder="Confirme seu email.">

            <label for="password">Senha:</label>
            <input type="password" name="pass" id="password" placeholder="Digite Sua Senha.">

            <label for="confSenha">Confirme sua Senha:</label>
            <input type="password" name="pass1" id="confSenha" placeholder="Confirme sua senha.">

            <input type="submit" value="Enviar">

        </form>
    </div>
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
    function cpf(){
        let nume=document.getElementById('CPF').value;
        console.log(nume.length);
        if(nume.length==3){
            document.getElementById('CPF').value=nume+'.';
        }else if(nume.length==7){
            document.getElementById('CPF').value=nume+'.';
        }else if(nume.length==11){
            document.getElementById('CPF').value=nume+'-';
        }
    }
</script>
</html>