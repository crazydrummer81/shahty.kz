<?php 

require("module.php");

$templates_path = "templates";

$page_filename = "index.php";
file_put_contents($page_filename, module("$templates_path/main.html"));

// $page_filename = "price.html";
// file_put_contents($page_filename, module("$templates_path/price.html"));

$page_filename = "error-404.php";
file_put_contents($page_filename, module("$templates_path/404.html"));

// print(module("main.html"));
print(implode("",file("index.php")));


?>
