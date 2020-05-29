<?php
	require_once 'functions.php';
	$module_alias = get_name_from_path(__FILE__);
	$article = get_article($module_alias);
?>
	<div class="overlay">
		<!-- <div class="container"> -->
			<div class="heroblock-container">
				<div>
					<h3 id="heroblock_heading"><?=$article->heading;?></h3>
				</div>
				<div id="heroblock_offer"><?=$article->content;?></div>
				<div id="heroblock_button" style="border: 1px gray;">
				<?php
					echo get_module_content('button-gift');
				?>
				</div>
				<?php
					echo get_module_content('heroblock-video');
				?>
			</div>
		<!-- </div> -->
	</div>