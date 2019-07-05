<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./front/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
if (!isset($_SESSION['username'])) {
    ?> 
    <header>
        <nav>
            <ul>
                <li>TheBlog</li>
                <li><a href="./home">Home</a></li>
                <li><a href="./register">Créer un compte</a></li>
                <li><a href="./login">Se connecter</a></li>
            </ul>
        </nav>
    </header> 
<?php
} else {
?>
    <header>
        <nav>
            <ul>
                <li>TheBlog</li>
                <li><a href="./home">Home</a></li>
                <li><a href="./create">Poster un article</a></li>
                <li><a href="./logout">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>
    <?php
}

