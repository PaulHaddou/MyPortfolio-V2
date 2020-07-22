<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paul Haddou</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/navbar/navbar.min.css">
    <link rel="stylesheet" href="styles/all_projects/all_projects.min.css">
    <link rel="stylesheet" href="styles/footer/footer.min.css">
    <link rel="stylesheet" href="styles/navbarMobile/navbarMobile.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


</head>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '#';
        $hrefdevelopment = 'pages/development/';
        $hrefDesign = 'pages/design/';
        $hrefAbout = 'pages/a-propos/';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanAbout = $spanDev = $spanDesign = '<span class="spanDisable" ></span>';
        $spanProjects = '<span class="spanActiv" ></span>';
        
        include 'includes/navbar.php';
        include 'includes/navbarMobile.php';
        include 'includes/texts/texts-FR.php';
        
    ?>
    <div class="main">
        <div class="main_projects_1">
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
            for ($i = 2; $i < 4; $i++) 
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
        </div>
        <div class="main_projects_2">
        <?php
            $length = count($projectsArray);
            for ($i = 4; $i < 8; $i++) 
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
        </div>
        <div class="main_projects_3">
        <?php
            $length = count($projectsArray);
            for ($i = 8; $i < $length; $i++) 
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
<!---                    <video playsinline autoplay muted loop src="<?= $projectsArray[$i][2] ?>" alt="Motion de mon intro"></video> --->
