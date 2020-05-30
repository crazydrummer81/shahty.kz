
    <!-- </div> -->
<?php
    $module_name = 'footer-links';
	$module = get_module($module_name);
	if( $module->shared )
		echo get_module_content($module_name);
?>
    <link rel="stylesheet" type="text/css" href="css/jquery.jbcallme.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.jbcallme.js"></script>
    <script src="js/form-popup.js"></script>
    <script src="js/jquery.lazy.min.js"></script>
    <script src="js/jquery.lazy.plugins.min.js"></script>
    <?php if( get_current_url() == '/page_home' ) : ?>
        <link rel="stylesheet" type="text/css" href="css/gallery.css" />
        <link rel="stylesheet" type="text/css" href="plugins/m2slider-simple.css" />
        <link rel="stylesheet" type="text/css" href="css/accordion.css" />
        <script src="plugins/m2slider-simple.js"></script>
        <script src="js/accordion.min.js"></script>
        <?php endif; ?>
        <script src="js/script.js"></script>
        
</body>
</html>
