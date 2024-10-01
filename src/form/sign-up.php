<?php

include '../pdo.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:../../template/sign-up.php');
    exit;
}

if (!isset($_POST['username']) || empty($_POST['username'])) {
    $_SESSION['message'] = 'Veuillez remplir votre nom';
    header('Location:../../template/sign-up.php');
    exit;
}

if (!isset($_POST['pswd']) || empty($_POST['pswd'])) {
    $_SESSION['message'] = 'Veuillez remplir le champ mot de passe';
    header('Location:../../template/sign-up.php');
    exit;
}

$username = trim($_POST['username']);
$pswd = trim($_POST['pswd']);


$pdo = dbConnect();
$stmt = $pdo->prepare('SELECT * FROM users WHERE username=:username');
$stmt->bindParam(':username', $username);
$stmt->execute();
$user = $stmt->fetch();
var_dump($user);


if ($user === false) {
    $_SESSION['message'] = 'a';
    header('Location:../../template/sign-up.php');
    exit;
}

if (!password_verify($pswd, $user['password'])) {
    $_SESSION['message'] = 'b';
    header('Location:../../template/sign-up.php');
    exit;
}

$_SESSION['username_status'] = $user['status'];
$_SESSION['isLogged'] = true;
$_SESSION['message'] = 'Vous êtes connecté';
header('Location:../../index.php');
exit;
