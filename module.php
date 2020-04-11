<?php

    function remove_braces($str) {
        return(preg_replace('/\{|\}/', "", $str));
        
    };

    function module($label)
    {
        $text = "";
        $pattern = "/\{\{(.*)\}\}/";
        if (file_exists($label)) {
            $content = file($label);
            
            $i = 0;
            foreach($content as $line) {
                if (preg_match($pattern, $line, $pathes, PREG_OFFSET_CAPTURE)) {
                    $path = remove_braces($pathes[0][0]).".html";
                    // print("\nPATH: $path\nPOS:".$pathes[0][1]."\n");
                    $line = preg_replace($pattern, module($path), $line);
                };

                $text = $text.$line;
            }
        } else {
            $text = "МОДУЛЬ $label В РАЗРАБОТКЕ";
        } 
        return($text);
        
    };

?>
