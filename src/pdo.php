<?php

function dbConnect()
{
    try {

        $pdo = new PDO(
            'mysql:host=localhost;dbname=school_db',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        return $pdo;
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
        exit();
    }
}

/*************

function fetchAllFromTable($tableName, $columnName, $categoryName)
{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=school_db',
        'root',
        ''
    );
    
    $stmt = $pdo->query('SELECT * FROM ' . $tableName);
    $res = $stmt->fetchAll();
    
    foreach ($res as $columnName) {
        echo $categoryName . htmlspecialchars($columnName[$categoryName]);
    }
    
    return $res;
}

 ************/
