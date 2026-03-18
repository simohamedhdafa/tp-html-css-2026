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
                <a href="#">Exercice-3</a>
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
            <h1>Exercice 3 : Les tables de multiplication</h1>

            <?php for($i=0; $i<=10; $i++){ ?>
                <article>
                    <h3>table de <?php echo $i; ?></h3>
                    <?php for($j=0; $j<=10; $j++){ ?>
                        <p><?php echo $i; ?> * <?php echo $j; ?> = <?php echo $i*$j; ?></p>
                    <?php } ?>
                </article>
            <?php } ?>

        </section>
    </main>
    
</body>
</html>