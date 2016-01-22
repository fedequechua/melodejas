<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Melodejas</title>
	<style>
		*{margin:0}
		body{text-align:center}
		h1,h4{margin:1em}
		div#topbar{background:#ccc;padding:0.5em}
		div.objecte{margin:2px;padding:3em;display:inline-block;vertical-align:top;border:1px solid #ccc}
		div.objecte:hover {background:lightgreen;transition:all 0.5s}
	</style>
</head>
<body>
<!--topbar--><div id=topbar>
	Hola Fede ara els botons no fan res
	<button>Accedeix</button>
	<button>Opció random</button>
	<button>Log out</button>
</div>
<!--titol--><h1>Melodejas</h1>

<!--descripcio--><h4>Objectes disponibles a prop teu</h4>

<!--feed objectes-->
<?php
	//demo
	function displayObjecte($nom)
	{
		echo "<div class=objecte>
			objecte $nom
		</div>";
	}
	/*mostra 5 objectes*/for($i=0;$i<5;displayObjecte($i++)){;}
?>
