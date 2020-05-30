<?php
	require_once 'functions.php';
	$page_alias = get_name_from_path(__FILE__);
	$page_alias = str_replace('page_','',$page_alias);
	$page = get_page($page_alias);
	
	include 'modules/header.php';
	echo get_module_content('heroblock');
?>
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
	<div class="row">
		<div class="container-fluid">
			<?php
				$module_name = 'map1';
				$module = get_module($module_name);
				if( $module->shared )
					echo get_module_content($module_name);
			?>
		</div>
	</div>
	<div class="row">
		<div class="container-fluid">
			<?php
				$module_name = 'map2';
				$module = get_module($module_name);
				if( $module->shared )
					echo get_module_content($module_name);
			?>
			</div>
	</div>
<?php
	include 'modules/footer.php';
?>