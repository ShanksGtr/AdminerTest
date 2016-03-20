<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body data-gr-c-s-loaded="true">
    <h1>We are testing now ADMINER! RAWR and taking info</h1>
    <div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
    <div style="img: border-radius: 50%; height: 200px; width: 200px;">
        <?php
        include('simple_html_dom.php');
        $html = file_get_html('http://www.videogamecountdown.com/');


       // foreach(array_slice($html->find('img h3 a'),0,6) as $images)
       // foreach($html->find('h3 a') as $titles)
      //  foreach(array_slice($html->find('div [class=date]'),0, 1) as $time)

           // echo '<img src="'.$images->src.'"/>' . "<br>" .
            //    '<a href="http://www.videogamecountdown.com/'.$images->href.'"> ->For more information</a>' . "<br>" .
            //    $time->span;



              // http://stackoverflow.com/questions/8765879/how-to-limit-foreach-loop-to-three-loops/8765910#8765910
        $games = $html->find('div[class=inner]');
        $array = array(0,1,2,3,4);
        $array[$games];

        foreach ($games as $game) {
        //foreach(array_slice($html->find('div.inner'),0 , 6) as $class) {
           // $titles = $games->find('div[class=inner] h3', 0)->attr['a'];
            $images = $game->find('div[class=gridimg] img',0)->attr['src'];
            $info = $game->find('div[class=gridimg] a',0)->attr['href'];
            $date = $game->find('div[class=date] span', 0)->outertext;
            //$titles = $games->find('h3', 0);
            echo '<img src="'.$images.'"/>' . "<br>" .
                '<a href="http://www.videogamecountdown.com/'.$info.'"> ->For more information</a>' . "<br>"
                . $date;
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
        foreach($html->find('body') as $body)
            echo $body->innertext;
        ?>
        </div>

    </div>
</body>
</html>