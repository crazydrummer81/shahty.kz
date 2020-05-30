<?php 
	require_once('functions.php');
	$module_name = get_name_from_path(__FILE__);
	$module = get_module($module_name);
	if( $module->shared ): 
?> 
<a id="<?=$module->css_id ?>" class="<?=$module->css_class ?>"><?=$module->heading ?></a> <!--callme_order_btn button-->
<?php
	endif;
?>