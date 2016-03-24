<?php
include('simple_html_dom.php');
$html = file_get_html('http://www.videogamecountdown.com/');


foreach($html->find('div[class=inner]') as $body) {

?>
<html>
    <head>
        <script>
            function slider() {
                img[] = new Image();
                img[] = "";

                var number = 0;

                function nextbutton() {
                    number++;
                    if (number > 2) {
                        number = 0;
                    }
                    document.slider = img[number];
                }

                function prebutton() {
                    number--;
                    if (number < 0) {
                        number = 2;
                    }
                    getelementbyid.slider = img[number];
                }
            }
        </script>
    </head>
    <body>
        <div id="slider"><?php echo "<script>function slider('$body->outertext')</script>";} ?></div>
        <form name="form">
            <input type="button" value="previous" onClick="prebutton();">
            <input type="button" value="next" onClick="nextbutton();">
        </form>
    </body>
</html>