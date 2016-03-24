<?php
include('simple_html_dom.php');
$html = file_get_html('http://www.videogamecountdown.com/');
foreach($html->find('div[class=inner]') as $body)
    echo $body->outertext;