<?php

include("conexao.php");


?>

<!DOCTYPE HTML>
<html>
	<head>		
	<title>Cadastro Usuario</title>
		<style type="text/css">
			div {
				margin-top: 30px;
				margin-bottom: 100px;
				margin-right: 200px;
				margin-left: 50px;
			}
			div.posicao{
			position: fixed;
			top: 30px;
			right: 5px;
			height: 100px;
			width: 100px;
			background-color: green; }

			div {
				margin: 20px 100px 50px 50px;
			}
			p {
				padding-top: 10px;
				padding-right: 10px;
				padding-bottom: 10px;
				padding-left: 10px;
			}
			p{
				padding: 10px 10px 10px 10px;
			}
			#header {
				background-color:black;
				color:white;
				text-align:center;
				padding:5px;}
			#nav {
				line-height:30px;
				background-color:#eeeeee;
				height:200px;
				width:170px;
				float:left;
				padding:20px; }
			#section {
				background-color:beige;
				height:200px;
				color:black;
				width:700px;
				float:left;
				padding:10px;}
			#footer {
				background-color:black;
				color:white;
				clear:both;
				text-align:center;
				padding:5px;}

		</style>
	</head>

	<body>
		<div id="header">
			<h1>Farmacart</h1>
		</div>
		<div id="nav">
			
			<a href="Receita.php">
			Remédios com prescrição</a><br>
			<a href="CadastroCliente.html"> 
			Cadastro do Comprador</a><br>
			<a href="CadastroUsuario.php">
			Cadastro de Usuário</a><br>
			
		</div>
		<div id="section">
			<p>CADASTRO DE USUARIO</p>
			<form action="CadUs.php" method="POST">
			<fieldset>
			<label>Nome:</label>
			<input type="text"
			    name="nome" >
			<label>Sobrenome:</label>
			<input type="text"
			    name="sobrenome">
			<label>Idade:</label>
			<input type="number"
			    name="idade"
				min="1" max="150" step="1"><br>
			<label>Email:
			</label>
			<input type="email"
			    name="email"> 
			<label>Senha:</label>
			<input type="password"
			    name="senha"><br>
			<label>Sexo:</label>
			<input type="radio"
			name="sexo"
			value="feminino"> 
			Feminino
			<input type="radio"
			name="feminino"
			value="feminino">
			Masculino<br><br>
			<input type="submit"
			value="Cadastrar"><br>
			</fieldset>
			</form>
		</div>
		<div id="footer"> Copyright @Farmacart</div>
	</body>
</html>

