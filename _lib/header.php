<!DOCTYPE html>
<html>
	<head>
		<title><?=$site->title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
<?php foreach ((array)$site->styles as $style) { ?>
		<link href="<?=$style?>" rel="stylesheet"/>
<?php } ?>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86166541-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-86166541-1');
		</script>
	</head>
	<body>
