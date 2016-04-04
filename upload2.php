
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


        if(isset($_FILES['fileToUpload'])){

            $uploadname = $_FILES['fileToUpload']['name'];
            $uploadtmp = $_FILES['fileToUpload']['tmp_name'];
            $uploadtype = $_FILES['fileToUpload']['type'];

            $uploadname = preg_replace("#[^a-z0-9.]#i", "", $uploadname);


            if(!$uploadtmp) {
                die("No File Selected, Please upload again");
            }else{
                 move_uploaded_file($uploadtmp, "" . $uploadname);
                echo  '<img src="gtrtest.azurewebsites.net/'.$uploadname.'"/>' . "<br>";

            }
        }
    ?>
