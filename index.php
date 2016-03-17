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
    <div>
        <?php
            $content = file_get_contents("http://www.videogamecountdown.com/");
            preg_match_all('/<body>(.*?)<\/body>/s',$content,$output,PREG_SET_ORDER);
            echo $output;
        ?>
    </div>
</body>
</html>