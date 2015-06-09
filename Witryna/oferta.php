
<html lang="pl">
<meta charset="UTF-8"> 


<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Sklep z akcesoriami komputerowymi" content="" />
		<meta name="sklep, akcesoria, komputer" content="" />
		<title>KOMP-AKCS Akcesoria komputerowe</title>
		<link rel="stylesheet" href="styl.css" type="text/css" />
		<link rel="shortcut icon" href="favicon.gif" type="image/x-icon" />
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript">
	
	var numer = Math.floor(Math.random()*3)+1;
	
	var timer1=0;
	var timer2=0;
	
	function ustawslajd(nrslajdu)
	{
		clearTimeout(timer1);
		clearTimeout(timer2);
		numer=nrslajdu-1;
		
		
		schowaj();
		setTimeout("zmienslajd()",500)
	
	}
	
	function schowaj()
	{
		$("#slider").fadeOut(500);
	
	}
	
	function zmienslajd()
	{
		numer++; if (numer>3) numer=1;
		var plik = "<img src=\"slajdy/promo" + numer + ".png\" />";
		document.getElementById("slider").innerHTML = plik;
		$("#slider").fadeIn(500);
		
		
		timer1 = setTimeout("zmienslajd()", 5000);
		timer2 = setTimeout("schowaj()", 4500);
	
	
	}
	
	</script>
</head>

<body onload="zmienslajd()">

	<header>
		<div class="content">
		<h1><a href="index.html"><img src="akcesoria/opcja.png" alt="opis obrazka" title="Strona główna" /></a></h1>
		<p></p>
		</div>
	</header>
	

	<div id="main">
	<div class="content" style="font-size: 16px;
			color: white;">
	<center><span onclick="ustawslajd(1)" style="cursor:pointer;">[1]</span>
	<span onclick="ustawslajd(2)" style="cursor:pointer;">[2]</span>
	<span onclick="ustawslajd(3)" style="cursor:pointer;">[3]</span>
	<div id="slider" style="padding-top: 5px; padding-bottom: 7px;"></div></center>
		<section style="width: 100%; color:#000; height: auto;">
			<?php
				
				
				
			// podłączamy plik  connection.php
			include('connection.php');
			// wywołujemy funkcję connection()
			connection();
			
			if(isset($_GET['co'])){
				$sql = "SELECT * FROM `towar` WHERE `kategoria`='".$_GET['co']."';";
			} else {
				$sql = "SELECT * FROM `towar`";
			}
			
			$sql = mysql_query($sql);
			print "<table border='1'>";
			print "<tr>";
			//print "<td></td>";
			//print "<td>Kategoria</td>";
			//print "<td>Nazwa</td>";
			print "<td>Firma</td>";
			print "<td>Opis</td>";
			print "<td>Cena</td>";
			print "<td>Wygląd</td>";
			print "</tr>";
			
			while ($row = mysql_fetch_assoc($sql)) {
				print "<tr>";
				//print "<td>".$row["idtowaru"]."</td>";
				//print "<td>".$row["kategoria"]."</td>";
				//print "<td>".$row["nazwa"]."</td>";
				print "<td>".$row["firma"]."</td>";
				print "<td>".$row["opis"]."</td>";
				print "<td>".$row["cena"]."</td>";
				print "<td><img src='zdjecia/".$row["zdjecie"]."' ></img></td>";
				print "</tr>";
			}

		?> 

		
		
		

		
	
		</section>
		
		<aside><p>
			<nav>
			<ul> 
			<li><a id="currentpage" href="index.html">Start</a></li><p>
			<li><a href="o-firmie.html">O firmie</a></li><p>
			<li><a href="oferta.php">Oferta</a></li><p>
			<ul>
			<li><a id="currentpage" href="?co=drukarki" style="font-size: 16px;">Drukarki</a></li><p>
			<li><a href="?co=klawiatury" style="font-size: 16px;">Klawiatury</a></li><p>
			<li><a href="?co=monitory" style="font-size: 16px;">Monitory</a></li><p>
			<li><a href="?co=myszki" style="font-size: 16px;">Myszki</a></li><p>
			<li class="last"><a href="?co=sluchawki" style="font-size: 16px;">Słuchawki</a></li><p>
			</ul>
			<li class="last"><a href="kontakt.html">Kontakt</a></li><p>
			</ul> 
			</nav></p>
		</aside>

		</div>
		

</body>

</html>