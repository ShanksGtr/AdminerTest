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
    <title>test</title>
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

    #subscribeForm {
        display: none;
    }

    .prev {
        z-index: 3;
        position: absolute;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        top: 50%;
        left: 0;
        opacity: 0.7;
        text-indent: -9999px;
        overflow: hidden;
        text-decoration: none;
        height: 61px;
        width: 38px;
        background: transparent url("http://responsiveslides.com/themes/themes.gif") no-repeat left top;
        margin-top: -45px;
    }

    .next {
        left: auto;
        background-position: right top;
        right: 0;
    }

</style>
<body>
<div class="container">
    <div class="jumbotron">
    <div class="rslides">
                <?php
                    echo '<li>';
                echo '<div class="row textglow ">' . '<div class="col col-md-6">' . "<h2>" . $titles . "</h2>" . '<img src="' . $images . '"/>' . '</div>' .
                    '<div class="col col-md-6">' . $desc . "<br>" . "<p>Upcoming in: " . $date . "</p>" . "<br>" . $details . "<br>" . $amazon . '</div>' . '</div>';
                }
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
                    pager: false,           // Boolean: Show pager, true or false
                    nav: true,             // Boolean: Show navigation, true or false
                    random: false,          // Boolean: Randomize the order of the slides, true or false
                    pause: false,           // Boolean: Pause on hover, true or false
                    pauseControls: true,    // Boolean: Pause when hovering controls, true or false
                    prevText: "               <",   // String: Text for the "previous" button
                    nextText: "                                                         >",       // String: Text for the "next" button
                    maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
                    navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
                    manualControls: "",     // Selector: Declare custom pager navigation
                    namespace: "rslides",   // String: Change the default namespace used
                    before: function(){},   // Function: Before callback
                    after: function(){}     // Function: After callback
                });
            });
        </script>
        </div>
    </div>
    </body>
</html>