<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

//setup php for working with Unicode data
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');


include_once("testPageFlex.php");



?>
