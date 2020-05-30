<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
    $module_this = get_module('gallery-otzyvy');
    $image_set = $module_this->data->image_set;
?>

<figure class="gallery-otzyvy">
    <div class="gallery-otzyvy--column">
        <div class="gallery-otzyvy--item "><img class="lazy" data-src="img/<?=$image_set[0]->src?>" alt="<?=$image_set[0]->alt?>"></div>
        <div class="gallery-otzyvy--item"><img class="lazy" data-src="img/<?=$image_set[1]->src?>" alt="<?=$image_set[1]->alt?>"></div>
    </div>
    <div class="gallery-otzyvy--column">
        <div class="gallery-otzyvy--item"><img class="lazy" data-src="img/<?=$image_set[2]->src?>" alt="<?=$image_set[2]->alt?>"></div>
        <div class="gallery-otzyvy--item"><img class="lazy" data-src="img/<?=$image_set[3]->src?>" alt="<?=$image_set[3]->alt?>"></div>
        <div class="gallery-otzyvy--item"><img class="lazy" data-src="img/<?=$image_set[4]->src?>" alt="<?=$image_set[4]->alt?>"></div>
    </div>
    <div class="gallery-otzyvy--column">
        <div class="gallery-otzyvy--item"><img class="lazy" data-src="img/<?=$image_set[5]->src?>" alt="<?=$image_set[5]->alt?>"></div>
        <div class="gallery-otzyvy--item"><img class="lazy" data-src="img/<?=$image_set[6]->src?>" alt="<?=$image_set[6]->alt?>"></div>
        <div class="gallery-otzyvy--item"><img class="lazy" data-src="img/<?=$image_set[7]->src?>" alt="<?=$image_set[7]->alt?>"></div>
    </div>
</figure>