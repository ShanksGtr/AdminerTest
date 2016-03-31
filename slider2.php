<html>
<head>
    <title>testo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="Style/foundation-icons/foundation-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery.slides.min.js"></script>


    <script>
        $(function(){
            $("#slides").slidesjs({

            });
        });
    </script>
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
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        top: 50%;
        left: 0%;
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
        z-index: 3;
        position: absolute;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        top: 50%;
        right: 0%;
        opacity: 0.7;
        text-indent: -9999px;
        overflow: hidden;
        text-decoration: none;
        height: 61px;
        width: 38px;
        background: transparent url("http://responsiveslides.com/themes/themes.gif") no-repeat right top;
        margin-top: -45px;
    }

    .rslides_tabs {
        text-align: center;
        margin-top: 5px;
    }

    .rslides_tabs a {
        text-indent: -9999px;
        overflow: hidden;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
        background: #ccc;
        background: rgba(0,0,0, .2);
        display: inline-block;
        _display: block;
        -webkit-box-shadow: inset 0 0 2px 0 rgba(0,0,0,.3);
        -moz-box-shadow: inset 0 0 2px 0 rgba(0,0,0,.3);
        box-shadow: inset 0 0 2px 0 rgba(0,0,0,.3);
        width: 20px;
    }

    .rslides_tabs li {
        display: inline;
        margin-right: 5px;

    }

    .rslides_here a {
        text-indent: -9999px;
        overflow: hidden;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
        background: #222;
        background: rgba(0,0,0, .8);
        display: inline-block;
        _display: block;
        -webkit-box-shadow: inset 0 0 2px 0 rgba(0,0,0,.3);
        -moz-box-shadow: inset 0 0 2px 0 rgba(0,0,0,.3);
        box-shadow: inset 0 0 2px 0 rgba(0,0,0,.3);
        width: 20px;

    }



    @media all and (max-width: 699px) and (min-width: 200px) {
        .next {
            z-index: 3;
            position: fixed;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            top: 50%;
            right: -2%;
            opacity: 0.7;
            text-indent: -9999px;
            overflow: hidden;
            text-decoration: none;
            height: 61px;
            width: 34px;
            background: transparent url("http://responsiveslides.com/themes/themes.gif") no-repeat right top;
            margin-top: -45px;
        }

        .prev {
            z-index: 3;
            position: fixed;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            top: 50%;
            left: -2%;
            opacity: 0.7;
            text-indent: -9999px;
            overflow: hidden;
            text-decoration: none;
            height: 61px;
            width: 34px;
            background: transparent url("http://responsiveslides.com/themes/themes.gif") no-repeat left top;
            margin-top: -45px;
        }

    }


    img {
        width: 100%;
    }
</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">SGamers</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">UpcomingGames<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="upcoming.php?plat=ps3">Playstation 3</a></li>
                        <li><a href="upcoming.php?plat=ps4">Playstation 4</a></li>
                        <li><a href="upcoming.php?plat=vita">Playstation Vita</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="upcoming.php?plat=xbox">Xbox One</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="upcoming.php?plat=wii">Wii U</a></li>
                        <li><a href="upcoming.php?plat=3ds">3DS</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="upcoming.php?plat=pc">PC</a></li>
                    </ul>
                </li>
            </ul>
            </nav>
<div class="container">
    <div class="jumbotron">
        <div id="slides">
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


                echo '<div class="row textglow ">' . '<div class="col col-md-6">' . "<h2>" . $titles . "</h2>" . '<img src="' . $images . '"/>' . '</div>' .
                '<div class="col col-md-6">' . $desc . "<br>" . "<p>Upcoming in: " . $date . "</p>" . "<br>" . $details . "<br>" . $amazon . '</div>' . '</div>';
            }
            ?>

        </div>
    </div>
</div>

</body>
<link rel="stylesheet" type="text/css" href="test.css">
</html>