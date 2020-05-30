<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
	$images_path = '/img/gallery-home/';
	$images_thumbs_path = '/img/gallery-home/thumbs/';
	$image_files_path = $_SERVER['DOCUMENT_ROOT'].$images_path;
	$image_files = scandir($image_files_path);
?>

	<div class="gallery">
		<?php	foreach( $image_files as $index=>$file_path ) {
			if( is_dir($image_files_path.$file_path) ) continue;
			$file_name = get_filename_from_path($file_path);
			$img_path = $images_path.$file_name;
			$img_thumb_path = $images_thumbs_path.$file_name;
		?>
		<div class="gallery--item">
			<a class="gallery--thumb" data-src="slide-<?=$index?>">
				<img src="<?=$img_thumb_path?>" alt="Соляная шахта в Алматы" loading="lazy">
			</a>
		</div>
		<?php }; unset($file_path); ?>
	</div>
	<div class="m2slider-set">
		<?php	foreach( $image_files as $index=>$file_path ) {
			if( is_dir($image_files_path.$file_path) ) continue;
			$file_name = get_filename_from_path($file_path);
			$img_path = $images_path.$file_name;
			$img_thumb_path = $images_thumbs_path.$file_name;
		?>
			<div class="m2slider-set--item" id="slide-<?=$index?>"><img loading="lazy" src="<?=$img_path?>" alt="Соляная пещера в Алматы"></div>
		<?php }; unset($file_path); ?>
	</div>