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
        include_once('simple_html_dom.php');
        $html = file_get_html('http://www.videogamecountdown.com/');
        foreach($html->find('img') as $images)

            echo '<img src="'.$images->src.'"/>' .  '<br>';
        //foreach($html->find('li') as $li)
            //echo $li->src . '<br>';

        ?>

    </div>
</body>
</html>