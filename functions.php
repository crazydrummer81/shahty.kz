<?php
		const DB_PATH = 'json';
		$modules = json_decode(file_get_contents(DB_PATH.'/modules.json'));
		$modules = $modules->modules;
		$pages = json_decode(file_get_contents(DB_PATH.'/pages.json'));
		$pages = $pages->pages;
		$articles = json_decode(file_get_contents(DB_PATH.'/articles.json'));
		$articles = $articles->articles;
		$contacts = json_decode(file_get_contents(DB_PATH.'/contacts.json'));
		$contacts = $contacts->contacts;

		function get_current_url() {
			return explode('?',$_SERVER['REQUEST_URI'])[0];
		}
		function get_module_heading($name) {
			$module = get_module($name);
			if( !$module ) { return 'Module does not exists';};
			if( $module->heading_tag == "" ) { $module->tag = 'div'; };
			return '<'.$module->heading_tag.'>'.$module->heading.'</'.$module->heading_tag.'>';
		}
		function get_module_content($name) {
			$module = get_module($name);
			if( !$module ) { return 'Module does not exists';};
			if( $module->tag == "" ) { $module->tag = 'div'; };

			$css_class		= ($module->css_class !=	'') ? ' class="'.			$module->css_class.'"'		: '';
			$css_id			= ($module->css_id !=		'') ? ' id="'.				$module->css_id.'"'			: '';
			$data_loader	= ($module->data_loader !=	'') ? ' data-loader="'.	$module->data_loader.'"'	: '';
			$data_src		= ($module->data_src !=		'') ? ' data-src="'.		$module->data_src.'"'		: '';

			if( (strpos($module->css_class, 'lazy') !== false && ($module->data_loader == 'ajax') ) ) {
				$data_src = ($module->url != '') ? ' data-src="'.$module->url.'"' : '';
				return '<'.$module->tag.$css_class.$css_id.$data_loader.$data_src.'>'.'</'.$module->tag.'>';
			};

			$result = '';
			$result .= '<'.$module->tag.$css_class.$css_id.$data_loader.$data_src.'>';
			if( file_exists($_SERVER['DOCUMENT_ROOT'].$module->url) ) { 
				ob_start();
					include $_SERVER['DOCUMENT_ROOT'].$module->url; 
					$result .= ob_get_contents();
				ob_end_clean();
			}
				else { echo 'Module script not exists or damaged...'; };
			$result .= '</'.$module->tag.'>';
			return $result;
		}
		function get_article_heading($alias) {
			return get_article($alias)->heading;
		}
		function get_article_content($alias) {
			return get_article($alias)->content;
		}
		function get_module($name) {
			global $modules;
			foreach( $modules as $module ) {
				if( $module->name == $name ) {
					return $module;
				}
			}
			return false;
		}
		function get_page($alias) {
			global $pages;
			foreach( $pages as $page ) {
				if( $page->alias == $alias ) {
					return $page;
				}
			}
			return false;
		}
		function get_article($alias) {
			global $articles;
			foreach( $articles as $article ) {
				if( $article->alias == $alias ) {
					return $article;
				}
			}
			return false;
		}
		function get_name_from_path($path) {
			preg_match('/([\w\d\.\-_]+)$/', $path, $matches);
			return str_replace('.php', '', $matches[0]);
		}
		function get_filename_from_path($path) {
			preg_match('/([\w\d\.\-_]+)$/', $path, $matches);
			return $matches[0];
		}
?>