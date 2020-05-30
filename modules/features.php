<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
	global $articles;
	$module_alias = get_name_from_path(__FILE__);

	foreach( $articles as $article) :
		if( strpos($article->alias, 'features-') !== false ) : ?>
			<div class="features-item">
				<img src="<?=$article->image?>">
				<div class="features-item-heading"><span><?=$article->heading?></span></div>
				<div class="features-item-text"><?=$article->content?></div>
			</div>
		<?php endif; 
	endforeach;
?>