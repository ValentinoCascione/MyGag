<?php

include $PATHS['header'];

$db = mysqli_connect("localhost", "root", "0000", "gag");

if (isset($_POST['register_btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {
        $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        $sql = "INSERT INTO user(username, password, admin) VALUES('$username', '$password', 0)";
        mysqli_query($db, $sql);
        ?>
        <h4 class="alert alert-success">Tu es enregistré</h4>
        <?php
        $_SESSION['username'] = $username;
    } else {
        ?>
        <h4 class="alert alert-danger">Les deux mots de passe sont différents</h4>
        <?php
    }
}
?>

<form method='post' action='register' class="form-register">
            Username<br>
            <input class="form-control" type='text' name='username' class='textInput'>
            Password<br>
            <input class="form-control" type='password' name='password' class='textInput'>
            Password <br>
            <input class="form-control" type='password' name='password2' class='textInput'>
            <input class="btn btn-dark" type='submit' name='register_btn' value='Register'>
</form>

<?php

include $PATHS['footer'];

?>