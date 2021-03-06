<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/src/functions.php';
	$htaccess = 
'ErrorDocument 403 /error-404.html
ErrorDocument 404 /error-404.html

DirectoryIndex home.html

RewriteEngine On

RewriteCond %{HTTP:X-Scheme} =http
RewriteRule ^(.*)$ shahty\.kz/$1 [R=301,L]

RewriteCond %{HTTP:X-Scheme} =https
RewriteCond %{HTTP_HOST} ^www\.shahty.kz [NC]
RewriteRule ^(.*)$ shahty\.kz/$1 [R=301,L]

RewriteCond %{REQUEST_FILENAME} /robots.txt
RewriteCond "%{DOCUMENT_ROOT}/robots_%{HTTP_HOST}.txt" -f
RewriteRule ^(.*)$ robots_%{HTTP_HOST}.txt [NC,L]
RewriteRule ^shahtykz$ home.html [NC]
RewriteRule ^shahtykz/$ home.html [NC]';
	
	foreach( $pages as $i => $page) {
		$htaccess .= "\n".'RewriteRule ^'.$page->alias.'$ '.$page->alias.'.html [NC]';
		$htaccess .= "\n".'RewriteRule ^'.$page->alias.'/$ '.$page->alias.'.html [NC]';
	}
	
	$htaccess .= "\n".'RewriteRule ^favicon.ico$ shahty.kz/images/favicon.ico [R=302,L]'."\n";
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/.htaccess', $htaccess);
	
	foreach( $pages as $i => $page) {
		if( isset($page->alias) ) {
			ob_start();
			include 'modules/header.php';
			include 'templates/'.$page->template;
			include 'modules/footer.php';
			$html = ob_get_clean();
			file_put_contents($page->alias.'.html', $html);
			echo 'Страница '.$i.': '.$page->alias.' опупликована.<br>';
		}
	}
?>