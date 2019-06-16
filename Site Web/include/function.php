<?php

function getPdo()
{
    $pdo = new PDO("mysql:host=localhost:3306;dbname=projet_web", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function select($sql, $args = array())
{
    $pdo = getPdo();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($args);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function execute($sql, $args = array())
{
    $pdo = getPdo();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($args);
    return $pdo->lastInsertId();
}

if (isset($_GET['id'])) {
    $user = select("SELECT * FROM utilisateur WHERE id_uti = :id_uti", array("id_uti" => $_GET['id']));
    var_dump($user);
}
