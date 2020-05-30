<div class="row" style="display:none;"></div>
<?php

$json = file_get_contents("json/pricelist.json");
    $pricelist = json_decode($json,true);
    
    $h=0; $p_id = 0;
    for ($cat_id = 3; $cat_id <=6; $cat_id++) {
        
        echo('<div class="row"><div class="container" style="flex-direction: column;">');
        if( $cat_id == 3 ) echo '<h1>'.get_article_heading('article-solyanye-shahty-almaty').'</h1><div class="divider"></div>';
        echo '<h2>'.$pricelist["categories"][$cat_id]["description"]["heading"].'<br/></h2>';

        foreach ($pricelist["products"] as $product) {
            if ($product["categorie_id"] == $cat_id) {
        
                echo('<div class="price-element">'."\n");
                echo('<span class="price-product">'.$pricelist["products"][$p_id]["name"]."</span>\n");
                echo('<div class="price-link"></div>');
                if($pricelist["products"][$p_id]["price_old"] <> $pricelist["products"][$p_id]["price_actual"]) {
                    echo('<span class="price-old">'.$pricelist["products"][$p_id]["price_old"]."</span>\n");
                }
                echo('<span class="price-actual">'.$pricelist["products"][$p_id]["price_actual"]."</span>\n");
                echo('</div>');
                $p_id++;
            }
        }
        echo('<span class="price-note">'.$pricelist["categories"][$cat_id]["description"]["content"].'</span>');
        echo('</div></div>');
    }
    
?>