<?php

function getDatabaseConnexion() {
    try {
        $user = "root";
        $pass = "0000";
        $pdo = new PDO('mysql:host=localhost;dbname=gag', $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getAllPosts() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * FROM post';
    $rows = $con->query($requete);
    return $rows;
}

function getLogin($name, $pass) {
    $con = getDatabaseConnexion();
    $requete = " SELECT * FROM user WHERE username = '$name'";
    $rows = $con->query($requete);
    $data = $rows->fetch();
    return $data;
}

function readPost($id) {
    $con = getDatabaseConnexion();
    $requete = "SELECT * FROM post WHERE id = '$id'";
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)) {
        return $row[0];
    }
}

function createPost($title, $container, $image, $id_user) {
    try {
        $con = getDatabaseConnexion();
        $sql = "INSERT INTO post (title, container, image, id_user)
                VALUES ('$title', '$container', '$image', '$id_user')";
        $con->exec($sql);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function updatePost($id, $title, $container, $image) {
    try {
        $con = getDatabaseConnexion();
        $requete = "UPDATE post set
                    title = '$title'
                    container = '$container'
                    image = '$image'
                    WHERE id = '$id'";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function deletePost($postId) {
    try {
        $con = getDatabaseConnexion();
        $requete = "DELETE FROM post
                    WHERE id = '$postId'";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}