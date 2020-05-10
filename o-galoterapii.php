<?php
    require("module.php");
    $page_title = file_get_contents("text/o-galoterapii/title.html");
    $page_description = file_get_contents("text/o-galoterapii/description.html");
    $h1 = file_get_contents("text/o-galoterapii/heading.html");
    $text = file_get_contents("text/o-galoterapii/content.html");
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

    echo('<div class="row"><div class="container" style="flex-direction: column;">');  
    echo('<h1>'.$h1.'</h1>');
    echo('<article>'."\n");
    echo('<p style="font-size: 2em; text-align:left; font-weight: 700;">Страница в разработке...</p>');
    $section_filename = file_get_contents("text/o-galoterapii/content.html");
    echo($section_filename);
    echo("</article>\n");

    echo('</div></div>');
    
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