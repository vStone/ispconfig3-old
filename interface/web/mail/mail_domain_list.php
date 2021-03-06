<?php
require_once('../../lib/config.inc.php');
require_once('../../lib/app.inc.php');

/******************************************
* Begin Form configuration
******************************************/

$list_def_file = "list/mail_domain.list.php";

/******************************************
* End Form configuration
******************************************/


//* Check permissions for module
$app->auth->check_module_permissions('mail');

$app->uses('listform_actions');

// Limit the results to alias domains
// $app->listform_actions->SQLExtWhere = "type = 'local'";

$app->listform_actions->onLoad();


?>