<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet - Site Haddou-Dufourcq</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../styles/navbar/navbar.min.css">
    <link rel="stylesheet" href="../../../styles/project/project.min.css">
    <link rel="stylesheet" href="../../../styles/footer/footer.min.css">
    <link rel="stylesheet" href="../../../styles/navbarMobile/navbarMobile.min.css">
    <link rel="shortcut icon" href="../../../favicon.ico" type="image/x-icon">


</head>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '../../../';
        $hrefdevelopment = '../../pages/development/';
        $hrefDesign = '../../pages/design/';
        $hrefAbout = '../../a-propos/';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanProjects = $spanAbout = $spanDev = $spanDesign = '<span class="spanDisable" ></span>';

        
        include '../../../includes/navbar.php';
        include '../../../includes/navbarMobile.php';
        include '../../../includes/texts/texts-FR.php';
        $project_Name_Path = $project_Studio_HD_Name_Path;


    ?>
    <div class="main">
        <div class="main_project">
            <img class="main_project-img" src="../../../images/Projects/Studio-HD/Paul-Haddou_Project-<?= $project_Name_Path ?>_Main-Picture.jpg" alt="Image du projet de site vitrine haddou-dufourcq.com">
            <h2 class="main_project-title"><?= $project_Studio_HD_Name ?></h2>
            <div class="main_project-infos">
                <div class="infos_content">
                    <div class="content_texts">
                        <div class="texts_roles">
                            <p><?= $project_Infos_Positions ?></p>
                            <p><?= $project_Studio_HD_Position_1 ?></p>
                            <p><?= $project_Studio_HD_Position_2 ?></p>
                        </div>
                        <div class="texts_tools">
                            <p><?= $project_Infos_Technologies ?></p>
                            <p><?= $project_Studio_HD_Tools_1 ?></p>
                            <p><?= $project_Studio_HD_Tools_2 ?></p>
                        </div>
                        <div class="texts_date">
                            <p>Date</p>
                            <p><?= $project_Studio_HD_Date ?></p>
                        </div>
                    </div>
                    <div class="content_buttons">
                        <div class="buttons_website">
                            <a href="https://www.haddou-dufourcq.com"><?= $project_Infos_Website ?></a>
                        </div>
                        <div class="buttons_github">
                            <a href="https://github.com/PaulHaddou/Site_Haddou-Dufourcq">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_project-description_title">
                <p class="description_title-title"><?= $project_Infos_Description_Title ?></p>
                <span class="description_title-underline"></span>
            </div>
            <div class="main_project-description_intro">
                <p class="description_intro-Paragraph"><?= $project_Studio_HD_Paragraph_1 ?></p>
                <p class="description_intro-Paragraph"><?= $project_Studio_HD_Paragraph_2 ?></p>
                <p class="description_intro-Paragraph"><?= $project_Studio_HD_Paragraph_3 ?></p>
            </div>
            <div class="main_project-description_bloc-text-picture">
                <p class="description_bloc-text-picture_text"><?= $project_Studio_HD_Paragraph_4 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/Studio-HD/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_1.jpg" alt="">
            </div>
            <div class="main_project-description_bloc-text-picture reverse-bloc">
                <p class="description_bloc-text-picture_text"><?= $project_Studio_HD_Paragraph_5 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/Studio-HD/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_2.jpg" alt="">
            </div>
        </div>
    </div>
    <?php include '../../../includes/footer.php' ?>
    
    <script src="../../../sources/burger.js"></script>
</body>
</html>