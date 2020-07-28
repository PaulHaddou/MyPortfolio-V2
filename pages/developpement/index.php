<?php
       // Include the Head
       $path_Files_Head = '../../';
       $project_Title = 'Paul Haddou - Développement';
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
        include '../../includes/texts/texts-FR.php';
        
    ?>
    <div class="main">
        <div class="main_projects">
        <?php
            $length = count($devloppementProjectsArray);
            for ($i = 0; $i <$length; $i++) 
            {
                ?>
                    <div class="projects_project">
                        <a href="<?= $devloppementProjectsArray[$i][3] ?>">
                            <img src="<?= $devloppementProjectsArray[$i][2] ?>" alt="fff">
                        </a>
                        <div class="project_description">
                            <p><?= $devloppementProjectsArray[$i][0] ?></p>
                            <p><?= $devloppementProjectsArray[$i][1] ?></p>
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