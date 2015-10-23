<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require __DIR__ . '/../../vendor/autoload.php';

$file = file_get_contents(__DIR__ . '/basic/template_style1.dwt');

$scanned = new UNL_DWT_Scanner($file);

// Modify the scanned content
$scanned->content .= '<h3>Scanned content from the left nav:</h3>';

// Also, access the content that was scanned in
$scanned->content .= '<pre>'.$scanned->leftnav.'</pre>';

echo $scanned;
