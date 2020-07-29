<?php
    $path_Files_Head = "../../../";
    $path_Page_CSS = 'project';

    // All the texts and usefull informations for the project
    include '../../../includes/texts/texts-FR.php';
    $meta_Name = $project_Barathon_Meta_Name;
    $project_Name_Path = $project_Barathon_Name_Path;
    $project_Img_Alt = $project_Barathon_Img_Alt;
    $project_Title = $project_Barathon_Title;
    $project_Name = $project_Barathon_Name;
    $project_Position_1 = $project_Barathon_Position_1;
    $project_Position_2 = $project_Barathon_Position_2;
    $project_Tools_1 = $project_Barathon_Tools_1;
    $project_Tools_2 = $project_Barathon_Tools_2;
    $project_Date = $project_Barathon_Date;
    $project_Paragraph_1 = $project_Barathon_Paragraph_1;
    $project_Paragraph_2 = $project_Barathon_Paragraph_2;
    $project_Paragraph_3 = $project_Barathon_Paragraph_3;
    $project_Paragraph_4 = $project_Barathon_Paragraph_4;

   // Include the Head
    include '../../../includes/head.php';
?>
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
    ?> 
    <div class="main">
        <div class="main_project">
            <img class="main_project-img" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Main-Picture.jpg" alt="<?= $project_Img_Alt ?>">
            <h2 class="main_project-title"><?= $project_Name ?></h2>
            <div class="main_project-infos">
                <div class="infos_content">
                    <div class="content_texts">
                        <div class="texts_roles">
                            <p><?= $project_Infos_Positions ?></p>
                            <p><?= $project_Position_1 ?></p>
                            <p><?= $project_Position_2 ?></p>
                        </div>
                        <div class="texts_tools">
                            <p><?= $project_Infos_Technologies ?></p>
                            <p><?= $project_Tools_1 ?></p>
                            <p><?= $project_Tools_2 ?></p>
                        </div>
                        <div class="texts_date">
                            <p>Date</p>
                            <p><?= $project_Date ?></p>
                        </div>
                    </div>
                    <div class="content_button">
                        <div class="buttons_github">
                        <a href="https://github.com/PaulHaddou/Site_Haddou-Dufourcq">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_project-description_title">
                <div class="main_project-description_title_step">
                    <p class="main_project-description_title_step_title"><?= $project_Infos_Description_Title ?></p>
                    <span class="main_project-description_title_step_underline"></span>
                </div>
            </div>
            <div class="main_project-description_intro">
                <p class="description_intro-Paragraph"><?= $project_Paragraph_1 ?></p>
                <p class="description_intro-Paragraph"><?= $project_Paragraph_2 ?></p>
                <p class="description_intro-Paragraph"><?= $project_Paragraph_3 ?></p>
            </div>
            <div class="main_project-description_bloc-text-picture">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_4 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_1.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_bloc-text-picture reverse-bloc">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_4 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_2.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_bloc-text-picture">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_4 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_3.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
        </div>
    </div>
    <?php include '../../../includes/footer.php' ?>
    
    <script src="../../../sources/burger.js"></script>
</body>
</html>