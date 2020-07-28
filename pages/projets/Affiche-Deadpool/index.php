<?php
    $path_Files_Head = "../../../";

    // All the texts and usefull informations for the project
    include '../../../includes/texts/texts-FR.php';
    $project_Name_Path = $project_Affiche_Deadpool_Name_Path;
    $project_Img_Alt = $project_Affiche_Deadpool_Img_Alt;
    $project_Title = $project_Affiche_Deadpool_Title;
    $project_Name = $project_Affiche_Deadpool_Name;
    $project_Position_1 = $project_Affiche_Deadpool_Position_1;
    $project_Position_2 = $project_Affiche_Deadpool_Position_2;
    $project_Tools_1 = $project_Affiche_Deadpool_Tools_1;
    $project_Tools_2 = $project_Affiche_Deadpool_Tools_2;
    $project_Date = $project_Affiche_Deadpool_Date;
    $project_Paragraph_1 = $project_Affiche_Deadpool_Paragraph_1;
    $project_Paragraph_2 = $project_Affiche_Deadpool_Paragraph_2;
    $project_Paragraph_3 = $project_Affiche_Deadpool_Paragraph_3;

   // Include the Head
    include '../../../includes/head.php';
?>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '../../../';
        $hrefDev = '../../developpement/';
        $hrefDesign = '../../design/';
        $hrefAbout = '../../a-propos/';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanProjects = $spanAbout = $spanDev = $spanDesign = '<span class="spanDisable" ></span>';

        
        include '../../../includes/navbar.php';
        include '../../../includes/navbarMobile.php';
    ?> 
    <div class="main">
        <div class="main_project">
            <img class="main_project-img main_project-img-mobile-w100" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Main-Picture.jpg" alt="<?= $project_Img_Alt ?>">
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
                        <div class="buttons_pdf">
                            <a href="../../../pdf/projects/Paul-Haddou_Project-<?= $project_Name_Path ?>_Full-Project.pdf" download><?= $project_Infos_Pdf ?></a>
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
            <div class="main_project-description_bloc-text-picture project-picture-h1236">
                <img class="description_bloc-text-picture_picture-h1236" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_1.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
        </div>
    </div>
    <?php include '../../../includes/footer.php' ?>
    
    <script src="../../../sources/burger.js"></script>
</body>
</html>