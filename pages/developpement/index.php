<?php
       // Include the Head
       $path_Files_Head = '../../';
       $path_Page_CSS = 'all_projects';
       include '../../includes/texts/texts-FR.php';
       $meta_Name = $developpement_Meta_Name;
       $project_Title = $developpement_Title;
       include '../../includes/head.php';
?>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '../../';
        $hrefDev = '#';
        $hrefDesign = '../design/';
        $hrefAbout = '../a-propos/';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanAbout = $spanProjects = $spanDesign = '<span class="spanDisable" ></span>';
        $spanDev = '<span class="spanActiv" ></span>';
        
        include '../../includes/navbar.php';
        include '../../includes/navbarMobile.php';
        
    ?>
    <div class="main">
        <div class="main_projects">
        <?php
            $length = count($developpementProjectsArray);
            for ($i = 0; $i <$length; $i++) 
            {
                ?>
                    <div class="projects_project">
                        <a href="<?= $developpementProjectsArray[$i][3] ?>">
                            <img src="<?= $developpementProjectsArray[$i][2] ?>" alt="fff">
                        </a>
                        <div class="project_description">
                            <p><?= $developpementProjectsArray[$i][0] ?></p>
                            <p><?= $developpementProjectsArray[$i][1] ?></p>
                        </div>
                    </div>
                <?php
            }
            ?>
        </div>
        <div class="projects_button">
            <a class="projects_button_download" href="pdf/CV_Paul-Haddou.pdf" download>Mon portfolio au format PDF</a>
        </div>
    </div>
    <?php include '../../includes/footer.php' ?>
    
    <script src="../../sources/burger.js"></script>
</body>
</html>