<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
		<title>Frequent Asked Questions</title>
	</head>
	<body>
		<div class="container">
		<div class="main">
			<p class="pregi">
				<h1>Q: Qué es Nalu?</h1>
				<h3><em>A: Nalu es una red social destinada para los amantes del Mar.</em></h3>
			<br>
				<h1>Q: Qué oportunidades provee Nalu?</h1>
				<h3><em>A: Nalu tiene la particularidad de concatenar varias funciones o herramientas que necesitamos para estar preparados para el dia importante.</em></h3>
			<br>
				<h1>Q: Qué dia es importante?</h1>
				<h3><em>A: El dia imporante para nosotros es el dia que hay Olas(Nalu) y son de calidad</em></h3>
			<br>
				<h1>Q: Qué requisitos necesitamos para ser parte de Nalu?</h1>
				<h3><em>A: Para ser parte de Nalu el unico requisito es registrarse y tener ganas de compartir</em></h3>
			<br>
				<h1>Q: Cuantos integrantes hay en el equipo de Nalu?</h1>
				<h3><em>A: Nalu cuenta con 3 pilares constitutivos. Nicolás, Bautista y Franco.</em></h3>
			<br>
		</div>
		
		<!--Aca es un espacio para que los usuarios dejen sus dudas -->
		
		<div class="comment">
		<form action="" method="post">
			Comment:
			<br>
			<textarea name='comment' id='comment'></textarea><br />

  			<input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />

  			<input type='submit' value='Submit' />  
		</form>	
		</div>

		<footer>
			<div class="social">
			<a href="http:www.facebook.com"><img src="../imagenes/facebook-logo.png" alt=""></a>
			<a href="http:www.instagram.com"><img src="../imagenes/instagram-logo.png" alt=""></a>
			<a href="http:www.twitter.com"><img src="../imagenes/twitter-logo.png" alt=""></a>
			</div>
			<div class="copy">2017 copyright Nico;Bauti;Franck</div>
		</footer>
	</body>
</html>
