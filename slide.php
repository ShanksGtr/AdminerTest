<?php
include('simple_html_dom.php');
$html = file_get_html('http://www.videogamecountdown.com/');


foreach($html->find('div[class=inner]') as $body)


     echo  $body->outertext;
?>
<html>
    <head>
        <script>
            var img = new Array();
            img[0] = new Image();
            img[0].src = "1.jpg";
            img[1] = new Image();
            img[1].src = "2.jpg";
            img[2] = new Image();
            img[2].src = "3.jpg";

                var number = 0;

            function nextbutton(){
                number++;
                if(number >2 ) {
                    number = 0;
                }
                document.slider.src= img[number].src;
            }

            function prebutton(){
                number--;
                if(number < 0){
                    number = 2;
                }
                document.slider.src= img[number].src
            }

        </script>
    </head>
    <body>
        <img src="1.jpg" width="800" height="600" name="slider">
        <form name="form">
            <input type="button" value="previous" onClick="prebutton();">
            <input type="button" value="next" onClick="nextbutton();">
        </form>
    </body>
</html>