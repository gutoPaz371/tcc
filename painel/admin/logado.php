<?php
	session_start();
	if(!isset($_SESSION['id'])){
		header('location:../');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Logado | Loja Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="theme-color" content="#003469">
	<link rel="shortcut icon" href="../../img/ico_favicon.png">
	<link rel="stylesheet" type="text/css" href="../../css/logado_admin.css">
</head>
<body>
	<section class="corpo-painel">
		<div class="box user">
			<div class="header-box">
				<h2>Bem-Vindo </h2>
			</div>
			<style>
				
			</style>
			<form method="POST" action="./verif.php">
				<button name="op" id="opcao" value="1">Adicionar Adm</button><br>
				<button name="op" id="opcao" value="2">Adicionar Estoque</button><br>
				<button name="op" id="opcao" value="3">Editar estoque</button><br>
				<button name="op" id="opcao" value="4">Pedidos</button><br>
				<button name="edit" id="opcao" value="<?php echo $_SESSION['id'] ?>">Editar Conta</button><br>
			</form>
			
		<div class="box">
			<div class="header-box">
				<h2>Informações</h2>
			</div>
			<table class="tab">
				<tr>
					<th>Quantidade de produtos:
				</tr>
				<tr>
					<th>Ultima atualização:
				</tr>
			</table>
		
	</section>
	<a  class="btnl" href="sair.php">Sair</a>
</body>
</html>