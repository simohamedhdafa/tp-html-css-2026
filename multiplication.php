<?php
    $nombre = null;
    $erreur = null;
    $lignes_mul = "";

    if(isset($_GET['nombre'])){
        $valeur = $_GET['nombre'];

        if($valeur === ''){
            $erreur = "Veuillez saisir un nombre.";
        } elseif(!ctype_digit(ltrim($valeur, '-')) || strpos($valeur, '.') !== false){
            $erreur = "La valeur saisie doit être un nombre entier.";
        } else {
            $nombre = (int) $valeur;
            for($i = 0; $i <= 12; $i++){
                $produit = $nombre * $i;
                $lignes_mul .= "$nombre * $i = $produit<br>";
            }
        }
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
                <a href="#">Exercice-2</a>
            </li>
            <li>
                <a href="multiplications.php">Exercice-3</a>
            </li>
            <li>
                <a href="mois.php">Exercice-4</a>
            </li>
            <li>
                <a href="formulaire.php">formulaire de contact</a>
            </li>
        </ul>
    </header>
    <main>
        <section>
            <form action="multiplication.php" method="get">
                <label>Nombre : </label>
                <input type="text" name="nombre">
                <input type="submit" value="Calculer">
            </form>
        </section>
        <section>
            <h1>Exercice 2</h1>
            <?php if($erreur): ?>
                <p class="erreur"><?php echo $erreur; ?></p>
            <?php elseif($nombre !== null): ?>
                <article>
                    <h3>Table de multiplication de <?php echo $nombre; ?></h3>
                    <p><?php echo $lignes_mul; ?></p>
                </article>
            <?php endif; ?>
        </section>
    </main>
    
</body>
</html>