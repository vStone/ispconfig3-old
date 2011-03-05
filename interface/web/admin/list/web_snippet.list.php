<?php

/*
  Datatypes:
  - INTEGER
  - DOUBLE
  - CURRENCY
  - VARCHAR
  - TEXT
  - DATE
 */

$liste['name'] = 'web_snippet';

$liste['table'] = 'web_snippet';

$liste['table_idx'] = 'snippet_id';

$liste['search_prefix'] = "search_";

$liste["records_per_page"] = 15;

// Script File of the list
$liste["file"] = "web_snippet_list.php";

// Script file of the edit form
$liste["edit_file"] = "web_snippet_edit.php";

// Script File of the delete script
$liste["delete_file"] = "web_snippet_del.php";

// Paging Template
$liste["paging_tpl"] = "templates/paging.tpl.htm";


//* Enable auth
$liste['auth'] = 'no';


/* * ***************************************************
 * Search Fields
 * *************************************************** */

$liste["item"][] = array(
    'field' => "snippet_id",
    'datatype' => "INTEGER",
    'formtype' => "TEXT",
    'op' => "=",
    'prefix' => "",
    'suffix' => "",
    'width' => "",
    'value' => ""
);

$liste['item'][] = array(
    'field' => 'name',
    'datatype' => 'VARCHAR',
    'op' => 'like',
    'prefix' => '%',
    'suffix' => '%',
    'width' => '',
);

$liste['item'][] = array(
    'field' => 'version_id',
    'datatype' => 'INTEGER',
    'op' => '=',
    'prefix' => '',
    'suffix' => '',
    'width' => 11,
);

