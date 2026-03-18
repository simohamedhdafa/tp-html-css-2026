<?php 
    $mois = 1;
    $annee = 2026;
    $nb = 0;

    switch($mois){
        // 4,6,9,11,2
        case 4:
        case 6:
        case 9:
        case 11:
            $nb = 30;
            break;
        case 2:
            // python : nb = 29 if annee%4==0 else 28
            $nb = $annee%4==0 ? 29 : 28; 
            break;
        default:
            $nb = 31;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>description temperature eau</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
    <header>
        <h1>Le premier TP en HTML/CSS</h1>
        <ul>
            <li>
                <a href="index.php">accueil</a> 
            </li>
            <li>
                <a href="page1.php">page 1</a>
            </li>
            <li>
                <a href="eau.php">Exercice-1</a>
            </li>
            <li>
                <a href="multiplication.php">Exercice-2</a>
            </li>
            <li>
                <a href="multiplications.php">Exercice-3</a>
            </li>
            <li>
                <a href="#">Exercice-4</a>
            </li>
            <li>
                <a href="formulaire.php">formulaire de contact</a>
            </li>
        </ul>
    </header>
    <main>
        <section>
            <h1>Exercice 4</h1>
            <p>Il y a <?php echo $nb; ?> jours dans le mois <?php echo $mois; ?> de l'année <?php echo $annee; ?></p>
        </section>
    </main>
    
</body>
</html>