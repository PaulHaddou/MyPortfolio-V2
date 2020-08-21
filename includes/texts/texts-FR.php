<?php


$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = parse_url($actual_link);
$url_home = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

if ($actual_link == $url_home)
{
  $switchLanguage = str_replace(array("V2/"),array("V2/EN/"), $url['path']);

} else
{
  $switchLanguage = str_replace(array("V2/","developpement","a-propos","projets","Animation-JS","Newsletter-BPCE","Poster-Deadpool","Motion-Animation-Logo","Newsletter-Refonte","Exercice-Mise-en-Page","Affiches-Synerg"),array("V2/EN/","development","about","projects","JS-Animation","BPCE-Newsletter","Deadpool-Poster","Motion-Logo-Animation","Newsletter-Redesign","Page-Layout-Exercise","Synerg-Posters"), $url['path']);

}


$language = '<div class="language-Choosen"><a href="#">Fr</a><span class="language-Choosen_Span"></span></div><p>/</p><div class="language-Not-Choosen"><a href="'.$switchLanguage.'" >En</a><span class="language-Not-Choosen_Span"></span></div>';


////// Navbar

$navbar_All_Projects = 'Tous les projets';
$navbar_Development = 'Développement';
$navbar_Design = 'Design';
$navbar_About = 'À propos';


$projects_Portfolio_Pdf_Button = 'Mon portfolio au format PDF';
$projects_Soon = '+ Bientôt';



$project_Position_Webmaster = 'Webmaster';
$project_Position_Motion = 'Motion Designer';
$project_Position_Front = 'Dev Front-End';
$project_Position_UI = 'UI Designer';
$project_Position_Graphic = 'Graphiste';
$project_Position_Writer = 'Redacteur';
$project_Position_Swift = 'Dev Swift';
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
$project_Infos_Position = 'Poste';
$project_Infos_Positions = 'Postes';
$project_Infos_Website = 'Site';
$project_Infos_Pdf = 'PDF';
$project_Infos_Invision = 'Invision';
$project_Infos_Youtube = 'Youtube';

$project_Infos_Description_Title = 'Le Projet';

$design_Title = 'Paul Haddou - Design';
$design_Meta_Name = 'Ensemble des projets de design que j\'ai pu entreprendre. J\'ai réalisé des projets qui touchent à du design UI / UX, à du motion ou encore à du graphisme.';

$developpement_Title = 'Paul Haddou - Développement';
$developpement_Meta_Name = 'Ensemble des projets de développement que j\'ai pu accomplir. J\'ai donc entrepris des projets de essentiellement de développement Front en utilisant notamment du SCSS, HTML, PHP, JS voir Three.JS.';

$all_Projects_Title = 'Paul Haddou - Tous les projets';
$all_Projects_Meta_Name = 'Ensemble des projets de design ou de développement que j\'ai pu faire aussi bien en tant que projets perso, que scolaires, que professionels. J\'ai dans l\'ensemble pu réaliser des projets qui touchent au design (UI / UX, motion, graphisme) qu\'au développement web (Front essentiellement)';




                                ///////////////////
                                /////Projects//////
                                ///////////////////



//// Project Studio - HD
$project_Studio_HD_Meta_Name = 'Projet réalisé pour le Studio HD, où j\'ai occupé le poste de Webmaster et de développeur Front.';
$project_Studio_HD_Name = 'Studio Haddou / Dufourcq';
$project_Studio_HD_Name_Path = 'Studio-HD';
$project_Studio_HD_Title = 'Projet - Studio HD';
$project_Studio_HD_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Studio-HD.jpg';
$project_Studio_HD_Link = 'pages/projets/Studio-HD/';
$project_Studio_HD_Position_1 = $project_Position_Webmaster;
$project_Studio_HD_Position_2 = $project_Position_Front;
$project_Studio_HD_Tools_1 = 'HTML, SCSS';
$project_Studio_HD_Tools_2 = 'JS, PHP';
$project_Studio_HD_Date = 'Depuis 2018';
$project_Studio_HD_Img_Alt = 'Image illustrant le projet de site pour le studio HD';

$project_Studio_HD_Paragraph_1 ='Le projet remonte à juin 2018, quand le Studio cherche à créer son site vitrine afin de présenter ses divers projets d’architecture intérieure et design. Ils solicitent mon aide sur ce projet. Je suis chargé de la création du site de A à Z (Design, développement, achat du nom de domaine, mise en ligne, ...). ';
$project_Studio_HD_Paragraph_2 ='Début 2020 les clients souhaitent une refonte globale du site, je réalise donc une nouvelle version. Cela me permet de mettre en application les nouvelles connaisances acquises entre temps. Je réalise un burger menu propre et fonctionnel, corrige les nombreux bugs de responsive, insère du php afin de rendre le code plus lisible, passe le CSS en SCSS, refais le slider existant : le code est donc amélioré de fond en comble ainsi que le design global du site.';
$project_Studio_HD_Paragraph_3 ='';
$project_Studio_HD_Paragraph_4 ='L’un des challenges de ce projet était la réalisation d’un carousel responsive en full JS vanilla. L’objectif était d’obtenir un carousel relativement épuré correspondant au style du studio. ';
$project_Studio_HD_Paragraph_5 ='Le responsive du site a été travaillé afin de s’adapter au mieux à n’importe quel device et à la taille de chaque écran. Le burger menu ainsi que le carousel ont été étudiés afin de les rendre parfaitement responsive.';





//// Project Affiches Synerg
$project_Affiches_Synerg_Meta_Name = 'Projet réalisé pour ma campagne pour Synerg\'hetic, où j\'ai occupé le poste graphiste.';
$project_Affiches_Synerg_Name = 'Affiches de campagne Synerg\'hetic';
$project_Affiches_Synerg_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Affiches-Synerg.jpg';
$project_Affiches_Synerg_Link = 'pages/projets/Affiches-Synerg/';
$project_Affiches_Synerg_Name_Path = 'Affiches-Synerg';
$project_Affiches_Synerg_Title = 'Projet - Affiches Synerg\'hetic';
$project_Affiches_Synerg_Position_1 = $project_Position_Graphic;
$project_Affiches_Synerg_Position_2 = '';
$project_Affiches_Synerg_Tools_1 = $project_Tool_Figma;
$project_Affiches_Synerg_Tools_2 = '';
$project_Affiches_Synerg_Date = '2020';
$project_Affiches_Synerg_Img_Alt = 'Image d\'une de mes affiches pour ma campagne de Synerg\'hetic.';

$project_Affiches_Synerg_Paragraph_1 ='Il s\'agissait de réaliser des affiches de campagnes pour ma candidature au poste de Président de Synerg’hetic, la Junior-Entreprise de mon école.';
$project_Affiches_Synerg_Paragraph_2 ='J’ai choisi de créer quatre affiches représentant selon moi chacune une facette de ma personnalité, mise en avant par un petit paragraphe et illustré par une image. Le tout, sur un ton humoristique et en respectant la charte graphique de la Junior-Entreprise.';
$project_Affiches_Synerg_Paragraph_3 ='';




//// Project Animation JS
$project_Animation_JS_Meta_Name = 'Projet personel où j\'ai réalisé une animation JS servant d\'introduction à mon portfolio, j\'ai occupé le poste de développeur Front.';
$project_Animation_JS_Name = 'Animation JS';
$project_Animation_JS_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Animation-JS.jpg';
$project_Animation_JS_Link = 'pages/projets/Animation-JS/';
$project_Animation_JS_Name_Path = 'Animation-JS';
$project_Animation_JS_Title = 'Projet - Animation JS';
$project_Animation_JS_Position_1 = $project_Position_Front;
$project_Animation_JS_Position_2 = '';
$project_Animation_JS_Tools_1 = $project_Tool_JS;
$project_Animation_JS_Tools_2 = $project_Tool_CSS;
$project_Animation_JS_Date = '2019';
$project_Animation_JS_Img_Alt = 'Image du projet d\'animation en full JS.';

$project_Animation_JS_Paragraph_1 ='J’avais, lors de la première version de mon portfolio, eu envie de réaliser une animation full js qui servirait d’introduction à mon site. ';
$project_Animation_JS_Paragraph_2 ='';
$project_Animation_JS_Paragraph_3 ='';








//// Project Barathon
$project_Barathon_Meta_Name = 'Projet d\'application Barathon réalisé durant mon cursus scolaire, j\'ai occupé le poste de développeur Swift.';
$project_Barathon_Name = 'Barathon';
$project_Barathon_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Barathon.jpg';
$project_Barathon_Link = 'pages/projets/Barathon/';
$project_Barathon_Name_Path = 'Barathon';
$project_Barathon_Title = 'Projet - Barathon';
$project_Barathon_Position_1 = $project_Position_Swift;
$project_Barathon_Position_2 = '';
$project_Barathon_Tools_1 = $project_Tool_Swift;
$project_Barathon_Tools_2 = '';
$project_Barathon_Date = '2020';
$project_Barathon_Img_Alt = 'Image du projet d\'application Barathon codée en Swift';

$project_Barathon_Paragraph_1 ='Projet scolaire réalisé en fin de troisième année : il avait pour but de faire travailler une équipe autour de la création d’une application mobile. Nous avions quatre jours pour imaginer et concevoir une application. Les principaux domaines de compétences mis en avant durant ce projet furent le design UX/UI ainsi que le développement mobile en Swift.';
$project_Barathon_Paragraph_2 ='Nous avons décidé de réaliser une application permettant de créer et de partager une liste de bars à visiter les uns après les autres afin de réaliser un “Barathon” dont le nom nous a été inspiré par le marathon. Une fois une liste de bars créée, l’utilisateur n’a plus qu’à lancer le Barathon et suivre les indications de l’application lui indiquant le premier bar, comment s’y rendre en prenant les transports, à pieds, etc. Pour réaliser cette application, nous avions utilisé l’API Navitia qui permettait de récupérer des informations sur les transports en commun de différentes villes. Le challenge était le fait d\'être seul en charge du développement swift sur ce projet en un temps très restreint : seulement quatre jours.';
$project_Barathon_Paragraph_3 ='Mes camarades sur ce projet : Carla Compan, Emma Roméo, Claire Longuebray, Théo Julien et Pierre Joessel.';
$project_Barathon_Paragraph_4 ='';





//// Project Affiche Deadpool
$project_Affiche_Deadpool_Meta_Name = 'Projet d\'affiche du film Deadpool 2 réalisé durant mon cursus scolaire, j\'ai occupé le poste de graphiste.';
$project_Affiche_Deadpool_Name = 'Affiche Deadpool 2';
$project_Affiche_Deadpool_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Affiche-Deadpool.jpg';
$project_Affiche_Deadpool_Link = 'pages/projets/Affiche-Deadpool/';
$project_Affiche_Deadpool_Name_Path = 'Affiche-Deadpool';
$project_Affiche_Deadpool_Title = 'Projet - Affiche Deadpool 2';
$project_Affiche_Deadpool_Position_1 = $project_Position_Graphic;
$project_Affiche_Deadpool_Position_2 = '';
$project_Affiche_Deadpool_Tools_1 = $project_Tool_Illustrator;
$project_Affiche_Deadpool_Tools_2 = '';
$project_Affiche_Deadpool_Date = '2018';
$project_Affiche_Deadpool_Img_Alt = 'Image du projet d\'affiche Deadpool 2';

$project_Affiche_Deadpool_Paragraph_1 ='Projet scolaire visant à réaliser une affiche de film sous illustrator, il fut réalisé au cours de ma deuxième année de formation. Le but de cet exercice était de reprendre un film existant et de créer une nouvelle affiche en jouant sur les mots et les formes lors de la réalisation.';
$project_Affiche_Deadpool_Paragraph_2 ='J’ai donc décidé de reprendre le film « Deadpool 2 » et d’en faire une affiche sur laquelle on peut retrouver les principaux personnages du film. J’ai donc joué sur les mots afin de représenter : Deadpool ( Dead poo L), Cable et Domino.';
$project_Affiche_Deadpool_Paragraph_3 ='';





//// Project Matte Painting
$project_Matte_Painting_Meta_Name = 'Projet de Matte Painting réalisé durant mon cursus scolaire, j\'ai occupé le poste de Graphiste.';
$project_Matte_Painting_Name = 'Matte Painting';
$project_Matte_Painting_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Matte-Painting.jpg';
$project_Matte_Painting_Link = 'pages/projets/Matte-Painting/';
$project_Matte_Painting_Name_Path = 'Matte-Painting';
$project_Matte_Painting_Title = 'Projet - Matte Painting';
$project_Matte_Painting_Position_1 = $project_Position_Graphic;
$project_Matte_Painting_Position_2 = '';
$project_Matte_Painting_Tools_1 = $project_Tool_Photoshop;
$project_Matte_Painting_Tools_2 = '';
$project_Matte_Painting_Date = '2018';
$project_Matte_Painting_Img_Alt = 'Image du projet de Matte Painting';

$project_Matte_Painting_Paragraph_1 ='Cet exercice scolaire réalisé au cours de ma deuxième année de formation consistait à réaliser un matte painting représentant un monde “post-apocalyptique”. J’ai donc récupéré et assemblé diverses images que j’ai ensuite retouchées sur photoshop afin de donner cette atmosphère de fin du monde à mon image finale.';
$project_Matte_Painting_Paragraph_2 ='';
$project_Matte_Painting_Paragraph_3 ='';





//// Project Exercice de mise en Page
$project_Exercice_Mise_en_Page_Meta_Name = 'Exercice de mise en page réalisé durant mon cursus scolaire, j\'ai occupé le poste de designeur UI.';
$project_Exercice_Mise_en_Page_Name = 'Mise en page';
$project_Exercice_Mise_en_Page_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Exercice-Mise-en-Page.jpg';
$project_Exercice_Mise_en_Page_Link = 'pages/projets/Exercice-Mise-en-Page/';
$project_Exercice_Mise_en_Page_Name_Path = 'Exercice-Mise-en-Page';
$project_Exercice_Mise_en_Page_Title = 'Projet - Exercice de mise en page';
$project_Exercice_Mise_en_Page_Position_1 = $project_Position_UI;
$project_Exercice_Mise_en_Page_Position_2 = '';
$project_Exercice_Mise_en_Page_Tools_1 = $project_Tool_Figma;
$project_Exercice_Mise_en_Page_Tools_2 = '';
$project_Exercice_Mise_en_Page_Date = '2019';
$project_Exercice_Mise_en_Page_Img_Alt = 'Image du projet de mise en page';

$project_Exercice_Mise_en_Page_Paragraph_1 ='Ce projet a été réalisé au cours de ma seconde année de formation lors d’un cours d’UI. Il fallait produire quatre interfaces différentes en ne choisissant que 2 typos (maximum), 2 couleurs (maximum) et en s’aidant des images et des textes fournis.';
$project_Exercice_Mise_en_Page_Paragraph_2 ='J’ai souhaité faire quelque chose d’assez sobre, par conséquent mon choix s’est porté sur les typos suivantes : EBGaramond et ses deux graisses - Extra Bold pour les titres et les boutons & Regular pour le texte courant - car étant de la famille des Garaldes, je ne voyais guère d’autres typographies capables de représenter ce côté “sobre” que je recherchais.';
$project_Exercice_Mise_en_Page_Paragraph_3 ='';





//// Project My Pills
$project_My_Pills_Meta_Name = 'Projet My Pills réalisé durant mon cursus scolaire, j\'ai occupé le poste de designeur UX et designeur UI.';
$project_My_Pills_Name = 'My Pills';
$project_My_Pills_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_My-Pills.jpg';
$project_My_Pills_Link = 'pages/projets/My-Pills/';
$project_My_Pills_Name_Path = 'My-Pills';
$project_My_Pills_Title = 'Projet - My Pills';
$project_My_Pills_Position_1 = $project_Position_UX;
$project_My_Pills_Position_2 = $project_Position_UI;
$project_My_Pills_Tools_1 = $project_Tool_Figma;
$project_My_Pills_Tools_2 = $project_Tool_Invision;
$project_My_Pills_Date = '2020';
$project_My_Pills_Img_Alt = 'Image illustrant le projet My Pills';


$project_My_Pills_Paragraph_1 ='Ce projet réalisé en groupe au cours de ma troisième année de cours avait pour but de réfléchir à l’user expérience d’une application à but médical.';
$project_My_Pills_Paragraph_2 ='Nous avons travaillé en deux phases distinctes : tout d’abord une phase de réflexion conceptuelle et pratique suivie d’une phase de conception graphique ( wireframes, maquettes, ...). Au cours de ce projet, j’ai donc participé aussi bien à la réflexion qu’à la conception graphique.';
$project_My_Pills_Paragraph_3 ='Mes camarades sur ce projet : Louise Bonnaves, Pierre Joessel, Alexis Greux, Matthias Gander';

$project_My_Pills_Infos_Description_Title_Step_1 = 'Phase 1 : Démarche UX';

$project_My_Pills_Paragraph_4 ='Nous avons au départ mis en place un questionnaire afin de cerner les besoins que pourrait avoir un utilisateur de notre application. Nous avons donc interviewé une personne atteinte de sclérose en plaque afin d’avoir un début de réflexion sur le type d’application qui pourrait lui être utile. Ses réponses nous ont permis de trouver la problématique qui allait nous guider dans l’élaboration de notre application.';

$project_My_Pills_Paragraph_5 ='“ Comment assurer une prise de traitement quotidienne en permettant au patient d’éviter tout risque d’oubli ? ”';

$project_My_Pills_Paragraph_6 ='Avec cette problématique, nous nous sommes lancés dans la réalisation d’une empaty map qui nous a permis de réfléchir à toutes les fonctionnalités indispensables à notre application. Afin de la rendre unique, pratique et utile.';

$project_My_Pills_Infos_Description_Title_Step_2 = 'Phase 2 : Conception graphique';

$project_My_Pills_Paragraph_7 = 'Une fois toutes les fonctionnalités trouvées, nous nous sommes concentrés sur la création de wireframes, puis sur la création de maquettes haute-fidélité.';

$project_My_Pills_Infos_Description_Title_Step_3 = 'Les différentes fonctionnalités ';

$project_My_Pills_Paragraph_8 = 'Après avoir renseigné toutes les informations utiles pour son traitement, l’utilisateur arrive sur la page principale de l’application. C’est sur cette page d’accueil que sont indiquées ses heures de rappel ainsi qu’une horloge lui permettant de savoir quand sera son prochain rappel s’il prends sa prise maintenant. Il peut utiliser la petite cloche pour faire sonner son boîtier s’il l’a perdu.';
$project_My_Pills_Paragraph_9 = 'Vient  ensuite la fonctionnalité permettant d’indiquer à l’utilisateur combien de médicaments il doit emporter avec lui selon la durée de son séjour lors d’un voyage. Il suffit pour cela de renseigner les dates d’aller et de retour. Une fenêtre pop-up apparaît avec le nombre exact de cachets à emporter dans ses bagages.';
$project_My_Pills_Paragraph_10 = 'Dans une volonté d’accompagner de rassurer l’utilisateur, nous avons mis en place une section “Conseils” au sein de l’application. L’utilisateur peut rapidement retrouver toutes les informations nécessaires sur la marche à suivre en cas d’oubli d’une prise, une FAQ concernant sa maladie et pleins d’autres informations lui permettant de mieux comprendre sa maladie, de le rassurer et le guider au quotidien. ';
$project_My_Pills_Paragraph_11 = 'La dernière section permet quant à elle de prévenir l’utilisateur quand son stock de médicaments arrive à son terme et de lui permettre de faire la demande de renouvellement d’ordonnance auprès de son médecin. Si  le renouvellement est automatiquement possible, l’ordonnance est directement disponible dans l’application et l’utilisateur peut commander son traitement en pharmacie. Si le renouvellement est impossible, une option prise de RDV est disponible.';
$project_My_Pills_Paragraph_12 = 'En conclusion, notre application possède de nombreuses fonctionnalités afin de répondre au mieux aux différents besoins de l’utilisateur et de l’accompagner au quotidien dans le traitement de sa maladie. MyPills se veut être l’application de suivi de traitement la plus complète du marché.';








//// Project Newsletter Refonte
$project_Newsletter_Refonte_Meta_Name = 'Projet personel de Refonte d\'une Newsletter, j\'ai occupé le poste de designeur UI.';
$project_Newsletter_Refonte_Name = 'Newsletter Cuure';
$project_Newsletter_Refonte_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Newsletter-Refonte.jpg';
$project_Newsletter_Refonte_Link = 'pages/projets/Newsletter-Refonte/';
$project_Newsletter_Refonte_Name_Path = 'Newsletter-Refonte';
$project_Newsletter_Refonte_Title = 'Projet - Refonte de Newsletter';
$project_Newsletter_Refonte_Position_1 = $project_Position_UI;
$project_Newsletter_Refonte_Position_2 = '';
$project_Newsletter_Refonte_Tools_1 = $project_Tool_Figma;
$project_Newsletter_Refonte_Tools_2 = '';
$project_Newsletter_Refonte_Date = '2020';
$project_Newsletter_Refonte_Img_Alt = 'Image illustrant le projet de refonte d\'une newsletter';

$project_Newsletter_Refonte_Paragraph_1 ='Il s’agit d’un projet personnel visant à essayer de refaire une newsletter existante en respectant la charte de l’entreprise. La newsletter devait servir à relancer un client ayant déjà commandé afin de recueillir son avis sur l’offre à laquelle il avait souscrit.';
$project_Newsletter_Refonte_Paragraph_2 ='Pour ce faire, je me suis inspiré de la charte graphique de leur site et de leurs newsletters afin de mettre en place le design et la structure de cette nouvelle newsletter. Les images présentes sur leur site étant de qualité, je les ai intégrées afin d’illustrer le texte. Le texte à été entièrement réécrit afin d’avoir une certaine quantité de contenu à mettre en forme et de mettre en application mes compétences de rédaction acquises lors de mon dernier stage.';
$project_Newsletter_Refonte_Paragraph_3 ='';
$project_Newsletter_Refonte_Paragraph_4 ='';
$project_Newsletter_Refonte_Paragraph_5 ='';




//// Project BPCE
$project_Newsletter_BPCE_Meta_Name = 'Projet de Newsletter réaalisé pour la BPCE durant mon stage, j\'ai occupé le poste de designeur UI et de rédacteur.';
$project_Newsletter_BPCE_Name = 'Newsletter BPCE';
$project_Newsletter_BPCE_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Newsletter-BPCE.jpg';
$project_Newsletter_BPCE_Link = 'pages/projets/Newsletter-BPCE/';
$project_Newsletter_BPCE_Name_Path = 'Newsletter-BPCE';
$project_Newsletter_BPCE_Title = 'Projet - Newsletter BPCE';
$project_Newsletter_BPCE_Position_1 = $project_Position_UI;
$project_Newsletter_BPCE_Position_2 = $project_Position_Writer;
$project_Newsletter_BPCE_Tools_1 = $project_Tool_Figma;
$project_Newsletter_BPCE_Tools_2 = $project_Tool_Mail_Chimp;
$project_Newsletter_BPCE_Date = '2019';
$project_Newsletter_BPCE_Img_Alt = 'Image illustrant le projet de Newsletter réalisé pour BPCE.';

$project_Newsletter_BPCE_Paragraph_1 ='L’une des missions au cours de mon stage de fin de 2ème année au sein du groupe bpce (banque populaire caisse d’épargne) était la rédaction d’une newsletter. Le but de cette newsletter hebdomadaire était de tenir informés les différents testeurs au sein du groupe des évolutions de leur application en bêta test. ';
$project_Newsletter_BPCE_Paragraph_2 ='J’étais donc chargé de la rédaction et de la conception graphique et devais chaque semaine réunir différents membres des équipes impliquées dans la phase de test de l’application. Une fois leurs retours donnés, il me fallait sélectionner les informations les plus importantes et les mettre en page. J’étais libre de décider ton et du design que je souhaitais employer pour rendre cette newsletter accessible et agréable à lire. M’adressant à des personnes travaillant dans un milieu très cadré et sérieux j’ai pensé que le meilleur moyen de communiquer et d’attirer l’attention était d’employer un ton décontracté à l’écrit et d’utiliser une typo plus « cool » pour les titres. L’utilisation des icônes était très utile afin d’illustrer les différentes parties. Une fois la mise en page de la newsletter terminée, je l’envoyais à près de 700 personnes grâce à MailChimp.';
$project_Newsletter_BPCE_Paragraph_3 ='';




//// Project Motion Animation de Logo
$project_Motion_Animation_Logo_Meta_Name = 'Projet de Motion permettant l\'animation d\'un logo réalisé durant mon cursus scolaire, j\'ai occupé le poste de motion designeur.';
$project_Motion_Animation_Logo_Name = 'Motion animation de logo';
$project_Motion_Animation_Logo_Name_Path = 'Motion-Animation-de-Logo';
$project_Motion_Animation_Logo_Title = 'Projet - Motion d\'animation de logo';
$project_Motion_Animation_Logo_Thumbnail = 'images/Thumbnails/Paul-Haddou_Thumbnail-Projects_Motion-Animation-de-Logo.mp4';
$project_Motion_Animation_Logo_Link = 'pages/projets/Motion-Animation-Logo/';
$project_Motion_Animation_Logo_Position_1 = $project_Position_Motion;
$project_Motion_Animation_Logo_Position_2 = '';
$project_Motion_Animation_Logo_Tools_1 = 'After Effects';
$project_Motion_Animation_Logo_Tools_2 = '';
$project_Motion_Animation_Logo_Date = '2020';
$project_Motion_Animation_Logo_Img_Alt = 'Vidéo illustrant le projet de d\'Animation de logo en Motion';

$project_Motion_Animation_Logo_Paragraph_1 ='Ce projet avait pour intention de nous initier aux bases du motion. Nous avons donc pendant une semaine eu des cours initiatiques à l’utilisation d’after effect. Le but était de pouvoir réaliser une courte vidéo d’une dizaines de secondes. Ce motion est le résultat de cette semaine d’initiation.';
$project_Motion_Animation_Logo_Paragraph_2 ='J’avais déjà réalisé une animation de mon nom et prénom pour mon site en full js et n’étais pas totalement satisfait du résultat. Cette initiation à after effect m’a permis de réaliser une nouvelle animation avec un résultat plus concluant.';
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



//// Tableau des Projets de Dev, utilisé sur la page Developpement. 
$developpementProjectsArray = array ();

array_push($developpementProjectsArray,$projectsArray[0],$projectsArray[6],$projectsArray[8]);

//// Tableau des Projets de Design, utilisé sur la page Design. 
$designProjectsArray = array ();

array_push($designProjectsArray,$projectsArray[1],$projectsArray[2],$projectsArray[3],$projectsArray[4],$projectsArray[5],$projectsArray[7],$projectsArray[9],$projectsArray[10]);





                                ////////////////////////////////////
                                /////////////À Propos///////////////
                                ////////////////////////////////////

    
                  
$about_Meta_Name = 'Page à propos servant à donner certaines informations à mon propos comme : un mail de contact, mon cv ou encore mes différentes compétences.';
$about_Title = 'Paul Haddou - À Propos';
                           
$about_Skills_Title = 'Mes Compétences';

$about_Skills_Developpement_Title = 'Développement';
$about_Skills_Developpement_Languages = 'HTML, CSS, SCSS, JS, PHP, Swift, Three.JS, MySQL';
$about_Skills_Developpement_Softwares = 'GitHub, VSCode, Docker';

$about_Skills_Design_Title = 'Design';
$about_Skills_Design_Softwares_1 = 'Illustrator, Photoshop, After Effects, Premiere Pro';
$about_Skills_Design_Softwares_2 = 'Figma, InVision';

$about_Skills_3D_Softwares = 'Sketchup, V-Ray, Rhino';

$about_Skills_Project_Management_Title = 'Gestion de Projet';
$about_Skills_Project_Management_Softwares = 'Trello, Jira, Confluence, Notion';

$about_Skills_Languages_Title = 'Langues';
$about_Skills_Languages_Language_1 = 'Français Natif';
$about_Skills_Languages_Language_2 = 'Anglais - Niveau B1';

$about_Contact_Button = 'Contactez-moi !';

$about_Resume_Title = 'Mon CV';
$about_Resume_Button = 'Consultez-le !';
