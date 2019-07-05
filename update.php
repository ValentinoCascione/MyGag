<?php
session_start();
include $PATHS['header'];

$res = readPost($_POST['up-2']);
?>
    <h2 class="title-create">Modifier cet article</h2>

    <form class="form-create" action="updatePost" method="post">
        <input class="form-control" type="text" name="title" value="<?php echo $res['title'] ?>" required>
        <textarea class="form-control" type="textarea" name="container" required><?php echo $res['container'] ?></textarea>
        <input class="form-control" type="text" name="image" value="<?php echo $res['image'] ?>" required>
        <input class="form-control" type="hidden" name="idPost" value="<?php echo $res['id'] ?>">
        <input class="btn btn-dark" type="submit" name="create" value="Poster">
    </form>


<?php

    include $PATHS['footer'];