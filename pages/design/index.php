<?php
       // Include the Head
       $path_Files_Head = '../../';
       $path_Page_CSS = 'all_projects';
       include '../../includes/texts/texts-FR.php';
       $meta_Name = $design_Meta_Name;
       $project_Title = $design_Title;
       include '../../includes/head.php';
?>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '../../';
        $hrefDev = '../developpement/';
        $hrefDesign = '#';
        $hrefAbout = '../a-propos/';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanAbout = $spanProjects = $spanDev = '<span class="spanDisable" ></span>';
        $spanDesign = '<span class="spanActiv" ></span>';
        
        include '../../includes/navbar.php';
        include '../../includes/navbarMobile.php';
        
    ?>
    <div class="main">
        <div class="main_projects">
        <?php
            $length = count($designProjectsArray);
            for ($i = 1; $i < 2; $i++) 
            {
                ?>
                    <div class="projects_project">
                        <a href="<?= $designProjectsArray[$i][3] ?>">
                        <video playsinline autoplay muted loop src="<?= $projectsArray[$i][2] ?>" alt="Motion de mon intro"></video>                        </a>
                        <div class="project_description">
                            <p><?= $designProjectsArray[$i][0] ?></p>
                            <p><?= $designProjectsArray[$i][1] ?></p>
                        </div>
                    </div>
                <?php
            }
            for ($i = 1; $i <$length; $i++) 
            {
                ?>
                    <div class="projects_project">
                        <a href="<?= $designProjectsArray[$i][3] ?>">
                            <img src="<?= $designProjectsArray[$i][2] ?>" alt="fff">
                        </a>
                        <div class="project_description">
                            <p><?= $designProjectsArray[$i][0] ?></p>
                            <p><?= $designProjectsArray[$i][1] ?></p>
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