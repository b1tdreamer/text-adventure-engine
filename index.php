<!DOCTYPE html>
<html lang="es">
<head>
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:200,400|Raleway:400|Press+Start+2P:400' rel='stylesheet' type='text/css'>
 <link type="text/css" rel="stylesheet" href="index.css" /> 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>JSGame</title>
 </head>
<body>

	<div id="page">
		<h1>JSGame</h1>
		<img id="img" src="" alt=" " />
		<div id="text"></div>
		<div id="chat"></div>
		<form onSubmit="doAction(document.getElementById('input').value); return false;">
			<input type="text" id="input" value="" autocomplete="off" />
		</form>
	</div>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
 	<script type="text/javascript" src="engine.js"></script>	
</body>
</html>