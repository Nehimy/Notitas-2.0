<html>	
	<head>
		<meta charset="UTF-8">
    <link rel="stylesheet" href="<?=SITE_URL?>css/style.css">

    <link rel="icon" type="image/svg" href="<?=SITE_URL?>css/Notitas_icono.svg">
    <title>Notitas</title>
				
		<link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Itim&family=Luckiest+Guy&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="navigation-bar">
			<ul>
				<!--El título esta aquí-->
				<li class="logo">
					<a href="<?=SITE_URL?>all" alt="Notita Logo" title="Notita Logo"> 
						<img src="<?=SITE_URL?>css/Notitas_Logo.svg" alt="Notitas 2.0"> 
       		</a>	
       	</li>
				<li class="new-note" >
					<a alt="Crea nueva notita" title="Crea nueva notita" class="space" onmouseover="colorText(this)" onmouseout="normalColor(this)" href="<?=SITE_URL?>new"> new note </a>				
				</li>
			</ul>
		</div>
		<script src="<?=SITE_URL?>js/script.js"></script>
