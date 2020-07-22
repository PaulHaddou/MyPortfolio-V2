<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet - Site Haddou-Dufourcq</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../styles/navbar/navbar.min.css">
    <link rel="stylesheet" href="../../../styles/project/project.min.css">
    <link rel="stylesheet" href="../../../styles/footer/footer.min.css">
    <link rel="stylesheet" href="../../../styles/navbarMobile/navbarMobile.min.css">
    <link rel="shortcut icon" href="../../../favicon.ico" type="image/x-icon">


</head>
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
        include '../../../includes/navbarMobile.php'

    ?>
    <div class="main">
        <div class="main_project">
            <img src="../../../images/haddou-dufourcq.jpg" alt="Image du projet de site vitrine haddou-dufourcq.com">
            <p>Site Haddou-Dufourcq</p>
            <div class="project_description">
                <div class="description_content">
                    <div class="content_texts">
                        <div class="texts_roles">
                            <p>Postes Occupés</p>
                            <p>Webmaster</p>
                            <p>Front-End</p>
                        </div>
                        <div class="texts_technos">
                            <p>Technos utilisées</p>
                            <p>HTML, SCSS</p>
                            <p>JS, PHP</p>
                        </div>
                        <div class="texts_date">
                            <p>Date</p>
                            <p>2018</p>
                        </div>
                    </div>
                    <div class="content_buttons">
                        <div class="buttons_website">
                            <a href="https://www.haddou-dufourcq.com">Site</a>
                        </div>
                        <div class="buttons_github">
                            <a href="https://github.com/PaulHaddou/Site_Haddou-Dufourcq">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../../../includes/footer.php' ?>
    
    <script src="../../../sources/burger.js"></script>
</body>
</html>