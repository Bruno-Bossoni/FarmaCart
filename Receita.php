<?php

if(!isset($_SESSION)) {
	session_start();
}

?>
<!DOCTYPE HTML>
<html>
	<head>		
		<title> Receita </title>
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
				margin: 30px 200px 100px 50px;
			}
			p {
				padding-top: 25px;
				padding-right: 50px;
				padding-bottom: 25px;
				padding-left: 50px;
			}
			p{
				padding: 25px 50px 25px 50px;
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
				width:600px;
				float:right;
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
			<h2> Receita Médica Online</h2>
			<p> Aqui na <strong>Farmacart</strong> você também pode comprar remédios que exijam preescrição médica, basta enviar a receita expedida de forma digital.<br>
                Solicite ao seu médico a receita online e garanta descontos exclusivos!</p>
			<p><a href="https://www.youtube.com/watch?v=KCbe-7Lz0wQ" 
			target="_blank">Veja como obter a sua receita online.</a></p>
		</div>
		<div id="footer"> Copyright @Farmacart</div>
</html>