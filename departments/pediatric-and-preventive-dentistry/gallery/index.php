<?php 

$ROOT = "../../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "departments/pediatric-and-preventive-dentistry/gallery/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/galleryStyles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg"/>
        <h1>
            DEPARTMENT OF PEDODONTICS
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <h1>Gallery</h1>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/dept-image1.jpg" alt="Department Image" />
                    
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/img2.jpg" alt="Department Image" /> 
                    
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/img8.jpg" alt="Department Image" /> 
                    
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/img4.png" alt="Department Image" /> 
                    
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/img5.jpg" alt="Department Image" /> 
                    
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/img6.jpg" alt="Department Image" /> 
                    
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/img7.jpg" alt="Department Image" /> 
                    
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/img8.jpg" alt="Department Image" /> 
                    
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>