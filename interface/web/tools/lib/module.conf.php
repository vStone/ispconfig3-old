<?php

global $conf;

$module['name'] 		= 'tools';
$module['title'] 		= 'Tools';
$module['template'] 	= 'module.tpl.htm';
$module['startpage'] 	= 'tools/index.php';
$module['tab_width']    = '60';


//**** Change User password
$items = array();

$items[] = array( 'title' 	=> 'Password and Language',
				  'target' 	=> 'content',
				  'link'	=> 'tools/user_settings.php');


$module['nav'][] = array(	'title'	=> 'User Settings',
							'open' 	=> 1,
							'items'	=> $items);


$menu_dir = ISPC_WEB_PATH.'/tools/lib/menu.d';
		
if (is_dir($menu_dir)) {
	if ($dh = opendir($menu_dir)) {
		//** Go trough all files in the menu dir
		while (($file = readdir($dh)) !== false) {
			if($file != '.' && $file != '..' && substr($file,-9,9) == '.menu.php') {
				include_once($menu_dir.'/'.$file);
			}
		}
	}
}

?>