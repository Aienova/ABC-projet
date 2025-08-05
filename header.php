

<!-- AIE TV Header File -->

<?php $root = "http://localhost/abc-project/aie-tv"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/main.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/header.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/footer.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/styles/shortcodes.css">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>

    <header class="centralizer">
        
        <h1>AIE TV</h1>
        <nav class="fullWidth">
            <ul>
                <li><a href="<?php echo $root; ?>/">Accueil</a></li>
                <li><a href="<?php echo $root; ?>/services">Abonnements</a></li>
                <li><a href="<?php echo $root; ?>/a-propos">A propos</a></li>
                <li><a href="<?php echo $root; ?>/contact">Contact</a></li>
            </ul>
        </nav>

        <nav class="fullWidth blackbg">
            <ul>
                <li><a href="#news">Sortie à la une</a></li>
                <li><a href="#topten">Top 10</a></li>
                <li><a href="#films">Tous nos films</a></li>

            </ul>
        </nav>
    </header>
    