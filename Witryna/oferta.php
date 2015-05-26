
<html lang="pl">
<meta charset="utf-8"> 


<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Sklep z akcesoriami komputerowymi" content="" />
		<meta name="sklep, akcesoria, komputer" content="" />
		<title>KOMP-AKCS Akcesoria komputerowe</title>
		<link rel="stylesheet" href="styl.css" type="text/css" />
		<link rel="shortcut icon" href="favicon.gif" type="image/x-icon" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	</head>

<body>
		<header>
			
			<h1><a href="index.html"><img src="akcesoria/opcja.png" alt="opis obrazka" title="Strona g³ówna" /></a></h1>
			<p></p>
			
		</header>
		
		<div class="content">
		<section>
			<?php
			// pod³¹czamy plik  connection.php
			include('connection.php');
			// wywo³ujemy funkcjê connection()
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
			print "<td>Wygl¹d</td>";
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
			
			<li><a id="currentpage" href="?co=drukarki">Drukarki</a></li><p>
			<li><a href="?co=klawiatury">Klawiatury</a></li><p>
			<li><a href="?co=monitory">Monitory</a></li><p>
			<li><a href="?co=myszki">Myszki</a></li><p>
			<li class="last"><a href="?co=s³uchawki">S³uchawki</a></li><p>
			</ul>
			</nav></p>
		</aside>
		</div>
</body>

</html>