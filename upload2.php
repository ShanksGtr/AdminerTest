
    <?php
        require 'Cloudinary.php';
        require 'Uploader.php';
        require 'Api.php';

        \Cloudinary::config(array(
            "cloud_name" => "dt9jemvrx",
            "api_key" => "353835988395176",
            "api_secret" => "xb8fpFdk5i8j920ALSP_Uj45Lyc"
        ));

    \Cloudinary\Uploader::upload($_POST["file"]["tmp_name"],
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
        ));
    ?>
