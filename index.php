<html>
<!--Octavio Dominguez Salgado-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="stylesheet" href="css/mystyle.css" type="text/css"/>	
	        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
	        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script type="text/javascript" src="scripts/posicion.php"></script>
     	</head>
	<body>        
		<div id="cabecera" align= "right" >
		<form action="login.php" method='POST'>
		<input id="login" type="submit" value="login">
		</form>
		<form action="login.php" method='POST'>
                <input id="guardar" type="submit" value=posicion>
                </form>
		</div>
        <div class="proy">
		<ul id="sortable">
			<li id="draggable1"><a href="articulo.php?idNode=1"><img src="seguridad2.jpg" alt="" width="250" height="200"><small>casilla numero 1</small></a></li>
                        <li id="draggable2"><a href="articulo.php?idNode=2"><img src="seguridad4.jpg" alt="" width="250" height="200"><small>casilla numero 2</small></a></li>
                        <li id="draggable3"><a href="articulo.php?idNode=3"><img src="seguridad5.jpg" alt="" width="250" height="200"><small>casilla numero 3</small></a></li>
                        <li id="draggable4"><a href="articulo.php?idNode=4"><img src="seguridad2.jpg" alt="" width="250" height="200"><small>casilla numero 4</small></a></li>
                        <li id="draggable5"><a href="articulo.php?idNode=5"><img src="seguridad4.jpg" alt="" width="250" height="200"><small>casilla numero 5</small></a></li>
                        <li id="draggable6"><a href="articulo.php?idNode=6"><img src="seguridad5.jpg" alt="" width="250" height="200"><small>casilla numero 6</small></a></li>
                        <li id="draggable7"><a href="articulo.php?idNode=7"><img src="seguridad2.jpg" alt="" width="250" height="200"><small>casilla numero 7</small></a></li>
                        <li id="draggable8"><a href="articulo.php?idNode=8"><img src="seguridad4.jpg" alt="" width="250" height="200"><small>casilla numero 8</small></a></li>
                        <li id="draggable9"><a href="articulo.php?idNode=9"><img src="seguridad5.jpg" alt="" width="250" height="200"><small>casilla numero 9</small></a></li>
		</ul>
		</div>
	</body>
</html>
