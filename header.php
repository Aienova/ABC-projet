

<!-- AIE TV Header File -->

<?php $root = "http://localhost/abc-project/aie-tv"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : ''; ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/main.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/header.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/footer.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/shortcodes.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/dark-mode.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/about-us.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/fav.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/banner.css">
        <link rel="stylesheet" href="<?php echo $root; ?>/styles/form.css">
       <link rel="stylesheet" href="<?php echo $root; ?>/styles/animation.css">     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title><?php echo $pageTitle; ?></title>
    
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <head>
    
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/header.css">
</head>
   
</head>
<body class="transition-mode">

    <header class="centralizer">
        <div class="header-flex">
            <img class="logo" src="http://localhost/abc-project/aie-tv/media/Logo_blanc.png" alt="Logo AIE TV">
        <nav class="fullWidth">
            <ul>
                <li><a href="<?php echo $root; ?>/">Accueil</a></li>
                <li><a href="<?php echo $root; ?>/services">Abonnements</a></li>
                <li><a href="<?php echo $root; ?>/a-propos">A propos</a></li>
                <li><a href="<?php echo $root; ?>/contact">Contact</a></li>
                <li><button class="dark-mode-btn">🌙</button></li>
            </ul>
        </nav>
    </div>



    <?php
    

    $est_sur_accueil = ($_SERVER['REQUEST_URI'] == '/abc-project/aie-tv/' || 
                       $_SERVER['REQUEST_URI'] == '/abc-project/aie-tv/index.php');

    
    if ($est_sur_accueil) {
        echo '<nav class="fullWidth blackbg">
                <ul>
                    <li><a href="#news">Sortie à la une</a></li>
                    <li><a href="#topten">Top 10</a></li>
                    <li><a href="#films">Tous nos films</a></li>
                </ul>
              </nav>';
    }
    ?>
</header>

<?php if($_POST!=null) { include "popup.php";  }  $_POST = null; ?>
