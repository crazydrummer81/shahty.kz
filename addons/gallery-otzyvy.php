
<?php

class Image {
    public $html_id ="";
    public $width = "";
    public $height = "";
    public $src = "";
    function __construct($src) {
        $this->html_id = str_replace([".","/",":"], "_", $src);
        $this->src = $src;
        list($this->width, $this->height) = getimagesize($src);
    }
}
    
    function galleryOutput($gallery) { // Выводит сетку фотографий (массив объектов Image), как она задана в массиве
        echo("\n\n<figure class='gallery'>");
        foreach($gallery as $column) {
            echo("\n    <div class='gallery-column'>");
            foreach($column as $item) {
                printf("\n        <div id=%s class='gallery-item' style='width:%s; height:%s;'></div>", $item->html_id, $item->width, $item->height);
            };
            echo("\n    </div>");
        };
        echo("\n</figure>");
    }

    function galleryOutputCSS($gallery) {
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
    }
?>