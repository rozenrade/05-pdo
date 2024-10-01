<?php
include '../src/pdo.php';
$pdo = dbConnect();

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM student WHERE id = :id");
$stmt->bindParam(':id', $id); // transforme la variable $id en alias ( ici :id )
$stmt->execute();
$student = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div style="max-width: 300px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center; font-family: Arial, sans-serif; background-color: #f9f9f9;">
        <h1 style="font-size: 1.5em; color: #333;">Détail de l'étudiant</h1>
        <p style="font-size: 1.2em; color: #555;">First Name : <?= $student['first_name']; ?></p>
        <p style="font-size: 1.2em; color: #555;">Last Name : <?= $student['last_name']; ?></p>
    </div>

    <a href="./add-student.php">Add details</a>
</body>

</html>