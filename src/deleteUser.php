<?php

include 'pdo.php';

$pdo = dbConnect();

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM student WHERE id = :id");
$stmt->execute(['id' => $id]);

if ($stmt->execute(['id' => $id])) {
    header('Location:../index.php');
} else {
    echo 'error';
}
