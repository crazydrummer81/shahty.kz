<?php
	ob_start();
	const ADDITIONAL_HEAD_ELEMENTS = [
		'<div>huynya 1</div>',
		'<div>pizda 2</div>'
	];

	var_dump( ADDITIONAL_HEAD_ELEMENTS );

	foreach( ADDITIONAL_HEAD_ELEMENTS as $item) {
		echo "$item";
	}

?>

<div>dsdsaldajsldaslksajdlaskjd</div>
<div>dsdsaldajsldaslksajdlaskjd</div>
<div>dsdsaldajsldaslksajdlaskjd</div>
<div>dsdsaldajsldaslksajdlaskjd</div>

<?php
	$text = ob_get_contents();
	ob_end_clean();
	echo "<h1>VOT ONO!!!</h1>".$text;
?>