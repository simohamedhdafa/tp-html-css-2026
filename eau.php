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
                <a href="formulaire.php">formulaire de contact</a>
            </li>
            <li>
                <a href="#">eau</a>
            </li>
        </ul>
    </header>
    <main>
    <?php 
        $temperature = 100;

        if($temperature<0){
            echo "glace";
        }else if($temperature>=0 && $temperature<25){
            echo "froide";
        }else if($temperature>=25 && $temperature<50){
            echo "chaude";
        }else if($temperature>=50 && $temperature<100){
            echo "brulante";
        }else{
            echo "vapeur";
        }
    ?>
    </main>
    
</body>
</html>