<?php

$form['title'] = "Snippets";
$form['description'] = 'Form to create new snippets';
$form['name'] = 'web_snippet';
$form['action'] = 'web_snippet_edit.php';
$form['db_table'] = 'web_snippet';
$form['db_table_idx'] = 'snippet_id';

$form['db_history'] = "yes";

$form['tab_default'] = 'snippets';
$form['list_default'] = 'web_snippet_list.php';
$form['auth'] = 'yes';


$form['tabs']['snippets'] = array (
    'title' => 'Snippets',
    'width' => 80,
    'template' => 'templates/web_snippets_snippet_edit.htm',
    'fields' => array(
        
        
    ),
    
    
);
