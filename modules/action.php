<?php 
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
	$module_name = get_name_from_path(__FILE__);
	$module = get_module($module_name);
	global $articles;
	if( $module->shared ): 
?> 
<!-- <<?=$module->tag?> id="<?=$module->css_id ?>" class="<?=$module->css_class ?>"> -->
	<<?=$module->heading_tag?>>
		<?=$module->heading ?>
	</<?=$module->heading_tag?>>

<!-- </<?=$module->tag?>> -->

<?php

	foreach( $articles as $article) :
		if( $article->alias == $module_name) : ?>
			<?=$article->content?>
		<?php endif; 
	endforeach;
?>
<?php
	endif;
?>