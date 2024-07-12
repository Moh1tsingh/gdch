<?php

$ROOT = "../../";
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "about-us/infrastructure/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <script src="<?php echo $ROOTURL ?>public/js/departments/departmentMain.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/about-us/about-us.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/departmentStyles.css">
    </link>

</head>

<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" />
        <h1>
            INFRASTRUCTURE
        </h1>
    </div>
    <div>
        <div class="contentContainer">
            <div>
                <div class="facultyContainer">
                    <div class="facultyToggleBtn">
                        <img class="plusIcon" src="<?php echo $ROOTURL ?>public/assets/plus-icon.svg" />
                        <img class="minusIcon" src="<?php echo $ROOTURL ?>public/assets/minus-icon.svg" />
                        <h1>Hostel Information</h1>
                    </div>
                    <div class="facultyGallery">
                        <img src="<?php echo $CURRENTDIRURL ?>assets/Hostel-img.png" class="Hostel-img" alt="">
                        <h3>The Govt. Dental College & Hospital, chhatrapati sambhajinagar is situated in the Centre of City. GDC
                            Boy’s and Girl’s hostel is only 200 meters away from the college hospital premises.
                            The college provides separate hostel facilities for girls and boys with 72 rooms in the girl’s hostel and
                            40 rooms in the boy’s hostel. The hostel campus is having all the essential amenities like filtered
                            drinking water with purifier, outdoor Sports Court, Indoor Gymnasium, and CCTV surveillance.
                            The hostel also has the guest room facilities for the parents of the students. There are recreation club
                            room, yoga & wellness club room in the hostel with the mess facilities common for boys and girls.
                            The 24*7 security monitoring in & out timing of the students helps the administration for safer &
                            secure environment for the hostel inmates.
                            The hostel shows zero tolerance for ragging and is a RAGGING FREE CAMPUS. The students are
                            sensitized regarding the hazards of ragging. The information and contact numbers of Anti- Ragging
                            Committee are displayed in the hostel. All the rules and regulations of the hostel are displayed in the
                            premises for reference of the students.
                        </h3>
                    </div>
                </div>

                <div class="facultyContainer">
                    <div class="facultyToggleBtn">
                        <img class="plusIcon" src="<?php echo $ROOTURL ?>public/assets/plus-icon.svg" />
                        <img class="minusIcon" src="<?php echo $ROOTURL ?>public/assets/minus-icon.svg" />
                        <h1>Library Information</h1>
                    </div>
                    <div class="facultyGallery" style="padding:0">
                        <h1>Library Collection</h1>
                        <h3>Govt. Dental college and Hospital A Central library for is the main
                            resource for learning. The library is the most important part of this college.
                            situated in the vast building of GDCH providing accommodation to 63 of
                            students at once. GDCH library functions as a knowledge center for the
                            growth of the Institution and supports the academic programs of the
                            Institution.</h3>
                        <h3>Govt. Dental college and Hospital the library of is spread across 4200 sq.
                            ft. At Ground floor of institution.The central library is a repository of around
                            6602 copies of books and 2551 back volume journals and various collections
                            of National and International journals on various specialties in dentistry. The
                            Library is open from 8.30 am to 9.00 pm on all working days providing inperson access to students and Faculty. A dedicated team of employees
                            works throughout the day for the benefit of the Student and Staff. The
                            Institution insists on inculcating the habit of self-directed learning and
                            encourages the students to spend productive time in the library and make
                            use of the available resources. In addition, to facilitate E-access, GDCH
                            acquires access to the e-consortium of EBSCO which is renewed every year.
                            Around 207 e-journal subscriptions can be accessed through the same. </h3>
                        <h3>There is a separate study area for UG and PG students and staff to
                            read library books and their own book. In addition, separate Journal section
                            is available in the library. Other facilities available are study hall, Xeroxing
                            and internet and e-services. To help students access internet content,
                            computer systems with high-speed internet facilities are freely accessible
                            during library hours. There is an established library committee that
                            undertakes the responsibility of updating the research journals and textbooks
                            annually as per the requirements of various departments.
                        </h3>
                        <div class="library-img-container">
                            <img src="<?php echo $CURRENTDIRURL ?>assets/library1.png" alt="">
                            <p style="font-size: 1.2rem; font-weight:500; padding:10px 0;">LIBRARIAN SECTION</p>
                            <img src="<?php echo $CURRENTDIRURL ?>assets/library2.png" alt="">
                            <p style="font-size: 1.2rem; font-weight:500; padding:10px 0;">E- Library</p>
                            <a style=" font-size:1.5rem; font-weight:600;" href="<?php echo $CURRENTDIRURL ?>assets/Library Information.pdf" type="application/pdf" target="_blank">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include($ROOT . "includes/_footer.php"); ?>
    </div>
</body>

</html>