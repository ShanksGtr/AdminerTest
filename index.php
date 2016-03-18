<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    <h1>We are testing now ADMINER! RAWR</h1>
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
        foreach(array_slice($html->find('img'),0,6) as $images)
            echo '<img src="'.$images->src.'"/>';

        foreach(array_slice($html->find('h3 a'),0) as $titles)
            echo $titles->href;


              // http://stackoverflow.com/questions/8765879/how-to-limit-foreach-loop-to-three-loops/8765910#8765910
       // foreach(array_slice($html->find('div[class=inner]'),0 , 6) as $class) {
          //  echo $class->innertext . "<br>";
         //   }



        ?>

    </div>
</body>
</html>