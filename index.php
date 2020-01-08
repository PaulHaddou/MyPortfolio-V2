<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paul Haddou</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/navbar.min.css">
    <link rel="stylesheet" href="styles/projects.min.css">
    <link rel="stylesheet" href="styles/footer.min.css">
    <link rel="stylesheet" href="styles/navbarMobile.min.css">


</head>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '#';
        $hrefdevelopment = 'pages/development/index.php';
        $hrefDesign = 'pages/design/index.php';
        $hrefAbout = 'pages/about/index.php';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanDisable = '<span class="spanDisable" ></span>';
        $spanActiv = '<span class="spanActiv" ></span>';
        
        include 'includes/navbar.php';
        include 'includes/navbarMobile.php'

    ?>
    <div class="main">
        <div class="main_projects">
            <div class="projects_project">
                <a href="#">
                    <img src="images/accio.png" alt="Photo du projet Accio">
                </a>
                <div class="project_description">
                    <p>Accio - H4CK 4 HELP</p>
                    <p>Design UI/UX - Prototypage</p>
                </div>
            </div>
            <div class="projects_project">
                <a href="#">
                    <img src="images/accio.png" alt="Photo du projet Accio">
                </a>
                <div class="project_description">
                    <p>Accio - H4CK 4 HELP</p>
                    <p>Design UI/UX - Prototypage</p>
                </div>
            </div>
            <div class="projects_project">
                <a href="#">
                    <img src="images/accio.png" alt="Photo du projet Accio">
                </a>
                <div class="project_description">
                    <p>Accio - H4CK 4 HELP</p>
                    <p>Design UI/UX - Prototypage</p>
                </div>
            </div>
            <div class="projects_project">
                <a href="#">
                    <img src="images/accio.png" alt="Photo du projet Accio">
                </a>
                <div class="project_description">
                    <p>Accio - H4CK 4 HELP</p>
                    <p>Design UI/UX - Prototypage</p>
                </div>
            </div>
            <div class="projects_project">
                <a href="#">
                    <img src="images/accio.png" alt="Photo du projet Accio">
                </a>
                <div class="project_description">
                    <p>Accio - H4CK 4 HELP</p>
                    <p>Design UI/UX - Prototypage</p>
                </div>
            </div>
            <div class="projects_project">
                <a href="#">
                    <img src="images/accio.png" alt="Photo du projet Accio">
                </a>
                <div class="project_description">
                    <p>Accio - H4CK 4 HELP</p>
                    <p>Design UI/UX - Prototypage</p>
                </div>
            </div>
            <div class="projects_project">
                <a href="#">
                    <img src="images/accio.png" alt="Photo du projet Accio">
                </a>
                <div class="project_description">
                    <p>Accio - H4CK 4 HELP</p>
                    <p>Design UI/UX - Prototypage</p>
                </div>
            </div>
            <div class="projects_project">
                <a href="#">
                    <img src="images/accio.png" alt="Photo du projet Accio">
                </a>
                <div class="project_description">
                    <p>Accio - H4CK 4 HELP</p>
                    <p>Design UI/UX - Prototypage</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>
    
    <script src="sources/burger.js"></script>
</body>
</html>