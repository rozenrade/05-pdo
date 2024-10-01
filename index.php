<?php
require './src/pdo.php';
session_start();


$pdo = dbConnect();
$stmt = $pdo->query('SELECT * FROM student'); // Faire une requête SQL
$res = $stmt->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card p {
            margin: 0;
            font-size: 16px;
        }

        .card a {
            color: brown;
            text-decoration: none;
            font-size: 14px;
            margin-right: 20px;
        }

        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .delete-btn:hover {
            background-color: darkred;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo a {
            color: #fff;
            font-size: 24px;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 15px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #555;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#">MyWebsite</a>
        </div>
        <ul class="nav-links">
            <li><a href="./template/sign-in.php">Se créer un compte</a></li>
            <li><a href="./template/sign-up.php">Se connecter</a></li>
        </ul>
    </nav>


    <?php foreach ($res as $student) { ?>
        <section>
            <div class="card">
                <div>
                    <p>First Name: <?= htmlspecialchars($student['first_name']); ?></p>
                    <a href="./template/detail.php?id=<?= $student['id']; ?>">Détails de l'étudiant</a>
                </div>

                <form action="./delete.php" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?');">
                    <input type="hidden" name="id" value="<?= $student['id']; ?>">

                    <button class="delete-btn" type="submit">
                        <a href="./src/deleteUser.php?id=<?= $student['id']; ?>">
                            Supprimer
                        </a>
                    </button>
                </form>
            </div>
        </section>
    <?php } ?>
</body>

</html>