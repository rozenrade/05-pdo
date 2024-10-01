<?php
// include '../src/pdo.php';
session_start();


// $pdo = dbConnect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form {
            max-width: 400px;
            /* Limite la largeur du formulaire */
            margin: 0 auto;
            /* Centre le formulaire sur la page */
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            /* Arrondit les bords */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Ombre légère */
            font-family: Arial, sans-serif;
        }

        form div {
            margin-bottom: 15px;
            /* Espace entre les champs */
        }

        label {
            display: block;
            /* Chaque label occupe toute la ligne */
            margin-bottom: 5px;
            /* Espace entre le label et l'input */
            color: #333;
            font-weight: bold;
            /* Texte en gras pour les labels */
        }

        input {
            width: 100%;
            /* Champs prennent toute la largeur */
            padding: 10px;
            border: 1px solid #ddd;
            /* Bordure fine */
            border-radius: 5px;
            /* Coins légèrement arrondis */
            box-sizing: border-box;
            /* Pour inclure le padding dans la largeur */
            font-size: 1em;
            /* Taille de texte standard */
        }

        input:focus {
            border-color: #4CAF50;
            /* Bordure verte lorsqu'on clique sur le champ */
            outline: none;
            /* Supprime la bordure par défaut */
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
            /* Ajoute une ombre verte */
        }

        button {
            width: 100%;
            /* Bouton large */
            padding: 10px;
            background-color: #4CAF50;
            /* Vert */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
            /* Couleur plus foncée au survol */
        }
    </style>
</head>

<body>
    <!-- Ajouter un formulaire pour créer un auteur -->
    <!-- Si tout se passe bien, renvoyer sur la page author-form -->
    <!-- Afficher les messages d'erreur -->

    <?php
    ?>

    <form action="../src/form/author-form.php" method="POST">
        <div>
            <label for="">First Name :</label>
            <input type="text" name="first_name">
        </div>
        <div>
            <label for="">Last Name :</label>
            <input type="text" name="last_name">
        </div>
        <div>
            <label for="">Age :</label>
            <input type="number" name="age">
        </div>
        <div>
            <label for="">Birthday :</label>
            <input type="date" name="birthday">
        </div>
        <div>
            <label for="">Address :</label>
            <input type="text" name="address">
        </div>
        <div>
            <label for="">Mail :</label>
            <input type="text" name="mail">
        </div>

        <button type="submit">Ajouter</button>
    </form>


</body>

</html>