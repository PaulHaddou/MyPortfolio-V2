<?php


$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = parse_url($actual_link);
$switchLanguage = str_replace(array("V2/EN/","development","about","projects","JS-Animation","BPCE-Newsletter","Deadpool-Poster","Motion-Logo-Animation","Newsletter-Redesign","Page-Layout-Exercise","Synerg-Posters"),array("V2/","developpement","a-propos","projets","Animation-JS","Newsletter-BPCE","Poster-Deadpool","Motion-Animation-Logo","Newsletter-Refonte","Exercice-Mise-en-Page","Affiches-Synerg"), $url['path']);

$language = '<div class="language-Not-Choosen"><a href="'.$switchLanguage.'">Fr</a><span class="language-Not-Choosen_Span"></span></div><p>/</p><div class="language-Choosen"><a href="#" >En</a><span class="language-Choosen_Span"></span></div>';


////// Navbar 


$navbar_All_Projects = 'All projects';
$navbar_Development = 'Development';
$navbar_Design = 'Design';
$navbar_About = 'About';


$projects_Portfolio_Pdf_Button = 'My portfolio in PDF format';
$projects_Soon = '+ Soon';



$project_Position_Webmaster = 'Webmaster';
$project_Position_Motion = 'Motion Designer';
$project_Position_Front = 'Front-End Developer';
$project_Position_UI = 'UI Designer';
$project_Position_Graphic = 'Graphic Designer';
$project_Position_Writer = 'Writer';
$project_Position_Swift = 'Swift Developer';
$project_Position_UX = 'UX Designer';

$project_Tool_Figma = 'Figma';
$project_Tool_Invision = 'Invision';
$project_Tool_Mail_Chimp = 'Mail Chimp';
$project_Tool_JS = 'JS';
$project_Tool_CSS = 'CSS';
$project_Tool_Swift = 'Swift';
$project_Tool_Photoshop = 'Photoshop';
$project_Tool_Illustrator = 'Illustrator';


$project_Infos_Technologies = 'Technologies';
$project_Infos_Position = 'Position';
$project_Infos_Positions = 'Positions';
$project_Infos_Website = 'Website';
$project_Infos_Pdf = 'PDF';
$project_Infos_Invision = 'Invision';
$project_Infos_Youtube = 'Youtube';

$project_Infos_Description_Title = 'The Project';

$design_Title = 'Paul Haddou - Design';
$design_Meta_Name = 'All the design projects I\'ve been able to undertake. I have realized projects involving UI / UX design, motion or graphics.';

$development_Title = 'Paul Haddou - Development';
$development_Meta_Name = 'All the development projects I\'ve been able to accomplish. I thus undertook projects of primarily Front development using in particular SCSS, HTML, PHP, JS see Three.JS.';

$all_Projects_Title = 'Paul Haddou - All the projects';
$all_Projects_Meta_Name = 'All the design and development projects I have done as a personal, academic or professional project. I\'ve been able to realize projects that touch design (UI / UX, motion, graphics) and web development (Front mainly).';




                                ///////////////////
                                /////Projects//////
                                ///////////////////



//// Project Studio - HD
$project_Studio_HD_Meta_Name = 'Project carried out for the Studio HD, where I worked as a Webmaster and as a Front-End Developer.';
$project_Studio_HD_Name = 'Studio Haddou / Dufourcq';
$project_Studio_HD_Name_Path = 'Studio-HD';
$project_Studio_HD_Title = 'Project - Studio HD';
$project_Studio_HD_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Studio-HD.jpg';
$project_Studio_HD_Link = 'EN/pages/projects/Studio-HD/';
$project_Studio_HD_Position_1 = $project_Position_Webmaster;
$project_Studio_HD_Position_2 = $project_Position_Front;
$project_Studio_HD_Tools_1 = 'HTML, SCSS';
$project_Studio_HD_Tools_2 = 'JS, PHP';
$project_Studio_HD_Date = 'Since 2018';
$project_Studio_HD_Img_Alt = 'Image illustrating the site project for the HD studio.';

$project_Studio_HD_Paragraph_1 ='The project dates back to June 2018, when the Studio seeks to create its showcase site to present its various interior architecture and design projects. They are asking for my help on this project. I\'m in charge of the creation of the website from A to Z (design, development, domain name purchase, online publishing, ...).';
$project_Studio_HD_Paragraph_2 ='At the beginning of 2020 the customers want a global redesign of the site, so I realize a new version. This allows me to apply the new knowledge acquired in the meantime. I create a clean and functional burger menu, fix the many responsive bugs, insert php to make the code more readable, switch the CSS to SCSS, redo the existing slider: the code is improved from top to bottom as well as the overall design of the site.';
$project_Studio_HD_Paragraph_3 ='';
$project_Studio_HD_Paragraph_4 ='One of the challenges of this project was the realization of a responsive carousel in full JS vanilla. The objective was to obtain a relatively pure carousel corresponding to the style of the studio.';
$project_Studio_HD_Paragraph_5 ='The responsive of the site has been worked to adapt to any device and the size of each screen. The burger menu as well as the carousel have been studied in order to make them perfectly responsive.';





//// Project Affiches Synerg
$project_Affiches_Synerg_Meta_Name = 'A project I did for my campaign for Synergistic, where I held the position of graphic designer.';
$project_Affiches_Synerg_Name = 'Synerg\'hetic campaign posters';
$project_Affiches_Synerg_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Affiches-Synerg.jpg';
$project_Affiches_Synerg_Link = 'EN/pages/projects/Synerg-Posters/';
$project_Affiches_Synerg_Name_Path = 'Affiches-Synerg';
$project_Affiches_Synerg_Title = 'Project - Synerg\'hetic campagne posters';
$project_Affiches_Synerg_Position_1 = $project_Position_Graphic;
$project_Affiches_Synerg_Position_2 = '';
$project_Affiches_Synerg_Tools_1 = $project_Tool_Figma;
$project_Affiches_Synerg_Tools_2 = '';
$project_Affiches_Synerg_Date = '2020';
$project_Affiches_Synerg_Img_Alt = 'Image from one of my posters for my Synerg\'hetic campaign.';

$project_Affiches_Synerg_Paragraph_1 ='It was to make campaign posters for my candidacy as president of Synerg\'hetic, my school\'s Junior Achievement.';
$project_Affiches_Synerg_Paragraph_2 ='I chose to create four posters, each one representing a facet of my personality, highlighted by a small paragraph and illustrated by a picture. The whole, in a humorous tone and respecting the graphic charter of the Junior-Enterprise.';
$project_Affiches_Synerg_Paragraph_3 ='';




//// Project Animation JS
$project_Animation_JS_Meta_Name = 'Personal project where I made a JS animation to serve as an introduction to my portfolio, I worked as a Front Developer.';
$project_Animation_JS_Name = 'JS Animation';
$project_Animation_JS_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Animation-JS.jpg';
$project_Animation_JS_Link = 'EN/pages/projects/JS-Animation/';
$project_Animation_JS_Name_Path = 'Animation-JS';
$project_Animation_JS_Title = 'Project - JS Animation';
$project_Animation_JS_Position_1 = $project_Position_Front;
$project_Animation_JS_Position_2 = '';
$project_Animation_JS_Tools_1 = $project_Tool_JS;
$project_Animation_JS_Tools_2 = $project_Tool_CSS;
$project_Animation_JS_Date = '2019';
$project_Animation_JS_Img_Alt = 'Image of the animation project in full JS.';

$project_Animation_JS_Paragraph_1 ='I had, during the first version of my portfolio, wanted to make a full js animation that would serve as an introduction to my site.';
$project_Animation_JS_Paragraph_2 ='';
$project_Animation_JS_Paragraph_3 ='';








//// Project Barathon
$project_Barathon_Meta_Name = 'Barathon app project during my school days. I worked as a Swift developer.';
$project_Barathon_Name = 'Barathon';
$project_Barathon_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Barathon.jpg';
$project_Barathon_Link = 'EN/pages/projects/Barathon/';
$project_Barathon_Name_Path = 'Barathon';
$project_Barathon_Title = 'Project - Barathon';
$project_Barathon_Position_1 = $project_Position_Swift;
$project_Barathon_Position_2 = '';
$project_Barathon_Tools_1 = $project_Tool_Swift;
$project_Barathon_Tools_2 = '';
$project_Barathon_Date = '2020';
$project_Barathon_Img_Alt = 'Swift-coded image of the Barathon application project...';

$project_Barathon_Paragraph_1 ='School project carried out at the end of the third year: its aim was to get a team to work on the creation of a mobile application. We had four days to imagine and design an application. The main areas of expertise put forward during this project were UX/UI design and mobile development in Swift.';
$project_Barathon_Paragraph_2 ='We decided to create an application to create and share a list of bars to visit one after the other in order to create a "Barathon" whose name was inspired by the marathon. Once a list of bars has been created, the user just has to launch the Barathon and follow the application\'s indications indicating the first bar, how to get there by taking transport, on foot, etc. To create this application, we used the Navitia API, which allowed us to retrieve information about public transport in different cities. The challenge was to be alone in charge of the Swift development on this project in a very short time: only four days.';
$project_Barathon_Paragraph_3 ='My classmates on this project: Carla Compan, Emma Roméo, Claire Longuebray, Théo Julien and Pierre Joessel.';
$project_Barathon_Paragraph_4 ='';





//// Project Affiche Deadpool
$project_Affiche_Deadpool_Meta_Name = 'Poster project for the film Deadpool 2 made during my school years, I worked as a graphic designer.';
$project_Affiche_Deadpool_Name = 'Deadpool 2 poster';
$project_Affiche_Deadpool_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Affiche-Deadpool.jpg';
$project_Affiche_Deadpool_Link = 'EN/pages/projects/Deadpool-Poster/';
$project_Affiche_Deadpool_Name_Path = 'Affiche-Deadpool';
$project_Affiche_Deadpool_Title = 'Project - Deadpool 2 poster';
$project_Affiche_Deadpool_Position_1 = $project_Position_Graphic;
$project_Affiche_Deadpool_Position_2 = '';
$project_Affiche_Deadpool_Tools_1 = $project_Tool_Illustrator;
$project_Affiche_Deadpool_Tools_2 = '';
$project_Affiche_Deadpool_Date = '2018';
$project_Affiche_Deadpool_Img_Alt = 'Image from the Deadpool 2 poster project.';

$project_Affiche_Deadpool_Paragraph_1 ='A school project aiming at making a film poster under illustrator, it was carried out during my second year of training. The goal of this exercise was to take an existing film and create a new poster by playing with words and shapes during the making.';
$project_Affiche_Deadpool_Paragraph_2 ='So I decided to take up the film "Deadpool 2" and make a poster on which you can see the main characters of the film. So I played with words to represent: Deadpool ( Dead poo L), Cable and Domino.';
$project_Affiche_Deadpool_Paragraph_3 ='';





//// Project Matte Painting
$project_Matte_Painting_Meta_Name = 'Matte Painting project done during my school years, I worked as a Graphic Designer.';
$project_Matte_Painting_Name = 'Matte Painting';
$project_Matte_Painting_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Matte-Painting.jpg';
$project_Matte_Painting_Link = 'EN/pages/projects/Matte-Painting/';
$project_Matte_Painting_Name_Path = 'Matte-Painting';
$project_Matte_Painting_Title = 'Project - Matte Painting';
$project_Matte_Painting_Position_1 = $project_Position_Graphic;
$project_Matte_Painting_Position_2 = '';
$project_Matte_Painting_Tools_1 = $project_Tool_Photoshop;
$project_Matte_Painting_Tools_2 = '';
$project_Matte_Painting_Date = '2018';
$project_Matte_Painting_Img_Alt = 'Matte Painting project image';

$project_Matte_Painting_Paragraph_1 ='This school exercise carried out during my second year of training consisted in making a matte painting representing a "post-apocalyptic" world. So I recovered and assembled various images that I then retouched on photoshop in order to give this end of the world atmosphere to my final image.';
$project_Matte_Painting_Paragraph_2 ='';
$project_Matte_Painting_Paragraph_3 ='';





//// Project Exercice de mise en Page
$project_Exercice_Mise_en_Page_Meta_Name = 'A layout exercise I did during my school years as a UI designer.';
$project_Exercice_Mise_en_Page_Name = 'Page layout exercise';
$project_Exercice_Mise_en_Page_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Exercice-Mise-en-Page.jpg';
$project_Exercice_Mise_en_Page_Link = 'EN/pages/projects/Page-Layout-Exercise/';
$project_Exercice_Mise_en_Page_Name_Path = 'Exercice-Mise-en-Page';
$project_Exercice_Mise_en_Page_Title = 'Project - Page layout exercise';
$project_Exercice_Mise_en_Page_Position_1 = $project_Position_UI;
$project_Exercice_Mise_en_Page_Position_2 = '';
$project_Exercice_Mise_en_Page_Tools_1 = $project_Tool_Figma;
$project_Exercice_Mise_en_Page_Tools_2 = '';
$project_Exercice_Mise_en_Page_Date = '2019';
$project_Exercice_Mise_en_Page_Img_Alt = 'Image of the layout project';

$project_Exercice_Mise_en_Page_Paragraph_1 ='This project was carried out during my second year of training in an IU course. I had to produce four different interfaces by choosing only 2 typos (maximum), 2 colours (maximum) and using the images and texts provided.';
$project_Exercice_Mise_en_Page_Paragraph_2 ='I wanted to do something fairly sober, so I chose the following typos: EBGaramond and its two weights - Extra Bold for the titles and buttons & Regular for the current text - because being from the Garaldes family, I couldn\'t think of any other typefaces capable of representing the "sober" side I was looking for.';
$project_Exercice_Mise_en_Page_Paragraph_3 ='';





//// Project My Pills
$project_My_Pills_Meta_Name = 'My Pills project done during my school years, I served as a UX and UI destructor.';
$project_My_Pills_Name = 'My Pills';
$project_My_Pills_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_My-Pills.jpg';
$project_My_Pills_Link = 'EN/pages/projects/My-Pills/';
$project_My_Pills_Name_Path = 'My-Pills';
$project_My_Pills_Title = 'Project - My Pills';
$project_My_Pills_Position_1 = $project_Position_UX;
$project_My_Pills_Position_2 = $project_Position_UI;
$project_My_Pills_Tools_1 = $project_Tool_Figma;
$project_My_Pills_Tools_2 = $project_Tool_Invision;
$project_My_Pills_Date = '2020';
$project_My_Pills_Img_Alt = 'Image illustrating the My Pills project';


$project_My_Pills_Paragraph_1 ='The goal of this group project during my third year was to reflect on the user experience of a medical application.';
$project_My_Pills_Paragraph_2 ='We worked in two distinct phases: first of all a conceptual and practical reflection phase followed by a graphic design phase (wireframes, mock-ups, ...). During this project, I took part in the reflection as well as in the graphic design.';
$project_My_Pills_Paragraph_3 ='My classmates on this project : Louise Bonnaves, Pierre Joessel, Alexis Greux, Matthias Gander';

$project_My_Pills_Infos_Description_Title_Step_1 = 'Phase 1: UX approach';

$project_My_Pills_Paragraph_4 ='We initially set up a questionnaire to identify the needs that a user of our application might have. So we interviewed a person with multiple sclerosis to get a start on thinking about the type of application that could be useful to him or her. His answers helped us find the problem that would guide us in developing our application.';

$project_My_Pills_Paragraph_5 ='“ How to ensure a daily intake of treatment while allowing the patient to avoid any risk of forgetting ? ”';

$project_My_Pills_Paragraph_6 ='With this problem, we started to create an empaty map which allowed us to think about all the functionalities essential to our application. In order to make it unique, practical and useful.';

$project_My_Pills_Infos_Description_Title_Step_2 = 'Phase 2: Graphic design';

$project_My_Pills_Paragraph_7 = 'Once all the features were found, we focused on creating wireframes and then on creating high-fidelity mock-ups.';

$project_My_Pills_Infos_Description_Title_Step_3 = 'The different functionalities';

$project_My_Pills_Paragraph_8 = 'After having filled in all the useful information for its treatment, the user arrives on the main page of the application. It is on this home page that his reminder times are indicated as well as a clock that allows him to know when his next reminder will be if he takes his plug now. He can use the little bell to ring his box if he has lost it.';
$project_My_Pills_Paragraph_9 = 'Then there is the functionality to tell the user how many medicines to take with them depending on how long they will be travelling for. All you have to do is enter the dates of the outward and return journeys. A pop-up window appears with the exact number of pills to take with you in your luggage.';
$project_My_Pills_Paragraph_10 = 'In a desire to help reassure the user, we have set up a "Tips" section within the application. The user can quickly find all the necessary information on the procedure to follow in case he forgets to take a pill, an FAQ concerning his illness and a lot of other information allowing him to better understand his illness, to reassure him and guide him on a daily basis.';
$project_My_Pills_Paragraph_11 = 'The last section warns the user when his or her stock of drugs is running out and allows the user to request a prescription renewal from his or her doctor. If the renewal is automatically possible, the prescription is directly available in the application and the user can order his treatment in a pharmacy. If renewal is not possible, an appointment option is available.';
$project_My_Pills_Paragraph_12 = 'In conclusion, our application has many functionalities to best meet the user\'s different needs and to accompany him in the daily treatment of his disease. MyPills aims to be the most complete treatment monitoring application on the market.';








//// Project Newsletter Refonte
$project_Newsletter_Refonte_Meta_Name = 'Personal newsletter redesign project. I held the position of UI designer.';
$project_Newsletter_Refonte_Name = 'Cuure\'s Newsletter';
$project_Newsletter_Refonte_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Newsletter-Refonte.jpg';
$project_Newsletter_Refonte_Link = 'EN/pages/projects/Newsletter-Redesign/';
$project_Newsletter_Refonte_Name_Path = 'Newsletter-Refonte';
$project_Newsletter_Refonte_Title = 'Project - Newsletter redesign';
$project_Newsletter_Refonte_Position_1 = $project_Position_UI;
$project_Newsletter_Refonte_Position_2 = '';
$project_Newsletter_Refonte_Tools_1 = $project_Tool_Figma;
$project_Newsletter_Refonte_Tools_2 = '';
$project_Newsletter_Refonte_Date = '2020';
$project_Newsletter_Refonte_Img_Alt = 'Image illustrating the project to redesign a newsletter';

$project_Newsletter_Refonte_Paragraph_1 ='This is a personal project to try to redo an existing newsletter in accordance with the company\'s charter. The newsletter was to be used to relaunch a customer who had already ordered in order to collect his opinion on the offer he had subscribed to.';
$project_Newsletter_Refonte_Paragraph_2 ='To do so, I was inspired by the graphic charter of their website and their newsletters to set up the design and structure of this new newsletter. The images on their website being of high quality, I integrated them to illustrate the text. The text has been entirely rewritten in order to have a certain amount of content to format and to apply my writing skills acquired during my last internship.';
$project_Newsletter_Refonte_Paragraph_3 ='';
$project_Newsletter_Refonte_Paragraph_4 ='';
$project_Newsletter_Refonte_Paragraph_5 ='';




//// Project BPCE
$project_Newsletter_BPCE_Meta_Name = 'Newsletter project carried out for the BPCE during my internship, I held the position of UI designer and editor.';
$project_Newsletter_BPCE_Name = 'BPCE Newsletter';
$project_Newsletter_BPCE_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Newsletter-BPCE.jpg';
$project_Newsletter_BPCE_Link = 'EN/pages/projects/BPCE-Newsletter/';
$project_Newsletter_BPCE_Name_Path = 'Newsletter-BPCE';
$project_Newsletter_BPCE_Title = 'Project - BPCE Newsletter';
$project_Newsletter_BPCE_Position_1 = $project_Position_UI;
$project_Newsletter_BPCE_Position_2 = $project_Position_Writer;
$project_Newsletter_BPCE_Tools_1 = $project_Tool_Figma;
$project_Newsletter_BPCE_Tools_2 = $project_Tool_Mail_Chimp;
$project_Newsletter_BPCE_Date = '2019';
$project_Newsletter_BPCE_Img_Alt = 'Image illustrating the Newsletter project carried out for BPCE.';

$project_Newsletter_BPCE_Paragraph_1 ='One of the missions during my internship at the end of my 2nd year in the bpce group (Banque Populaire Caisse D\'épargne) was to write a newsletter. The purpose of this weekly newsletter was to keep the different testers within the group informed about the evolutions of their beta test application. ';
$project_Newsletter_BPCE_Paragraph_2 ='So I was in charge of the writing and graphic design and had to bring together every week different members of the teams involved in the testing phase of the application. Once their feedback was given, I had to select the most important information and layout it. I was free to decide on the tone and design I wanted to use to make this newsletter accessible and enjoyable to read. As I was talking to people working in a very tight and serious environment, I thought that the best way to communicate and attract attention was to use a relaxed tone of writing and a cooler typeface for the headlines. The use of icons was very useful to illustrate the different parts. Once the layout of the newsletter was finished, I sent it to about 700 people using MailChimp.';
$project_Newsletter_BPCE_Paragraph_3 ='';




//// Project Motion Animation de Logo
$project_Motion_Animation_Logo_Meta_Name = 'As a motion project to animate a logo I created during my school years, I held the position of Lord\'s Motion-maker.';
$project_Motion_Animation_Logo_Name = 'Motion logo animation';
$project_Motion_Animation_Logo_Name_Path = 'Motion-Animation-de-Logo';
$project_Motion_Animation_Logo_Title = 'Project - Motion logo animation';
$project_Motion_Animation_Logo_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Motion-Animation-de-Logo.mp4';
$project_Motion_Animation_Logo_Link = 'EN/pages/projects/Motion-Logo-Animation/';
$project_Motion_Animation_Logo_Position_1 = $project_Position_Motion;
$project_Motion_Animation_Logo_Position_2 = '';
$project_Motion_Animation_Logo_Tools_1 = 'After Effects';
$project_Motion_Animation_Logo_Tools_2 = '';
$project_Motion_Animation_Logo_Date = '2020';
$project_Motion_Animation_Logo_Img_Alt = 'Video illustrating the Logo Animation in Motion project.';

$project_Motion_Animation_Logo_Paragraph_1 ='This project was intended to introduce us to the basics of the motion. So for a week we had introductory courses in the use of after effect. The goal was to be able to make a short video of about ten seconds. This motion is the result of this week of initiation.';
$project_Motion_Animation_Logo_Paragraph_2 ='I had already made an animation of my name and surname for my site in full js and was not totally satisfied with the result. This initiation to after effect allowed me to make a new animation with a more conclusive result.';
$project_Motion_Animation_Logo_Paragraph_3 ='';
$project_Motion_Animation_Logo_Paragraph_4 ='';
$project_Motion_Animation_Logo_Paragraph_5 ='';



                                ////////////////////////////////////
                                /////Tableaux pour les projets//////
                                ////////////////////////////////////

//// Tableau des Projets, utilisé sur la home.
$projectsArray = array (

    //array("titre","poste","image","link"),

    array("$project_Studio_HD_Name","$project_Position_Webmaster - $project_Position_Front","$path_Files_Head$project_Studio_HD_Thumbnail","$path_Files_Head$project_Studio_HD_Link"),
    array("$project_Motion_Animation_Logo_Name","$project_Position_Motion","$path_Files_Head$project_Motion_Animation_Logo_Thumbnail","$path_Files_Head$project_Motion_Animation_Logo_Link"),    
    array("$project_Newsletter_Refonte_Name","$project_Position_UI","$path_Files_Head$project_Newsletter_Refonte_Thumbnail","$path_Files_Head$project_Newsletter_Refonte_Link"),    
    array("$project_My_Pills_Name","$project_Position_UX - $project_Position_UI","$path_Files_Head$project_My_Pills_Thumbnail","$path_Files_Head$project_My_Pills_Link"),    
    array("$project_Newsletter_BPCE_Name","$project_Position_UI - $project_Position_Writer","$path_Files_Head$project_Newsletter_BPCE_Thumbnail","$path_Files_Head$project_Newsletter_BPCE_Link"),    
    array("$project_Affiches_Synerg_Name","$project_Position_Graphic","$path_Files_Head$project_Affiches_Synerg_Thumbnail","$path_Files_Head$project_Affiches_Synerg_Link"),
    array("$project_Animation_JS_Name","$project_Position_Front","$path_Files_Head$project_Animation_JS_Thumbnail","$path_Files_Head$project_Animation_JS_Link"),    
    array("$project_Exercice_Mise_en_Page_Name","$project_Position_UI","$path_Files_Head$project_Exercice_Mise_en_Page_Thumbnail","$path_Files_Head$project_Exercice_Mise_en_Page_Link"),    
    array("$project_Barathon_Name","$project_Position_Swift","$path_Files_Head$project_Barathon_Thumbnail","$path_Files_Head$project_Barathon_Link"),
    array("$project_Matte_Painting_Name","$project_Position_Graphic","$path_Files_Head$project_Matte_Painting_Thumbnail","$path_Files_Head$project_Matte_Painting_Link"),
    array("$project_Affiche_Deadpool_Name","$project_Position_Graphic","$path_Files_Head$project_Affiche_Deadpool_Thumbnail","$path_Files_Head$project_Affiche_Deadpool_Link"),
    );



//// Tableau des Projets de Dev, utilisé sur la page Development. 
$developmentProjectsArray = array ();

array_push($developmentProjectsArray,$projectsArray[0],$projectsArray[6],$projectsArray[8]);

//// Tableau des Projets de Design, utilisé sur la page Design. 
$designProjectsArray = array ();

array_push($designProjectsArray,$projectsArray[1],$projectsArray[2],$projectsArray[3],$projectsArray[4],$projectsArray[5],$projectsArray[7],$projectsArray[9],$projectsArray[10]);





                                ////////////////////////////////////
                                /////////////About///////////////
                                ////////////////////////////////////

    
                  
$about_Meta_Name = 'About page used to give some information about me such as: a contact email, my resume or my different skills.';
$about_Title = 'Paul Haddou - About';
                           
$about_Skills_Title = 'My skills';

$about_Skills_Development_Title = 'Development';
$about_Skills_Development_Languages = 'HTML, CSS, SCSS, JS, PHP, Swift, Three.JS, MySQL';
$about_Skills_Development_Softwares = 'GitHub, VSCode, Docker';

$about_Skills_Design_Title = 'Design';
$about_Skills_Design_Softwares_1 = 'Illustrator, Photoshop, After Effects, Premiere Pro';
$about_Skills_Design_Softwares_2 = 'Figma, InVision';

$about_Skills_3D_Softwares = 'Sketchup, V-Ray, Rhino';

$about_Skills_Project_Management_Title = 'Project Management';
$about_Skills_Project_Management_Softwares = 'Trello, Jira, Confluence, Notion';

$about_Skills_Languages_Title = 'Languages';
$about_Skills_Languages_Language_1 = 'Native French';
$about_Skills_Languages_Language_2 = 'English - Level B1';

$about_Contact_Button = 'Contact me !';

$about_Resume_Title = 'My Resume';
$about_Resume_Button = 'Check it out !';
