<?php
include '../pdo.php';

$pdo = dbConnect();

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // header('Location:../../template/sign-in.php');
    echo 'err post';
    exit;
}

if (!isset($username) || empty($username)) {
    // header('Location:../../template/sign-in.php');
    echo 'err username';
    exit;
}

if (!isset($password) || empty($password)) {
    // header('Location:../../template/sign-in.php');
    echo 'err pswd';
    exit;
}


if (isset($username) && !empty($username) && isset($username) && !empty($username)) {
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute([
        ':username' => $username,
        ':password' => $password
    ]);

    echo 'inserted correctly';
} else {
}
