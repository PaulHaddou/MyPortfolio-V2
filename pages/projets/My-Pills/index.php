<?php
    // All the texts and usefull informations for the project
    include '../../../includes/texts/texts-FR.php';
    $project_Name_Path = $project_My_Pills_Name_Path;
    $project_Img_Alt = $project_My_Pills_Img_Alt;
    $project_Title = $project_My_Pills_Title;
    $project_Name = $project_My_Pills_Name;
    $project_Position_1 = $project_My_Pills_Position_1;
    $project_Position_2 = $project_My_Pills_Position_2;
    $project_Tools_1 = $project_My_Pills_Tools_1;
    $project_Tools_2 = $project_My_Pills_Tools_2;
    $project_Date = $project_My_Pills_Date;
    $project_Paragraph_1 = $project_My_Pills_Paragraph_1;
    $project_Paragraph_2 = $project_My_Pills_Paragraph_2;
    $project_Paragraph_3 = $project_My_Pills_Paragraph_3;
    $project_Paragraph_4 = $project_My_Pills_Paragraph_4;
    $project_Paragraph_5 = $project_My_Pills_Paragraph_5;
    $project_Paragraph_6 = $project_My_Pills_Paragraph_6;
    $project_Paragraph_7 = $project_My_Pills_Paragraph_7;
    $project_Paragraph_8 = $project_My_Pills_Paragraph_8;
    $project_Paragraph_9 = $project_My_Pills_Paragraph_9;
    $project_Paragraph_10 = $project_My_Pills_Paragraph_10;
    $project_Paragraph_11 = $project_My_Pills_Paragraph_11;
    $project_Paragraph_12 = $project_My_Pills_Paragraph_12;
    $project_Infos_Description_Title_Step_1 = $project_My_Pills_Infos_Description_Title_Step_1;
    $project_Infos_Description_Title_Step_2 = $project_My_Pills_Infos_Description_Title_Step_2;
    $project_Infos_Description_Title_Step_3 = $project_My_Pills_Infos_Description_Title_Step_3;

    // Include the Head
    $path_Files_Head = "../../../";
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
                        <div class="buttons_invision">
                            <a href="https://projects.invisionapp.com/share/ZWVHDD59NC7#/screens"><?= $project_Infos_Invision ?></a>
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
            <div class="main_project-description_title">
                <div class="main_project-description_title_step">
                    <p class="main_project-description_title_step_title"><?= $project_Infos_Description_Title_Step_1 ?></p>
                    <span class="main_project-description_title_step_underline"></span>
                </div>
            </div>
            <div class="main_project-description_bloc-text-picture">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_4 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_1.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_quote">
                <p class="description_quote"><?= $project_Paragraph_5 ?></p>
            </div>
            <div class="main_project-description_bloc-text-picture">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_6 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_2.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_title">
                <div class="main_project-description_title_step">
                    <p class="main_project-description_title_step_title"><?= $project_Infos_Description_Title_Step_2 ?></p>
                    <span class="main_project-description_title_step_underline"></span>
                </div>
            </div>
            <div class="main_project-description_bloc-text-picture reverse-bloc">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_7 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_3.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_picture_full_width">
                <img class="description_picture_full_width" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_4.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_title">
                <div class="main_project-description_title_step">
                    <p class="main_project-description_title_step_title"><?= $project_Infos_Description_Title_Step_3 ?></p>
                    <span class="main_project-description_title_step_underline"></span>
                </div>
            </div>
            <div class="main_project-description_bloc-text-picture">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_8 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_5.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_bloc-text-picture reverse-bloc">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_9 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_6.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_bloc-text-picture">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_10 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_7.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_bloc-text-picture reverse-bloc">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_11 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_8.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
            <div class="main_project-description_conclusion-text">
                <p class="description_conclusion-text"><?= $project_Paragraph_12 ?></p>
            </div>
        </div>
    </div>
    <?php include '../../../includes/footer.php' ?>
    
    <script src="../../../sources/burger.js"></script>
</body>
</html>