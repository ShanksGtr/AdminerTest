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
        max-width: 500px;
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
    <div class="rslides">
                <?php
                    echo '<li>';
                    echo '<img src="'.$images.'"/>' . $details;}
                    echo '</li>';
                 ?>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="responsiveslides.min.js"></script>
        <script>
            $(function() {
                $(".rslides").responsiveSlides({
                    auto: false,             // Boolean: Animate automatically, true or false
                    speed: 500,            // Integer: Speed of the transition, in milliseconds
                    timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
                    pager: true,           // Boolean: Show pager, true or false
                    nav: true,             // Boolean: Show navigation, true or false
                    random: false,          // Boolean: Randomize the order of the slides, true or false
                    pause: false,           // Boolean: Pause on hover, true or false
                    pauseControls: true,    // Boolean: Pause when hovering controls, true or false
                    prevText: "Previous",   // String: Text for the "previous" button
                    nextText: "Next",       // String: Text for the "next" button
                    maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
                    navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
                    manualControls: "",     // Selector: Declare custom pager navigation
                    namespace: "row",   // String: Change the default namespace used
                    before: function(){},   // Function: Before callback
                    after: function(){}     // Function: After callback
                });
            });
        </script>
    </body>
</html>