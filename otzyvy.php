<?php
    require("module.php");
    require("addons/gallery-otzyvy.php");
    $page_title = file_get_contents("text/otzyvy/title.html");
    $page_description = file_get_contents("text/otzyvy/description.html");
    $h1 = file_get_contents("text/otzyvy/heading.html");
    $text = file_get_contents("text/otzyvy/content.html");
    
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
?>

<!DOCTYPE html>
<html  >
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title> <?php echo($page_title);?> </title>
    <meta name="description" content="<?php echo($page_description);?>" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/gallery.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.jbcallme.css">
    <!-- <script  src="js/jquery.maskedinput.js"></!-->
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

    echo('<div class="row"><div class="container">');  
    echo('<h1>'.$h1.'</h1>');
    echo('<article>'.$text."</article>\n");
    echo('</div></div>');
    
    echo("\n\n<div class='row'>\n    <div class='container'>");
    // include("addons/gallery-otzyvy.php");
    galleryOutput($gallery);
    echo("\n    </div>\n</div>");

    echo('<div class="row" style="padding: 40px 0px 40px 0px;"><div class="container">');
    $section_filename = "sections/features.html";
    echo(module($section_filename));
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
    
    // include("addons/gallery-otzyvy-style.php"); // Отложенная загрузка изображений (отзывы)
    galleryOutputCSS($gallery);
    
    echo('<script src="js/jquery.js"></script>');
    echo('<script src="js/jquery.jbcallme.js"></script>');

    $section_filename = "addons/form-popup.html";
    echo(module($section_filename));

?>

</body>
</html>