<?php
	global $page;
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<title><?=$page->title; ?></title>
		<meta name="description" content="<?=$page->description; ?>" />
		<meta name="theme-color" content="#015367">
		<link rel="icon" sizes="192x192" href="img/logo-192x192-shahty-kz.png">
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/media.css" />
		<?=$page->additional_head_elements; ?>

		<script type='application/ld+json'><?php include('json/schema-org.json');?></script>
	</head>
	<body>
<?php 
	echo get_module_content('header-logo');
	echo get_module_content('menu');
?>