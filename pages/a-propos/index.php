<?php
        $path_Files_Head = '../../';
        $path_Page_CSS = 'about';
        include '../../includes/texts/texts-FR.php';
        // Include the Head
        $project_Title = $about_Title;
        $meta_Name = $about_Meta_Name;
        include '../../includes/head.php';
?>
    <body>
        <?php 
            // Links In the Navbar
            $hrefProjects = '../../';
            $hrefDev = '../developpement/';
            $hrefDesign = '../design/';
            $hrefAbout = '#';
        
            // Allows you to correctly indicate in the navbar in which section you are
            $spanProjects = $spanDev = $spanDesign = '<span class="spanDisable" ></span>';
            $spanAbout = '<span class="spanActiv" ></span>';
            
            include '../../includes/navbar.php';
            include '../../includes/navbarMobile.php';

        ?>

        <div class="main_about">
            <div class="main_infosBlocks">
                <div class="infosBlocks_skills">
                    <div class="skills_infos">
                        <p class="infos_title"><?= $about_Skills_Title ?></p>
                        <div class="infos_details">
                            <div class="details_dev">
                                <p class="dev_title"><?= $about_Skills_Developpement_Title ?></p>
                                <p class="dev_technos"><?= $about_Skills_Developpement_Languages ?></p>
                                <p class="dev_softwares"><?= $about_Skills_Developpement_Softwares ?></p>                               
                            </div>
                            <div class="details_design">
                                <p class="design_title"><?= $about_Skills_Design_Title ?></p>
                                <p class="design_adobe"><?= $about_Skills_Design_Softwares_1 ?></p>
                                <p class="design_softwareInterface"><?= $about_Skills_Design_Softwares_2 ?></p>                               
                            </div>
                            <div class="details_3D">
                                <p class="3D_title">3D</p>
                                <p class="3D_adobe"><?= $about_Skills_3D_Softwares ?></p>
                            </div>
                            <div class="details_projectManagement">
                                <p class="projectManagement_title"><?= $about_Skills_Project_Management_Title ?></p>
                                <p class="projectManagement_softwares"><?= $about_Skills_Project_Management_Softwares ?></p>                               
                            </div>
                            <div class="details_languages">
                                <p class="languages_title"><?= $about_Skills_Languages_Title ?></p>
                                <p class="languages_french"><?= $about_Skills_Languages_Language_1 ?></p>   
                                <p class="languages_english"><?= $about_Skills_Languages_Language_2?></p>
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
                            <a href="mailto:paul.haddou@gmail.com"><?= $about_Contact_Button ?></a>
                        </div>
                    </div>
                </div>
                <div class="infosBlocks_resume">
                    <div class="resume_infos">
                        <p class="infos_title"><?= $about_Resume_Title ?></p>
                        <div class="infos_resumeButton">
                            <a href="../../pdf/CV_Paul-Haddou.pdf" download><?= $about_Resume_Button ?></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php include '../../includes/footer.php' ?>
    
        <script src="../../sources/burger.js"></script>
    </body>
</html>