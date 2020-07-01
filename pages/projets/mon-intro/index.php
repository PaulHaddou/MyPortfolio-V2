<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon intro</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../styles/navbar.min.css">
    <link rel="stylesheet" href="../../../styles/project/project.min.css">
    <link rel="stylesheet" href="../../../styles/footer.min.css">
    <link rel="stylesheet" href="../../../styles/navbarMobile.min.css">
    <link rel="shortcut icon" href="../../../favicon.ico" type="image/x-icon">


</head>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '../../../';
        $hrefdevelopment = '../../pages/development/';
        $hrefDesign = '../../pages/design/';
        $hrefAbout = '../../about/';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanProjects = $spanAbout = $spanDev = $spanDesign = '<span class="spanDisable" ></span>';
        
        include '../../../includes/navbar.php';
        include '../../../includes/navbarMobile.php'

    ?>
    <div class="main">
        <div class="main_project">
            <video playsinline autoplay loop muted src="../../../images/Intro_Paul-Haddou.mp4" alt="Vidéo de mon Intro réalisée en motion"></video>
            <p>Motion de mon Intro</p>
            <div class="project_description">
                <div class="description_content">
                    <div class="content_texts">
                        <div class="texts_roles">
                            <p>Postes Occupés</p>
                            <p>Motion Designer</p>
                        </div>
                        <div class="texts_softwares">
                            <p>Logiciel utilisé</p>
                            <p>After Effects</p>
                        </div>
                        <div class="texts_date">
                            <p>Date</p>
                            <p>2020</p>
                        </div>
                    </div>
                    <div class="content_button">
                        <div class="buttons_website">
                            <a href="https://youtu.be/CrxWFwCGiI8">Vidéo</a>
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