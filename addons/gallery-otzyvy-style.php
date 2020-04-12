<?php
echo("\n\n<style>");
$rate = 0.9;
    foreach($gallery as $column) {
        foreach($column as $item) {
            $width = (int)($item->width * $rate);
            $height = (int)($item->height * $rate);
            echo("\n#".$item->html_id.' { background-image: url('.$item->src.'); width:'.$width.'px;height:'.$height."px; }");
        }
    }
echo("\n@media all and (max-width: 1200px) {");
$rate = 0.8;
foreach($gallery as $column) {
    foreach($column as $item) {
        $width = (int)($item->width * $rate);
        $height = (int)($item->height * $rate);
        echo("\n#".$item->html_id.'{ width:'.$width.'px;height:'.$height."px; }");
    }
}
echo("\n@media all and (max-width: 1000px) {");
$rate = 0.7;
foreach($gallery as $column) {
    foreach($column as $item) {
        $width = (int)($item->width * $rate);
        $height = (int)($item->height * $rate);
        echo("\n#".$item->html_id.'{ width:'.$width.'px;height:'.$height."px; }");
    }
}
echo('}');
echo("\n@media all and (max-width: 900px) {");
$rate = 0.6;
foreach($gallery as $column) {
    foreach($column as $item) {
        $width = (int)($item->width * $rate);
        $height = (int)($item->height * $rate);
        echo("\n#".$item->html_id.'{ width:'.$width.'px;height:'.$height."px; }");
    }
}
echo('}');
echo("\n@media all and (max-width: 800px) {");
$rate = 1;
foreach($gallery as $column) {
    foreach($column as $item) {
        $width = (int)($item->width * $rate);
        $height = (int)($item->height * $rate);
        echo("\n#".$item->html_id.'{ width:'.$width.'px;height:'.$height."px; }");
    }
}
echo('}');
echo("\n@media all and (max-width: 370px) {");
    $rate = 0.8;
    foreach($gallery as $column) {
        foreach($column as $item) {
            $width = (int)($item->width * $rate);
            $height = (int)($item->height * $rate);
            echo("\n#".$item->html_id.' { width:'.$width.'px;height:'.$height."px; }");
        }
    }
echo('}');
    
echo("\n</style>\n\n");
?>