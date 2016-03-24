<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="Style/foundation-icons/foundation-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>We are testing now ADMINER! RAWR and taking info</h1>
    <div hidden>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
    <div class="container">
        <div class="jumbotron">
            <div>
                <i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>
        <?php



       // foreach(array_slice($html->find('img h3 a'),0,6) as $images)
       // foreach($html->find('h3 a') as $titles)
      //  foreach(array_slice($html->find('div [class=date]'),0, 1) as $time)

           // echo '<img src="'.$images->src.'"/>' . "<br>" .
            //    '<a href="http://www.videogamecountdown.com/'.$images->href.'"> ->For more information</a>' . "<br>" .
            //    $time->span;
        // http://stackoverflow.com/questions/8765879/how-to-limit-foreach-loop-to-three-loops/8765910#8765910
        //foreach(array_slice($html->find('div.inner'),0 , 6) as $class) {

        include('simple_html_dom.php');
        $html = file_get_html('http://www.videogamecountdown.com/');
        $games = $html->find('div[class=inner]');

        $games= array($games[0], $games[1], $games[3], $games[4], $games[5]);
        foreach ($games as $game) {


            $titles = $game->find('h3 a', 0)->plaintext;
            $images = $game->find('div[class=gridimg] img',0)->attr['src'];
            $info = $game->find('div[class=gridimg] a',0)->attr['href'];
            $date = $game->find('div[class=date] span', 0)->outertext;
            $html = file_get_html('http://www.videogamecountdown.com/'.$info);
            $desc = $html->find('div[class=two_third]', 0)->innertext;
            $details = $html->find('div[class="one_third last projectdetails"]', 0)->outertext;
            $amazon = $html->find('div[class=pagerwrapper] a', -1)->outertext;
            //$titles = $game->find('h3', 0);

            echo '<div class="col col-md-6 colum1">' .  "<h2>".$titles."</h2>" . '<img src="'.$images.'"/>' . '</div>' .
                '<div class="col col-md-6">' . $desc ."<br>" . "<p>Upcoming in: ".$date."</p>" . "<br>" . $details . "<br>" . '<span class="input-group-addon fa fa-amazon" id="basic-addon1"></span>' . $amazon . '</div>';
        }

           // $item['image'] = ($class->find('img')->src);
           // echo $class->href . "<br>".
              //  $class->a . "<br>".
              //  $class->£item['image'] . "<br>".
              //  $class->date . "<br>" ;
        //    }



        ?>
                <div hidden>
                    <?php
                    include('simple_html_dom.php');
                    $html = file_get_html('http://www.videogamecountdown.com/');
                    foreach($html->find('body script') as $body)
                        echo $body->outertext;
                    ?>
                </div>
                </div>
        </div>

    </div>

</body>
</html>