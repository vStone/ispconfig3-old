<?php

require_once('../../lib/config.inc.php');
require_once('../../lib/app.inc.php');

//* Check permissions for module
$app->auth->check_module_permissions('admin');

//* This is only allowed for administrators
if(!$app->auth->is_admin()) die('only allowed for administrators.');
if($conf['demo_mode'] == true) $app->error('This function is disabled in demo mode.');


/******************************************
* Begin Form configuration
******************************************/

$list_def_file = "list/web_snippet.list.php";

/******************************************
* End Form configuration
******************************************/


$app->load('listform_actions');


class list_action extends listform_actions {
	
}

$list = new list_action;
//$list->SQLExtWhere = "type = 'vhost'";
$list->onLoad();



