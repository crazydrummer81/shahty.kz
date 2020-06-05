<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
	$module_alias = get_name_from_path(__FILE__);
	$article = get_article($module_alias);
?>
	<div class="heroblock-container">
		<h3 id="heroblock_heading"><?=$article->heading;?></h3>
		<div id="heroblock_offer"><?=$article->content;?></div>
		<div id="heroblock_button" style="border: 1px gray; margin-top:0;">
		<?php
			echo get_module_content('button-gift');
			?>
		</div>
		<?php
			echo get_module_content('heroblock-video');
			?>
	</div>
	<div class="overlay"></div>