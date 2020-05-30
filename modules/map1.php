<?php 
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
		
	global $contacts;
	global $articles;
?> 
    <div class="map-info-left">
        <div class="map-info-heading"><?=get_article_heading('article-map1');?></div>
        <div class="map-info-content"><?=get_article_content('article-map1');?></div>
        <div class="map-info-phone">
            <a href="tel:<?=$contacts[0]->phone;?>">
                <?=$contacts[0]->phone;?>
            </a>
        </div>
    </div>
    <div>
        <div class="map-widget lazy" id="map1" data-loader="ajax" data-src="/modules/map1-data.php">
            Загрузка карты...
        </div>
    </div>

