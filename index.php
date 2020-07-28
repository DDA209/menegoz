<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--
Author: Didier Pascarel
E-mail: didier.pascarel1@gmail.com
Date: 2012
Site version: 2.0 beta
Last update: 2012.03.28
Site name: www.menegoz.com (Mireille Menegoz Sculptures)
-->

<html>
    <head>
		
		<title>
			Mireille Menegoz Sculptures
		</title>
		<meta charset="utf-8" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="Revisit-after" content="15">
        <meta name="robots" content="index,follow">
        <meta name="Category" content="art">
        <meta name="Description" content="D&#233;couvrez les oeuvres de Mireille MENEGOZ, artiste sculpteur. Bustes ou corps entiers en terre ou bronze.">
        <meta name="language" content="french">
        <meta name="keywords" content="mireille menegoz, menegoz, mireille, sculpture, terre cuite, terre, bronze, art, sculpteur, artiste, visage">
        <meta name="verify-v1" content="dEQ8+jYU/DvZ8E8ybmC0/Dj0ETKQLOZ3H2EsjlfMA1Y=" />
		<meta name="verify-v1" content="x3ujMOkZ00Mkw+FBwFFEkHS2iQuMQcC5I+LHvZdaECw=" />
		<link rel="SHORTCUT ICON" href="pics/mm.ico">
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/text.css" />
		<link rel="stylesheet" href="css/960.css" />
		<link rel="stylesheet" href="css/960_24_col.css" />
		<script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="stylesheet" href="css/mm.css" type="text/css" />
		<script type="text/javascript">
			document.oncontextmenu = function(){return false;};		
		</script>
		<!-- START - GOOGLE ANALYTICS -->
		<script type="text/javascript">

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-29297203-2']);
			  _gaq.push(['_trackPageview']);

			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

		</script>
		<!-- END - GOOGLE ANALYTYCS -->
		</head>
    <body oncontextmenu="return false">
<div class="page">
	<div class="content">
		<h1 class="titre2">Mireille Menegoz vous fait d&#233;couvrir son univers au travers de ses sculptures figuratives. Mireille Menegoz donne une nouvelle vie &#224; la terre cuite. Mireille Menegoz vous fait aussi d&#233;couvrir ses sculptures en bronze. Entrez et d&#233;couvrez cette artiste. A Colmar</h1>
		<?php
			include('header.php'); 
			if (empty($_GET["go"]))
			{
				include('galleries.php');
			}
			else
			{
					$go = $_GET["go"];
					if ($go == 'terracotta' or $go == 'bronzes')
					{
						include('gallery.php');
					}
					else
					{
						include();
					}
			}
			echo '<div class="container_24">';
			echo '<div class="blankline_2">';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			include('footer.php');
	?>
</div>
<script type="text/javascript" charset="utf-8">

	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({
			theme: 'dark_rounded',
			opacity: 1.0,
		});
	});
</script>
	</body>
</html>