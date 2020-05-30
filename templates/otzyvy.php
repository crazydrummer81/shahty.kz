<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
?>


	<div class="row" style="display:none"></div>
	<div class="row"><div class="container">
			<article>
				<h1><?= get_article_heading('article-testimonials'); ?> </h1>
				 	 <?= get_article_content('article-testimonials'); ?>
			</article>
		<?= get_module_content('button-gift'); ?>
	</div></div>
    
	<div class='row'><div class='container'>
		<?= get_module_content('gallery-otzyvy'); ?>
   </div></div>

	 <div class="row"><div class="container">
		<?php
			echo get_module_heading('features');
			echo get_module_content('features');
			echo get_module_content('button-gift');
		?>
		</div></div>
    


