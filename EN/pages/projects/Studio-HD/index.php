<?php
    $path_Files_Head = "../../../../";
    $path_Page_CSS = 'project';

    // All the texts and usefull informations for the project
    include '../../../../includes/texts/texts-EN.php';
    $meta_Name = $project_Studio_HD_Meta_Name;
    $project_Name_Path = $project_Studio_HD_Name_Path;
    $project_Img_Alt = $project_Studio_HD_Img_Alt;
    $project_Title = $project_Studio_HD_Title;
    $project_Name = $project_Studio_HD_Name;
    $project_Position_1 = $project_Studio_HD_Position_1;
    $project_Position_2 = $project_Studio_HD_Position_2;
    $project_Tools_1 = $project_Studio_HD_Tools_1;
    $project_Tools_2 = $project_Studio_HD_Tools_2;
    $project_Date = $project_Studio_HD_Date;
    $project_Paragraph_1 = $project_Studio_HD_Paragraph_1;
    $project_Paragraph_2 = $project_Studio_HD_Paragraph_2;
    $project_Paragraph_3 = $project_Studio_HD_Paragraph_3;
    $project_Paragraph_4 = $project_Studio_HD_Paragraph_4;
    $project_Paragraph_5 = $project_Studio_HD_Paragraph_5;

    // Include the Head

    include '../../../../includes/head.php';
?>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '../../../';
        $hrefDev = '../../development/';
        $hrefDesign = '../../design/';
        $hrefAbout = '../../about/';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanProjects = $spanAbout = $spanDev = $spanDesign = '<span class="spanDisable" ></span>';

        
        include '../../../../includes/navbar.php';
        include '../../../../includes/navbarMobile.php';
    ?>
    <div class="main">
        <div class="main_project">
            <img class="main_project-img" src="../../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Main-Picture.jpg" alt="<?= $project_Img_Alt ?>">
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
                <video playsinline autoplay muted loop class="description_bloc-text-picture_picture" src="../../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_1.mp4" alt="<?= $project_Img_Alt ?>"></video>
            </div>
            <div class="main_project-description_bloc-text-picture reverse-bloc">
                <p class="description_bloc-text-picture_text"><?= $project_Paragraph_5 ?></p>
                <img class="description_bloc-text-picture_picture" src="../../../../images/Projects/<?= $project_Name_Path ?>/Paul-Haddou_Project-<?= $project_Name_Path ?>_Description-Picture_2.jpg" alt="<?= $project_Img_Alt ?>">
            </div>
        </div>
    </div>
    <?php include '../../../../includes/footer.php' ?>
    
    <script src="../../../../sources/burger.js"></script>
</body>
</html>