<?php 
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
	global $page;
?>

<?= get_module_content('heroblock'); ?>
<div class="row"><div class="container">
			<article>
				<h1>
					<?= get_article_heading($page->alias); ?>
				</h1>
					<?= get_article_content($page->alias); ?>
			</article>
		<?= get_module_content('button-gift'); ?>
		</div></div>