<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>à propos</title>
        <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../styles/navbar.min.css">
        <link rel="stylesheet" href="../../styles/about/about.min.css">
        <link rel="stylesheet" href="../../styles/footer.min.css">
        <link rel="stylesheet" href="../../styles/navbarMobile.min.css">
        <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">


    </head>
    <body>
        <?php 
            // Links In the Navbar
            $hrefProjects = '../../';
            $hrefdevelopment = 'development/';
            $hrefDesign = 'design/';
            $hrefAbout = '#';
        
            // Allows you to correctly indicate in the navbar in which section you are
            $spanProjects = $spanDev = $spanDesign = '<span class="spanDisable" ></span>';
            $spanAbout = '<span class="spanActiv" ></span>';
            
            include '../../includes/navbar.php';
            include '../../includes/navbarMobile.php'

        ?>

        <div class="main">
            <div class="main_infosBlocks">
                <div class="infosBlocks_skills">
                    <div class="skills_infos">
                        <p class="infos_title">Mes compétences</p>
                        <div class="infos_details">
                            <div class="details_dev">
                                <p class="dev_title">Développement</p>
                                <p class="dev_technos">HTML, CSS, SCSS, JS, PHP, Swift, Three.JS, MySQL, Docker</p>
                                <p class="dev_softwares">GitHub, VSCode</p>                               
                            </div>
                            <div class="details_design">
                                <p class="design_title">Design</p>
                                <p class="design_adobe">Suite Adobe</p>
                                <p class="design_softwareInterface">Figma, InVision</p>                               
                            </div>
                            <div class="details_projectManagement">
                                <p class="projectManagement_title">Gestion de projets</p>
                                <p class="projectManagement_softwares">Jira, Trello, Confluence</p>                               
                            </div>
                            <div class="details_languages">
                                <p class="languages_title">Langues</p>
                                <p class="languages_french">Français</p>   
                                <p class="languages_english">Anglais - Niveau B1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="infosBlocks_contact">
                    <div class="contact_infos">
                        <div class="infos_texts">
                            <p class="texts_title">Contact</p>
                            <p class="texts_mail">paul.haddou@gmail.com</p>
                        </div>
                        <div class="infos_mailButton">
                            <a href="mailto:paul.haddou@gmail.com">Contactez-moi !</a>
                        </div>
                    </div>
                </div>
                <div class="infosBlocks_resume">
                    <div class="resume_infos">
                        <p class="infos_title">Resume</p>
                        <div class="infos_resumeButton">
                            <a href="../../images/CV-Paul Haddou.pdf">Consultez-le !</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php include '../../includes/footer.php' ?>
    
        <script src="../../sources/burger.js"></script>
    </body>
</html>