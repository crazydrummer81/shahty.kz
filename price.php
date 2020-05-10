<?php
    require("module.php");
    $page_title = file_get_contents("text/price/title.html");
    $page_description = file_get_contents("text/price/description.html");
    $h1 = file_get_contents("text/price/h1.html");
?>

<!DOCTYPE html>
<html  >
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title> <?php echo($page_title);?> </title>
    <meta name="description" content="<?php echo($page_description);?>" />
    <meta name="theme-color" content="#015367">
    <link rel="icon" sizes="192x192" href="img/logo-192x192-shahty-kz.png">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/price.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.jbcallme.css">
    <!-- <script src="js/jquery.maskedinput.js"></!-->
    <?php
        echo(file_get_contents("addons/schema-org-json.html"));
        echo(file_get_contents("addons/analytics.html"));
    ?>
</head>
<body>

<?php


    echo('<header>');
    $section_filename = "sections/header.html";
    echo(module($section_filename));
    echo('</header>');

    echo('<nav class="dws-menu">');
    $section_filename = "sections/nav.html";
    echo(module($section_filename));
    echo('</nav>');
    echo('<div class="row" style="display:none"></div>');

    
    $json = file_get_contents("text/price/pricelist.json");
    $pricelist = json_decode($json,true);
    $headings = file("text/price/headings.txt"); 
    
    
    $h=0; $p_id = 0;
    for ($cat_id = 3; $cat_id <=6; $cat_id++) {
        
        

        $categorie = $pricelist["categories"][$cat_id]["heading"];
        echo('<div class="row"><div class="container" style="flex-direction: column;">');
        
        if($p_id == 0) {
            echo('<h1>');
                echo(file_get_contents("text/price/h1.html"));
            echo('</h1><div class="divider"></div>');
        }

        echo('<h2>');
        echo($headings[$h]); $h++;
        echo('<br/>'.$categorie.'</h2>');

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
        $note = file_get_contents("text/price/note.html");
        echo('<span class="price-note">'.$note.'</span>');
        $section_filename = "addons/button-buy.html";
        echo(module($section_filename));
        echo('</div></div>');
    }

    echo('<div class="row" style="padding: 40px 0px 0px 0px;"><div class="container-fluid">');
    $section_filename = file_get_contents("text/map/heading.html");
    echo('<h2>'.$section_filename.'</h2>');
    $section_filename = "sections/map-1.html";
    echo(module($section_filename));
    echo('</div></div>');
    
    $section_filename = "sections/map-2.html";
    echo('<div class="row" style="padding: 0px;"><div class="container-fluid">');
    echo(module($section_filename));
    echo('</div></div>');
    
    $section_filename = "sections/footer.html";
    echo('<footer>');
    echo(module($section_filename));
    echo('</footer>');
    
    echo('<script src="js/jquery.js"></script>');
    echo('<script src="js/jquery.jbcallme.js"></script>');

    $section_filename = "addons/form-popup.html";
    echo(module($section_filename));


?>

        </div>
</body>
</html>