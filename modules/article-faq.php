<?php
	require_once 'functions.php';
	$module_alias = get_name_from_path(__FILE__);
	$article = get_article($module_alias);
?>
<ul id="my-accordion" class="accordionjs">

    <!-- Section 1 -->
    <li>
        <div>Section 1 title</div>
        <div>
            <!-- Section content here. -->
        </div>
    </li>

    <!-- Section 2 -->
    <li>
        <div>Section 2 title</div>
        <div>
            <!-- Section content here. -->
        </div>
    </li>

    <!-- Section 3 -->
    <li>
        <div>Section 3 title</div>
        <div>
            <!-- Section content here. -->
        </div>
    </li>

</ul>