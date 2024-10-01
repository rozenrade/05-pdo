<?php

include '../src/pdo.php';

$pdo = dbConnect();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            /* Take full width of the container */
            max-width: 300px;
            /* Limit the width for compact look */
            box-sizing: border-box;
            /* Ensures padding doesn't expand width */
        }

        div {
            margin-bottom: 15px;
            width: 100%;
        }

        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            display: block;
            width: 100%;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
            box-sizing: border-box;
            /* Prevents overflow of input */
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #888;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background 0.3s;
            box-sizing: border-box;
        }

        button:hover {
            background: #555;
        }
    </style>
</head>

<body>
    <form action="../src/form/sign-in.php" method="POST">
        <div>
            <label for="">Username :</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password :</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Sign In</button>
    </form>
</body>

</html>