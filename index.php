<?php
   // Include the Head, the texts. Define the path to the files and the title of the page
   $path_Files_Head = null;
   $path_Page_CSS = 'all_projects';
   include 'includes/texts/texts-FR.php';
   $meta_Name = $all_Projects_Meta_Name;
   $project_Title = $all_Projects_Title;
   include 'includes/head.php';
?>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '#';
        $hrefDev = 'pages/developpement/';
        $hrefDesign = 'pages/design/';
        $hrefAbout = 'pages/a-propos/';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanAbout = $spanDev = $spanDesign = '<span class="spanDisable" ></span>';
        $spanProjects = '<span class="spanActiv" ></span>';
        
        include 'includes/navbar.php';
        include 'includes/navbarMobile.php';
        
    ?>
    <div class="main">
        <div class="main_projects">
        <?php
            $length = count($projectsArray);
            for ($i = 0; $i < 1; $i++) 
            {
            ?>
                <div class="projects_project">
                    <a href="<?= $projectsArray[$i][3] ?>">
                        <img src="<?= $projectsArray[$i][2] ?>" alt="fff">
                    </a>
                    <div class="project_description">
                        <p><?= $projectsArray[$i][0] ?></p>
                        <p><?= $projectsArray[$i][1] ?></p>
                    </div>
                </div>
            <?php
            }
            for ($i = 1; $i < 2; $i++) 
            {
            ?>
                <div class="projects_project">
                    <a href="<?= $projectsArray[$i][3] ?>">
                        <video playsinline autoplay muted loop src="<?= $projectsArray[$i][2] ?>" alt="Motion de mon intro"></video>
                    </a>
                    <div class="project_description">
                        <p><?= $projectsArray[$i][0] ?></p>
                        <p><?= $projectsArray[$i][1] ?></p>
                    </div>
                </div>
            <?php
            }
            for ($i = 2; $i < $length; $i++) 
            {
            ?>
                <div class="projects_project">
                    <a href="<?= $projectsArray[$i][3] ?>">
                        <img src="<?= $projectsArray[$i][2] ?>" alt="fff">
                    </a>
                    <div class="project_description">
                        <p><?= $projectsArray[$i][0] ?></p>
                        <p><?= $projectsArray[$i][1] ?></p>
                    </div>
                </div>
            <?php
            }
        ?>
            <div class="projects_project more-soon">
                <div class="more-soon_text">
                    <p>+ Bientôt</p>
                </div>
            </div>
        </div>
        <div class="projects_button">
            <a class="projects_button_download" href="pdf/CV_Paul-Haddou.pdf" download>Mon portfolio au format PDF</a>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>
    
    <script src="sources/burger.js"></script>
</body>
</html>