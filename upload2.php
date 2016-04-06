
    <?php


    /*if (isset($_POST['submit'])) {
        require 'Cloudinary.php';
        require 'Uploader.php';
        require 'Api.php';

        \Cloudinary::config(array(
            "cloud_name" => "dt9jemvrx",
            "api_key" => "353835988395176",
            "api_secret" => "xb8fpFdk5i8j920ALSP_Uj45Lyc"
        ));

    \Cloudinary\Uploader::upload($_FILES["file"]["tmp_name"],
        array(
            "public_id" => "sample_id",
            "crop" => "limit", "width" => "2000", "height" => "2000",
            "eager" => array(
                array( "width" => 200, "height" => 200,
                    "crop" => "thumb", "gravity" => "face",
                    "radius" => 20, "effect" => "sepia" ),
                array( "width" => 100, "height" => 150,
                    "crop" => "fit", "format" => "png" )
            ),
            "tags" => array( "special", "for_homepage" )
        ));}*/
/////////////////////////////////////////////////////////////////////////////
    // https://www.youtube.com/watch?v=wEmxwNLjf_c  && http://www.w3schools.com/php/php_file_upload.asp

        if(isset($_FILES['fileToUpload'])){
            $db = new mysqli("eu-cdbr-azure-north-d.cloudapp.net",
                "be56106772d6a4", "33eeb80a", "SGamers" );

            if ($db->connect_error){
                echo "Error Error Error";
            }
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            $uploadname = $_FILES['fileToUpload']['name'];
            $uploadname = mt_rand(10000, 99999).$uploadname;
            $uploadtmp = $_FILES['fileToUpload']['tmp_name'];
            $uploadtype = $_FILES['fileToUpload']['type'];
            $filesize = $_FILES['fileToUpload']['size'];
            // incase there's a space in the name or so
            $uploadname = preg_replace("#[^a-z0-9.]#i", "", $uploadname);

            $imageFileType = pathinfo($uploadname,PATHINFO_EXTENSION);

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                die ("Sorry, only JPG, JPEG & PNG  files are allowed.");}

            if(($filesize > 1000000)) {
                die("File is more than 1mb");
            }

            if(!$uploadtmp) {
                die("No File Selected, Please upload again");

            }else{

                $userid= 861;
                move_uploaded_file($uploadtmp, "" . $uploadname);
                $sqlinsert= "UPDATE profiles SET avatar='$uploadname' WHERE user_id='$userid'";
                $result = mysqli_query($db, $sqlinsert);
                //echo  '<img src="'.$uploadname.'"/>' . "<br>";
                echo  '<img src="'.$uploadname.'"/>' . "<br>";


            }
        }



    ?>
