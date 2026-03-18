<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/style.css">
    <title>formulaire de contact</title>
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
                <a href="mois.php">Exercice-4</a>
            </li>
            <li>
                <a href="#">formulaire de contact</a>
            </li>
        </ul>
    </header>
    <main>
        <form action="traitement.php" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <br>
            <label>Prénom</label>
            <input type="text" name="prenom">
            <br>
            <label>Adresse</label>
            <textarea name="adresse"></textarea>
            <br>
            <input type="radio" name="statut" value="etudiant">
            <label name="statut">étudiant</label>
            <input type="radio" name="statut" value="professeur">
            <label name="statut">professeur</label>
            <br>
            <input type="submit" value="Envoyer">
        </form>

    </main>
    <footer>
        
    </footer>
    
</body>
</html>