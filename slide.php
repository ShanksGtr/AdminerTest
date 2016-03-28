<?php

include('simple_html_dom.php');
$html = file_get_html('http://www.videogamecountdown.com/');
$games = $html->find('div[class=inner]');

$games= array($games[0], $games[1], $games[3], $games[4], $games[5]);
foreach ($games as $game) {


$titles = $game->find('h3 a', 0)->plaintext;
$images = $game->find('div[class=gridimg] img', 0)->attr['src'];
$info = $game->find('div[class=gridimg] a', 0)->attr['href'];
$date = $game->find('div[class=date] span', 0)->outertext;
$html = file_get_html('http://www.videogamecountdown.com/' . $info);
$desc = $html->find('div[class=two_third]', 0)->innertext;
$details = $html->find('div[class="one_third last projectdetails"]', 0)->outertext;
$amazon = $html->find('div[class=pagerwrapper] a', -1)->outertext;
//$titles = $game->find('h3', 0);

?>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="responsiveslides.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="Style/foundation-icons/foundation-icons.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
    .rslides {
        position: relative;
        list-style: none;
        overflow: hidden;
        width: 100%;
        padding: 0;
        margin: 0;
    }

    .rslides li {
        -webkit-backface-visibility: hidden;
        position: absolute;
        display: none;
        width: 100%;
        left: 0;
        top: 0;
    }

    .rslides li:first-child {
        position: relative;
        display: block;
        float: left;
    }

    .rslides img {
        display: block;
        height: auto;
        float: left;
        width: 100%;
        border: 0;
    }


</style>
<body>
            <ul class="rslides">
                 <?php
                     echo '<li href="'.$info.'>"' . '<img src="'.$images.'"/>' . '</li>';
                        }
                 ?>
            </ul>
        <script>
            $(function() {
                $(".rslides").responsiveSlides();
            });
        </script>
    </body>
</html>