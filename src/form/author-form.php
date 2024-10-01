<?php
include '../pdo.php';
session_start(); // Start the session
$pdo = dbConnect();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$mail = $_POST['mail'];

// ERROR REDIRECT

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:../../index.php');
    exit;
}

if (!isset($first_name) || empty($first_name)) {
    $_SESSION["message"] = 'First name is required';
    header('Location:../../template/add-student.php');
    exit;
}

if (!isset($last_name) || empty($last_name)) {
    header('Location:../../index.php');
    exit;
}

if (!isset($age) || empty($age)) {
    header('Location:../../index.php');
    exit;
}

if (!isset($birthday) || empty($birthday)) {
    header('Location:../../index.php');
    exit;
}

if (!isset($address) || empty($address)) {
    header('Location:../../index.php');
    exit;
}

// IF EVERYTHING IS OK

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($first_name) && !empty($first_name)
    ) {
        $stmt = $pdo->prepare("INSERT INTO student (first_name, last_name, age, birthday, address, mail ) VALUES (:first_name, :last_name, :age, :birthday, :address, :mail)");
        $stmt->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':age' => $age,
            ':birthday' => $birthday,
            ':address' => $address,
            ':mail' => $mail
        ]);

        echo 'data sent';
        $_SESSION["message"] = 'success';

        header('Location:../../index.php');
        exit;
    } else {
        echo 'error';
    }
}
