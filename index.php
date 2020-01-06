<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paul Haddou</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/navbar.min.css">
</head>
<body>
    <?php 
        // Links In the Navbar
        $hrefProjects = '#';
        $hrefdevelopment = 'pages/development/index.php';
        $hrefDesign = 'pages/design/index.php';
        $hrefAbout = 'pages/about/index.php';
    
        // Allows you to correctly indicate in the navbar in which section you are
        $spanAbout = $spanDev = $spanDesign = '';
        $spanProjects = '<span class="spanActiv" ></span>';
        
        include 'includes/navbar.php'
    ?>
    <div></div>
    
    <script src="sources/sectionsUnderlines.js"></script>
</body>
</html>