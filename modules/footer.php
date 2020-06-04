
    <!-- </div> -->

    <div class="row">
        <div class="container-fluid" style="padding-top:40px;">
            <?php
                $module_name = 'map1';
                $module = get_module($module_name);
                if( $module->shared )
                    echo get_module_heading($module_name);
                    echo get_module_content($module_name);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <?php
                $module_name = 'map2';
                $module = get_module($module_name);
                if( $module->shared )
                    echo get_module_content($module_name);
            ?>
        </div>
	</div>
<?php
    $module_name = 'footer-links';
	$module = get_module($module_name);
	if( $module->shared )
		echo get_module_content($module_name);
?>    
    <link rel="stylesheet" type="text/css" href="css/jquery.jbcallme.css">
    <link rel="stylesheet" type="text/css" href="plugins/m2map.css">
    <script src="js/jquery.min.js"></script>
    <script src="plugins/m2map.js"></script>
    <script src="js/jquery.jbcallme.js"></script>
    <script src="js/form-popup.js"></script>
    <script src="js/jquery.lazy.min.js"></script>
    <script src="js/jquery.lazy.plugins.min.js"></script>
    <?= $page->additional_body_elements; ?>
    <script src="js/script.js"></script>
        
</body>
</html>
