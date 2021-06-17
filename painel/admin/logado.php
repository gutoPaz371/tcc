<?php
	session_start();
	if(!isset($_SESSION['id'])){
		header('location:../');
	}
?>
<!DOCTYPE html>
<script>
	function del(){
		<?php 
			$_SESSION['erro']='';
			$_SESSION['cor']='black';
		?>
	}
</script>
<html>
<head>
	<title>Admin Logado | Loja Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="theme-color" content="#003469">
	<link rel="shortcut icon" href="../../img/ico_favicon.png">
	<link rel="stylesheet" type="text/css" href="../../css/logado_admin.css">
	<link rel="stylesheet" href="../../css/menu_admin.css">
</head>
<body>
	<section class="corpo-painel">
		<div class="box user">
			<div class="header-box">
				<h2>Bem Vindo :)</h2>
			</div>
			<form method="POST" action="./verif.php">
				<button name="op" id="opcao" value="1" onclick="del(this)">Adicionar Administrador</button><br>
				<button name="op" id="opcao" value="2" onclick="del(this)">Adicionar Produtos</button><br>
				<button name="op" id="opcao" value="3" onclick="del(this)">Editar Produtos</button><br>
				<button name="op" id="opcao" value="4" onclick="del(this)">Pedidos</button><br>
				<button name="edit" id="opcao" onclick="del(this)" value="<?php echo $_SESSION['id'] ?>">Editar Conta</button><br>
			</form>
			
		<div class="box">
			<div class="header-box">
				<h2>Informações</h2>
			</div>
			<table class="tab">
				<tr>
					<th>Quantidade de produtos cadastrados:
				</tr>
				<tr>
					<th>Ultima venda:
				</tr>
			</table>
		
	</section>
	<a  class="btn-sair" href="sair.php">Sair</a>
</body>
</html>