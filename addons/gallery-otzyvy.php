
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

$gallery_directory = "https://shahty.kz/img/otzyvy/";
$gallery = array();
$gallery = [
    [
        new Image($gallery_directory."otzyv-001.webp"),
        new Image($gallery_directory."otzyv-002.webp")
    ],
    [
        new Image($gallery_directory."otzyv-004.webp"),
        new Image($gallery_directory."otzyv-005.webp"),
        new Image($gallery_directory."otzyv-006.webp")
    ],
    [
        new Image($gallery_directory."otzyv-003.webp"),
        new Image($gallery_directory."otzyv-007.webp"),
        new Image($gallery_directory."otzyv-008.webp")
    ]
];
    
    echo("\n\n<figure class='gallery'>");
    foreach($gallery as $column) {
        echo("\n    <div class='gallery-column'>");
        $rate = 0.8;
        foreach($column as $item) {
            echo("\n        <div id=".$item->html_id." class='gallery-item'></div>");
        };
        echo("\n    </div>");
    };
    echo("\n</figure>");
?>