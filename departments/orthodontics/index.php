<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CUURENTDIRURL = $ROOTURL . "departments/orthodontics/";

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
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/galleryStyles.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/departmentStyles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg"/>
        <h1>
            DEPARTMENT OF ORTHODONTICS
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <h1>Introduction</h1>
            <p>
                Welcome to the Department of Orthodontics and Dentofacial Orthopedics, where healthy and beautiful smiles are created. Orthodontics deals with straightening teeth and making them more aesthetic. It has high impact on a way person looks and boosts their self-esteem.
            </p>
            <p>
                The Department of Orthodontics is rendering undergraduate programme since 1982 and postgraduate programme since 2018. Ever since its inception, the department has grown phenomenally and progressed in terms of student education, infrastructure as well as patient care. A robust OPD ensures ample clinical experience, case-based learning and scope for research. The department offers undergraduate and post graduate coures. Head of the department Dr. Rajan Mahindra is recognised phD guide and soon phD courses to be started under his guidance.
            </p>
        </div>
        <div>
            <h2>UG PROGRAMME</h2>
            <p>It imparts sufficient skill and knowledge to treat simple cases using removable appliances and coordinate with specialists for complex cases. Undergraduate students learn to identify and diagnose various malocclusions and plan the treatment of cases pertaining to preventive, interceptive and corrective orthodontics. Highly experienced teaching faculties provide didactic teaching, practical hands-on experience, face to face learning, case-based clinical sessions and impel students to undertake research.</p>
        </div>
        <div>
            <h2>PG PROGRAMME</h2>
            <p>It imparts sufficient skill and knowledge to treat simple cases using removable appliances and coordinate with specialists for complex cases. Undergraduate students learn to identify and diagnose various malocclusions and plan the treatment of cases pertaining to preventive, interceptive and corrective orthodontics. Highly experienced teaching faculties provide didactic teaching, practical hands-on experience, face to face learning, case-based clinical sessions and impel students to undertake research.</p>
        </div>
        <div>
            <h1>
                Our Faculty
            </h1>
            <div class="facultyGallery">
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/Dr-Govind-Raghunath/Photo.png" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/Dr-Govind-Raghunath/Dr-Govind-Raghunath.pdf" type="application/pdf" target="_blank" >
                        Dr. Govind Raghunath Suryawanshi
                    </a>
                    <p>ASSOCIATE PROFESSOR (ACADEMIC)</p>
                </div>
            </div>
        </div>

        <div class="missionCard">
            <h1 class="title">
                Vission
            </h1>
            <p class="italic mt-4">
               To become centre of excellence at par with global standards, through patient-centred education, state of the art orthodontic technology and advanced research.
            </p>
            
        </div>

        <div class="visionCard">
            <h1 class="title">
                 Mission
            </h1>
            <ul>
                <li class="italic mt-4">
                    To provide highest quality of orthodontic treatment and patient care to all sections of the society, led by a team of committed professionals equipped with the finest skills and competency
                </li>
                <li class="italic mt-4">
                    To inculcate contemporary orthodontic skills and enable students to achieve academic and clinical excellence
                </li>
                <li class="italic mt-4">
                    Nurturing research to provide evidence-based diagnosis and treatment planning
                </li>
                <li class="italic mt-4">
                    To emphasize evidence-based learning and encourage molecular level research to advance the speciapty of orthodontics
                </li>
            </ul>
        </div>

        <div>
            <h1>FUTURE ASPECTS</h1>
            <ul>
                <li>Preclinical virtual skill development using case based and simulation based learning.</li>
                <li>Three-dimensional virtual skill development in the terms of diagnosis, treatment planning and mechanics using latest orthodontic technology such as CAD CAM, 3D printing, digital scans, stereolithography and various softwares.</li>
                <li>To establish sleep apnea and TMJ rehabilitation super speciality centers</li>
                <li>Preventive and Interceptive treatment</li>
                <li>Removable appliances</li>
                <li>Growth modification procedures using myofunctional and orthopedic appliances</li>
                <li>Fixed appliances including Edgewise, Begg’s appliance, Preadjusted edgewise, ceramic brackets etc</li>
                <li>Latest appliances such as skeletal anchorage system, self-ligating system, lingual orthodontics and aligner therapy</li>
                <li>Surgical orthodontics to correct jaw deformities and facial asymmetries</li>
                <li>Cleft lip and palate care</li>
                <li>TMJ disorder rehabilitation</li>
                <li>Interdisciplinary and multidisciplinary management of complex cases</li>
                <li>Sleep apnea management</li>
            </ul>
        </div>

        <div>
            <h1>CORE COMPETENCIES</h1>
            <ul>
                <li>Preventive and Interceptive treatment</li>
                <li>Removable appliances</li>
                <li>Fixed appliances including Edgewise, Begg’s appliance, Preadjusted edgewise, ceramic brackets etc</li>
                <li>Growth modification procedures using myofunctional and orthopedic appliances</li>
                <li>Latest appliances such as skeletal anchorage system, self-ligating system, lingual orthodontics and aligner therapy</li>
                <li>Interdisciplinary and multidisciplinary management of complex cases</li>
                <li>Sleep apnea management</li>
                <li>Surgical orthodontics to correct jaw deformities and facial asymmetries</li>
                <li>Cleft lip and palate care</li>
                <li>TMJ disorder rehabilitation</li>
            </ul>
        </div>

    </div>
    
    
    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>