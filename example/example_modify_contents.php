<?php

use voku\helper\HtmlDomParser;

require_once '../vendor/autoload.php';

// get DOM from URL or file
$html = HtmlDomParser::file_get_html('http://www.google.com/');

// remove all image
foreach ($html->find('img') as $e) {
  $e->outertext = '';
}

// replace all input
foreach ($html->find('input') as $e) {
  $e->outertext = '[INPUT]';
}

// dump contents
echo $html;
