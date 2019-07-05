<?php
session_start();
include $PATHS['header'];  

if(isset($_POST['title'], $_POST['container'], $_POST['image'], $_POST['id_user'])) {
    $title = $_POST['title'];
    $container = $_POST['container'];
    $image = $_POST['image'];
    $id_user = $_POST['id_user'];
    createPost($title, $container, $image, $id_user);
    header('location:home');
}

?>

<h2 class="title-create">Poster un article</h2>

<form class="form-create" action="create" method="post">
    <input class="form-control" type="text" name="title" placeholder="Titre" required>
    <textarea class="form-control" type="textarea" name="container" placeholder="Commentaire" required></textarea>
    <input class="form-control" type="text" name="image" placeholder="Url de l'image" required>
    <input class="form-control" type="hidden" name="id_user" value="<?php echo $_SESSION['id']; ?>">
    <input class="btn btn-dark" type="submit" name="create" value="Poster">
</form>
