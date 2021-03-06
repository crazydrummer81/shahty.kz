<?php 
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
		
	global $contacts;
	global $articles;
?> 

    <!-- <div> -->
        <div class="map-widget" id="map2">
            <div class="lazy" style="height:100%" data-loader="ajax" data-src="/modules/map2-data.php">
                Загрузка карты...
            </div>
            <div class="m2map-overlay" id="map2-overlay"></div>
        </div>
    <!-- </div> -->
    <div class="map-info">
        <div class="map-info-heading"><?=get_article_heading('article-map2');?></div>
        <div class="map-info-content"><?=get_article_content('article-map2');?></div>
        <div class="map-info-phone">
            <a href="tel:<?=$contacts[1]->phone;?>">
                <?=$contacts[1]->phone;?>
            </a>
        </div>
    </div>
