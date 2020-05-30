		<?php 
			require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
		?>

		<?= get_module_content('heroblock'); ?>
		<div class="row"><div class="container">
		<?php
			echo get_module_heading('features');
			echo get_module_content('features');
			echo get_module_content('button-gift');
		?>
		</div></div>
		<div class="row"><div class="container">
			<?= get_module_heading('gallery'); ?>
			<?= get_module_content('gallery'); ?>
			<?= get_module_content('button-gift'); ?>
		</div></div>
		<div class="row"><div class="container">
			<article>
				<h1>
					<?= get_article_heading('article-solyanye-shahty-almaty'); ?>
				</h1>
					<?= get_article_content('article-solyanye-shahty-almaty'); ?>
			</article>
		<?= get_module_content('button-gift'); ?>
		</div></div>
		<div class="row"><div class="container">
			<article id="article_faq">
				<h2 style="margin-bottom: 40px;">
					<?= get_article_heading('article-faq'); ?>
				</h2>
					<?= get_article_content('article-faq'); ?>
			</article>
		<?= get_module_content('button-gift'); ?>
		</div></div>
